<?php

namespace App\Command;

use App\Entity\Gare;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CsvImportCommand extends Command
{

    private  $manager;
    private  $pathDonnee;

    private  $io;

    public function __construct(
        EntityManagerInterface $manager,
        string $pathDonnee
    ){
        parent::__construct();
        $this->pathDonnee = $pathDonnee;
        $this->manager = $manager;
    }

    protected static $defaultName = 'import:csv-ratp';
    protected static $defaultDescription = 'Add a short description for your command';

    protected function configure(): void
    {
        $this
            ->setDescription('importer données csv')
        ;
    }

    protected function initialize(InputInterface $input, OutputInterface $output): void
    {
        $this->io = new SymfonyStyle($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->importCsv();

        return Command::SUCCESS;
    }

    private function recupData():array
    {
        $fichier = $this->pathDonnee . 'exports-des-gares-idf.csv';
        $fichierExtension = pathinfo($fichier, PATHINFO_EXTENSION);

        $normalizers = [new ObjectNormalizer()];
        $encoders = [ new CsvEncoder()]; 
        $serializer = new Serializer($normalizers, $encoders);

        /** @var string $fichierString */
        $fichierString = file_get_contents($fichier);

        $context = [
            CsvEncoder::DELIMITER_KEY => ';',
            CsvEncoder::ENCLOSURE_KEY => '"',
            CsvEncoder::ESCAPE_CHAR_KEY => '\\',
            CsvEncoder::KEY_SEPARATOR_KEY => ',',
        ];
        $donnee = $serializer->decode($fichierString,'csv',$context);
        //dd($fichierString);
        //dd($donnee);
        return $donnee;
    }

    private function importCsv()
    {
        foreach($this->recupData() as $row){
            $gare = $this->manager->getRepository(Gare::class)->findOneBy(['garesId'=>$row["gares_id"]]);

            if(!$gare){
                $gare = new Gare();
                $gare->setGeoPoint($row["Geo Point"])
                    ->setGeoShape($row["Geo Shape"])
                    ->setObjectid($row["OBJECTID"])
                    ->setIdRefZdl($row["id_ref_zdl"])
                    ->setGaresId($row["gares_id"])
                    ->setNomGare($row["nom_gare"])
                    ->setNomlong($row["nomlong"])
                    ->setNomIv($row["nom_iv"])
                    ->setNumMod($row["num_mod"])
                    ->setMode($row["mode_"])
                    ->setFer($row["fer"])
                    ->setTrain($row["train"])
                    ->setRer($row["rer"])
                    ->setMetro($row["metro"])
                    ->setTramway($row["tramway"])
                    ->setNavette($row["navette"])
                    ->setVal($row["val"])
                    ->setTerfer($row["terfer"])
                    ->setTertrain($row["tertrain"])
                    ->setTerrer($row["terrer"])
                    ->setTermetro($row["termetro"])
                    ->setTertram($row["tertram"])
                    ->setTernavette($row["ternavette"])
                    ->setTerval($row["terval"])
                    ->setIdrefliga($row["idrefliga"])
                    ->setIdrefligc($row["idrefligc"])
                    ->setLigne($row["ligne"])
                    ->setCodLigf($row["cod_ligf"])
                    ->setLigneCode($row["ligne_code"])
                    ->setIndiceLig($row["indice_lig"])
                    ->setReseau($row["reseau"])
                    ->setResCom($row["res_com"])
                    ->setCodResf($row["cod_resf"])
                    ->setResStif($row["res_stif"])
                    ->setExploitant($row["exploitant"])
                    ->setNumPsr($row["num_psr"])
                    ->setIdf($row["idf"])
                    ->setPrincipal($row["principal"])
                    ->setX($row["x"])
                    ->setY($row["y"]);
                $this->manager->persist($gare);
            }
        }
        $this->manager->flush();
        
    }
}
