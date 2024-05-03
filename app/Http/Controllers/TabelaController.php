<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class TabelaController extends Controller
{
    public function tabela_brasileiro()
    {
        // Configurando o cliente cURL com verificação de certificado desativada temporariamente
        $client = new Client([
            'verify' => false,
        ]);
    
        // Realizando a solicitação HTTP usando cURL
        $response = $client->get('https://iffhs.com/posts/2452');
    
        // Obtendo o corpo da resposta HTTP
        $html = (string) $response->getBody();
    
        // Criando uma instância do Crawler para analisar o HTML
        $crawler = new Crawler($html);
    
        // Inicializando um array para armazenar os dados da tabela HTML
        $rows = [];
    
        // Iterando sobre as linhas da tabela e extraindo os dados das células
        $crawler->filter('table tr')->each(function ($row) use (&$rows) {
            $rowData = [];
            $row->filter('td')->each(function ($cell) use (&$rowData) {
                $rowData[] = $cell->text();
            });
            $rows[] = $rowData;
        });

        // Retornando a view 'chances' com os dados da tabela HTML e da tabela chancesvit
        return view('welcome', compact('rows'));
    }
}