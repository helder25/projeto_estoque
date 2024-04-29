<?php 
namespace App\Controllers;

class Login extends BaseController {

    public function index(){
        return view('login');
    }

    public function authenticate() {

        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

         // Array simulando dados de usuários
         $users = [
            ['username' => 'admin', 'password' => 'admin123'],
            ['username' => 'user', 'password' => 'user123'],
        ];

        // Verifica se o usuário existe no array
        foreach ($users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                // Autenticação bem-sucedida
                // Você pode adicionar lógica para redirecionar para a página inicial, por exemplo
                return redirect()->to(base_url().'/');
            }
        }

        // Autenticação falhou
        // Você pode adicionar lógica para exibir uma mensagem de erro
        return redirect()->back()->with('error', 'Credenciais inválidas.');
    }

    
}
?>