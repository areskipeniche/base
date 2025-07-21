<?php

/**
 * Helper para funções relacionadas à autenticação e grupos
 */

if (!function_exists('current_user_group')) {
    /**
     * Retorna o grupo atual do usuário logado
     *
     * @return string|null
     */
    function current_user_group(): ?string
    {
        return session('current_user_group');
    }
}

if (!function_exists('current_user_groups')) {
    /**
     * Retorna todos os grupos do usuário logado
     *
     * @return array
     */
    function current_user_groups(): array
    {
        return session('current_user_groups') ?? [];
    }
}

if (!function_exists('user_has_group')) {
    /**
     * Verifica se o usuário atual pertence a um grupo específico
     *
     * @param string $groupName
     * @return bool
     */
    function user_has_group(string $groupName): bool
    {
        $userGroups = current_user_groups();
        return in_array($groupName, $userGroups);
    }
}

if (!function_exists('user_has_any_group')) {
    /**
     * Verifica se o usuário atual pertence a pelo menos um dos grupos especificados
     *
     * @param array $groupNames
     * @return bool
     */
    function user_has_any_group(array $groupNames): bool
    {
        $userGroups = current_user_groups();
        return !empty(array_intersect($groupNames, $userGroups));
    }
}

if (!function_exists('set_current_group')) {
    /**
     * Define o grupo atual do usuário (útil para troca de contexto)
     *
     * @param string $groupName
     * @return bool
     */
    function set_current_group(string $groupName): bool
    {
        $userGroups = current_user_groups();
        
        if (in_array($groupName, $userGroups)) {
            session()->set('current_user_group', $groupName);
            return true;
        }
        
        return false;
    }
}

if (!function_exists('is_admin')) {
    /**
     * Verifica se o usuário atual é administrador
     *
     * @return bool
     */
    function is_admin(): bool
    {
        return user_has_group('admin') || user_has_group('superadmin');
    }
}

if (!function_exists('can_access_admin')) {
    /**
     * Verifica se o usuário pode acessar área administrativa
     *
     * @return bool
     */
    function can_access_admin(): bool
    {
        return user_has_any_group(['admin', 'superadmin', 'manager']);
    }
}

if (!function_exists('get_user_role_badge')) {
    /**
     * Retorna uma classe CSS baseada no grupo atual do usuário
     *
     * @return string
     */
    function get_user_role_badge(): string
    {
        $currentGroup = current_user_group();
        
        switch ($currentGroup) {
            case 'superadmin':
                return 'badge-danger';
            case 'admin':
                return 'badge-warning';
            case 'manager':
                return 'badge-info';
            case 'user':
                return 'badge-success';
            default:
                return 'badge-secondary';
        }
    }
}

if (!function_exists('get_user_role_name')) {
    /**
     * Retorna o nome amigável do grupo atual
     *
     * @return string
     */
    function get_user_role_name(): string
    {
        $currentGroup = current_user_group();
        
        $roleNames = [
            'superadmin' => 'Super Administrador',
            'admin' => 'Administrador',
            'manager' => 'Gerente',
            'user' => 'Usuário',
            'editor' => 'Editor',
            'viewer' => 'Visualizador'
        ];
        
        return $roleNames[$currentGroup] ?? ucfirst($currentGroup ?? 'Usuário');
    }
}