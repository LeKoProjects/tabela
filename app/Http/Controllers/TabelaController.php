<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TabelaController extends Controller
{
    public function atualizar()
    {
        // Caminho para o arquivo Excel
        $filePath = public_path('/Sites.xlsx');

        // Carrega o arquivo Excel
        $spreadsheet = IOFactory::load($filePath);

        // Obtém a primeira planilha do arquivo
        $sheet = $spreadsheet->getSheet(0);

        // Obtém o número da última linha
        $lastRow = 12;

        // Array para armazenar os dados
        $data = [];

        // Percorre as linhas do arquivo Excel
        for ($row = 1; $row <= $lastRow; $row++) {
            // Obtém os valores das células
            $cellAValue = $sheet->getCell('L' . $row)->getValue();
            $cellBValue = $sheet->getCell('N' . $row)->getValue();
            $cellCValue = $sheet->getCell('P' . $row)->getValue();
            $cellAValue = $sheet->getCell('AB' . $row)->getValue();
            $cellBValue = $sheet->getCell('AD' . $row)->getValue();

            // Adiciona os valores ao array
            $data[] = [
                'nome' => $cellAValue,
                'pais' => $cellBValue,
                'ano' => $cellCValue,
            ];
        }

        // Retorna a view com os dados
        return view('welcome')->with('data', $data);
    }
}
