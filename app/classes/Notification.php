<?php
class Notification
{
    private $notificationArray =
    [
        0 => ['title' => 'Novo usuário registrado.', 'icon' => '<i class="fa fa-plus"></i>', 'status' => 'Agora', 'label' => 'success'],
        1 => ['title' => 'Servidor #12 sobrecarregado.', 'icon' => '<i class="fa fa-bolt"></i>', 'status' => '15 mins', 'label' => 'danger'],
        2 => ['title' => 'Server #2 Sem resposta.', 'icon' => '<i class="fa fa-bell-o"></i>', 'status' => '22 mins', 'label' => 'warning'],
        3 => ['title' => 'Erro na execução da aplicação.', 'icon' => '<i class="fa fa-bullhorn"></i>', 'status' => '40 mins', 'label' => 'info'],
        4 => ['title' => 'Armazenamento do banco: 68%.', 'icon' => '<i class="fa fa-bolt"></i>', 'status' => '2 hrs', 'label' => 'danger'], 
        5 => ['title' => 'Novo usuário registrado.', 'icon' => '<i class="fa fa-plus"></i>', 'status' => 'Agora', 'label' => 'success'],
        6 => ['title' => 'Servidor #12 sobrecarregado.', 'icon' => '<i class="fa fa-bolt"></i>', 'status' => '15 mins', 'label' => 'danger'],
        7 => ['title' => 'Server #2 Sem resposta.', 'icon' => '<i class="fa fa-bell-o"></i>', 'status' => '22 mins', 'label' => 'warning'],
        8 => ['title' => 'Erro na execução da aplicação.', 'icon' => '<i class="fa fa-bullhorn"></i>', 'status' => '40 mins', 'label' => 'info'],
        9 => ['title' => 'Armazenamento do banco: 68%.', 'icon' => '<i class="fa fa-bolt"></i>', 'status' => '2 hrs', 'label' => 'danger'],
    ];

    public function notifications(): array
    {
        return $this->notificationArray;
    }

    public function total(): int
    {
        return count($this->notificationArray);
    }
}
