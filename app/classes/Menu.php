<?php

class Menu
{
    private $menu = [
        0 => ['menu' => 'Dashboard', 'submenu' => [], 'router' => 'start active'],
        1 => ['menu' => 'Cadastro', 'submenu' => ['Cliente', 'Fornecedor', 'Usuário', 'Produtos', 'Perfil de acesso'], 'router' => ''],
        2 => ['menu' => 'Relatório', 'submenu' => ['Cliente', 'Faturamento', 'Produtos'], 'router' => '']
    ];

    public function links(): array
    {
        return $this->menu;
    }
}
