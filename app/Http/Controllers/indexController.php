<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    
    public function index(){
        
        $info_escolas = DB::table('imoveis')->get();
         return view('index', ['info_escolas' => $info_escolas]);
    }

    public function acessar_escola($codigo){
        
        $codigos = DB::table('imoveis')->get('codigo');

        $info_escola_imoveis = DB::table('imoveis')->where('codigo', $codigo)->get()[0];
        
        #Codigo da escola pra ser usado como chave nos querys
        $codigo_escola = $codigo;

        #Arrays com informações do banco de dados
        $info_escola_terceirizados = DB::table('terceirizados')->where('codigo_imovel', $codigo_escola)->get();
        $info_escola_gestores = DB::table('gestores')->where('codigo_imovel', $codigo_escola)->get()[0];
        $info_escola_repasses = DB::table('repasses')->where('codigo_imovel', $codigo_escola)->get();


        #Inicia Variaveis de Valor dos Contratos
        $valor_merendeira = 0;
        $valor_limpeza = 0;
        $valor_vigilancia = 0;
        
        #Soma os valores dos terceirizados
        foreach($info_escola_terceirizados as $terceirizado){
            
            if ($terceirizado->tipo == 'MERENDEIRA'){
                
                $valor_merendeira = $valor_merendeira + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };
            
            if($terceirizado->tipo == 'LIMPEZA'){
                
                $valor_limpeza = $valor_limpeza + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };

            if($terceirizado->tipo == 'VIGILANCIA'){
                
                $valor_vigilancia = $valor_vigilancia + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };
        }

        #Inicia Variaveis de valor dos Repasses
        $valor_manutencao = 0;
        $valor_terceiros = 0;
        $valor_outros = 0;


        #Soma os valores dos contratos
        foreach($info_escola_repasses as $repasses){
            
            if ($repasses->tipo_repasse == 'MANUTENCAO'){
                $valor_manutencao = $valor_manutencao + $repasses->valor;
            };
            
            if($repasses->tipo_repasse == 'PAGAMENTO TERCEIROS'){
                $valor_terceiros = $valor_terceiros + $repasses->valor;
            };

            if($repasses->tipo_repasse == 'OUTROS'){
                $valor_outros = $valor_outros + $repasses->valor;
            };
        }

        $caixa_escolar = $valor_manutencao + $valor_terceiros + $valor_outros;

        $info_escolas_json = response()->json([
            'info_escola' =>
                array('nome' => $info_escola_imoveis->nome,
                'codigo_inep' => $info_escola_imoveis->inep,
                'cnpj' => '',
                'status' => $info_escola_imoveis->situacao,
                'vagas' => '',
                'tipo' => $info_escola_imoveis->anexo,
                'endereco' => $info_escola_imoveis->logradouro,
                'localidade' => $info_escola_imoveis->cidade,
                'dados' => $info_escola_imoveis->ocupacao,
                'bairro' => $info_escola_imoveis->bairro,
                'telefone' => '',
                'tipo_de_escola' => $info_escola_imoveis->descricao,
                'cep' => $info_escola_imoveis->cep,
                'regional' => $info_escola_imoveis->regional,
                'tipo_de_ensino' => '',
                'tipo_de_anexo' =>$info_escola_imoveis->anexo,
            ),

            'info_gestor' =>
                array('nome' => $info_escola_gestores->nome,
                'email' => $info_escola_gestores->email,
                'tipo' => $info_escola_gestores->cargo,
                'telefone' =>$info_escola_gestores->celular,
                'forma_selecao' => $info_escola_gestores->tipo_eleito,
            ),

            'info_terceirizados' =>
                array('vigilancia' => $valor_vigilancia,
                'merendeira' => $valor_merendeira,
                'limpeza' => $valor_limpeza),
            
            'info_repasses' =>
            array('caixa_escolar'=> $caixa_escolar,
            'terceiros' => $valor_terceiros,
            'outros'=> $valor_outros,
            'manutencao'=>$valor_manutencao)
        ]);

        return $info_escolas_json;
    }
    
    public function acessar($codigo){

        $codigos = DB::table('imoveis')->get('codigo');

        $info_escola_imoveis = DB::table('imoveis')->where('codigo', $codigo)->get()[0];
        
        #Codigo da escola pra ser usado como chave nos querys
        $codigo_escola = $codigo;

        #Arrays com informações do banco de dados
        $info_escola_terceirizados = DB::table('terceirizados')->where('codigo_imovel', $codigo_escola)->get();
        $info_escola_gestores = DB::table('gestores')->where('codigo_imovel', $codigo_escola)->get()[0];
        $info_escola_repasses = DB::table('repasses')->where('codigo_imovel', $codigo_escola)->get();


        #Inicia Variaveis de Valor dos Contratos
        $valor_merendeira = 0;
        $valor_limpeza = 0;
        $valor_vigilancia = 0;
        
        #Soma os valores dos terceirizados
        foreach($info_escola_terceirizados as $terceirizado){
            
            if ($terceirizado->tipo == 'MERENDEIRA'){
                
                $valor_merendeira = $valor_merendeira + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };
            
            if($terceirizado->tipo == 'LIMPEZA'){
                
                $valor_limpeza = $valor_limpeza + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };

            if($terceirizado->tipo == 'VIGILANCIA'){
                
                $valor_vigilancia = $valor_vigilancia + ($terceirizado->valor_unitario * $terceirizado->quantidade);
            };
        }

        #Inicia Variaveis de valor dos Repasses
        $valor_manutencao = 0;
        $valor_terceiros = 0;
        $valor_outros = 0;


        #Soma os valores dos contratos
        foreach($info_escola_repasses as $repasses){
            
            if ($repasses->tipo_repasse == 'MANUTENCAO'){
                $valor_manutencao = $valor_manutencao + $repasses->valor;
            };
            
            if($repasses->tipo_repasse == 'PAGAMENTO TERCEIROS'){
                $valor_terceiros = $valor_terceiros + $repasses->valor;
            };

            if($repasses->tipo_repasse == 'OUTROS'){
                $valor_outros = $valor_outros + $repasses->valor;
            };
        }

        $caixa_escolar = $valor_manutencao + $valor_terceiros + $valor_outros;

        $info_escolas_json = response()->json([
            'info_escola' =>
                array('nome' => $info_escola_imoveis->nome,
                'codigo_inep' => $info_escola_imoveis->inep,
                'cnpj' => '',
                'status' => $info_escola_imoveis->situacao,
                'vagas' => '',
                'tipo' => $info_escola_imoveis->anexo,
                'endereco' => $info_escola_imoveis->logradouro,
                'localidade' => $info_escola_imoveis->cidade,
                'dados' => $info_escola_imoveis->ocupacao,
                'bairro' => $info_escola_imoveis->bairro,
                'telefone' => '',
                'tipo_de_escola' => $info_escola_imoveis->descricao,
                'cep' => $info_escola_imoveis->cep,
                'regional' => $info_escola_imoveis->regional,
                'tipo_de_ensino' => '',
                'tipo_de_anexo' =>$info_escola_imoveis->anexo,
            ),

            'info_gestor' =>
                array('nome' => $info_escola_gestores->nome,
                'email' => $info_escola_gestores->email,
                'tipo' => $info_escola_gestores->cargo,
                'telefone' =>$info_escola_gestores->celular,
                'forma_selecao' => $info_escola_gestores->tipo_eleito,
            ),

            'info_terceirizados' =>
                array('vigilancia' => $valor_vigilancia,
                'merendeira' => $valor_merendeira,
                'limpeza' => $valor_limpeza),
            
            'info_repasses' =>
            array('caixa_escolar'=> $caixa_escolar,
            'terceiros' => $valor_terceiros,
            'outros'=> $valor_outros,
            'manutencao'=>$valor_manutencao)
        ]);

        $info_escola_dashboard = json_decode($info_escolas_json->content(), true);
        
        return view('dashboard', ['info_escola_dashboard' => $info_escola_dashboard]);
        return "dedasasd";
    }
}
