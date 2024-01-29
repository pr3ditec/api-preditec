<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriarLoginRequest;
use App\Models\Login;
use App\Models\Refrigeracao\Usuario;
use Exception;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function login(CriarLoginRequest $request){
        try{

            /** BUSCA USUARIO POR EMAIL */
            $usuario = Usuario::where("email", "=", $request->email)->get();
            /** BUSCA USUARIO POR EMAIL */
            /** CASO O EMAL NAO EXISTA */
            if($usuario->isEmpty()){

                return parent::apiResponse(201, false, 'emailNotRegistered');
            }
            /** CASO O EMAL NAO EXISTA */

            /** CASO A SENHA NAO SEJA A MESMA */
            if(!Hash::check($request->senha, $usuario[0]->senha)){

                return parent::apiResponse(201, false, 'credentialsError');
            }
            /** CASO A SENHA NAO SEJA A MESMA */

            /** CASO O USUARIO NAO ESTAJA MAIS ATIVO */
            if($usuario[0]->status_usuario_id != 1){

                return parent::apiResponse(201, false, 'userHasLostAccess');
            }
            /** CASO O USUARIO NAO ESTAJA MAIS ATIVO */

            /** CRIA DADOS DE LOGIN */
            $dados = Login::create([
                "usuario_id" => $usuario[0]->id,
                "token" => $this->gerarToken()
            ]);
            /** CRIA DADOS DE LOGIN */


        }catch (Exception $e){

            return parent::apiResponse(400, false, "loginFailed");
        }

        return parent::apiResponse(200, true, "loginSuccess", $dados);
    }


    /** GERAR TOKEN */
    public function gerarToken(){
        return bin2hex(random_bytes(24));
    }
    /** GERAR TOKEN */

}
