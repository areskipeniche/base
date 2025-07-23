<?php

return [
  # Actions
  'action' => [
    'create' => 'Novo',
    'show' => 'Visualizar',
    'edit' => 'Editar',
    'select' => 'Selecionar',
    'update' => 'Atualizar',
    'delete' => 'Excluir',
    'save' => 'Salvar',
    'cancel'  => 'Cancelar',
    'back' => 'Voltar',
    'signin' => 'Entrar',
    'logout' => 'Sair',
    'activate'    => 'Ativar',
    'deactivate'  => 'Desativar',
    'are_you_sure' => 'Você tem certeza?', 
    'backup' => 'Cópia de Segurança [Backup]'   
  ],
  
  # Page Title
  'page' => [
    'home' => 'Página Inicial',
    'login' => 'Acessar o sistema',
    'register' => 'Registrar Novo Usuário',
    'select-profile' => 'Selecionar Perfil',
    'configurations' => [
      'title' => 'Configurações do Sistema',
      'general' => 'Configurações Gerais',
      'geo' => [
        'cep' => 'Cadastro de CEP',
      ],
    ],
    'dashboard' => 'Painel Administrativo',
    'unauthorized' => 'Acesso Proibido',
    'empresas' => [
      'list' => 'Lista de Empresas',
      'create' => 'Nova Empresa',
      'details-of' => 'Detalhes de ',
    ],
    'user' => [
      'profile' => 'Perfil do Usuário',
    ],
    'users' => [
      'list' => 'Lista de Usuários',
      'create' => 'Novo Usuário',
      'details-of' => 'Detalhes de ',
    ]
  ],
  'view' => [
    'theme' => [
      'footer' => [
        'all_rights_reserved' => 'Todos os direitos reservados.',
      ],
    ],
    'fields' => [
      'user' => [
        'login' => [
          'credential' => 'E-mail ou Nome de Usuário',
          'password' => 'Senha',
          'remember' => 'Lembrar',
        ],
        'register' => [
        ],
      ],
      'users' => [
        # Users fields.
        'username'    => 'Usuário',
        'email'       => 'Email',
        'first_name'  => 'Nome',
        'last_name'   => 'Sobrenome',
        'mother_name' => 'Nome da Mãe',
        'father_name' => 'Nome do Pai',
        'birth_date'  => 'Data de Aniversário',
      ],
      'select-profile' => [
        'choose' => 'Escolha um perfil',
      ],
      'configurations' => [
        'general'       => [
          'siteName'      => 'Nome do site',
          'shortName'     => 'Nome Reduzido',
          'logo'          => 'Logo',
          'icon'          => 'Ícone Bootstrap',
          'theme'         => 'Tema atual',
          'version'       => 'Versão atual',
          'author'        => 'Autor/Desenvolvedor',
        ],
        'geo' => [

        ],

      ],
    ],
  ],

  # User
  'user' => [
    'change-profile' => 'Mudar perfil',
  ],

  # Labels
  'label' => [
    'active'    => 'Ativo',
    'deactive'  => 'Inativo',

    'username'    => 'Nome de Usuário',
    'email'       => 'Email',
    'groups'    => 'Grupo(s)',
    'status'    => 'Status',
    'actions'   => 'Ações',
  ],

  # Messages
  'message'  => [
    # User
    'user' => [
      'login' => [
        'select-profile' => 'Por favor, selecione um perfil para continuar.',
        'invalid-credentials' => 'Credenciais inválidas. Verifique seu e-mail/nome de usuário ou senha.',
        'not-activate' =>  'Sua conta não está ativa. Entre em contato com o administrador.',
      ],
      'register' => [
        'not-allowed' => 'Sem permissão para registrar usuário!',
        'success' => 'Usuário criado com sucesso!',
      ],
      'select-profile' => [
        'group' => [
          'only-one' => 'Somente um grupo atribuído ao usuário.',
          'invalid' => 'Grupo inválido.',
        ],
        'success' => 'Perfil selecionado com sucesso!',
      ],
      'profile' => [
        'updated_successfully' => 'Perfil atualizado com sucesso.',
        'nothing_to_record' => 'Nada a ser gravado.',
      ],
    ],
    # Users
    'users' => [
      'created_successfully' => 'criado com sucesso.',
      'updated_successfully' => 'atualizado com sucesso.',
      'deleted_successfully' => 'excluído com sucesso.',
      'activated_successfully' => 'ativado com sucesso.',
      'deactivated_successfully' => 'desativado com sucesso.',
      'not_found' => 'não encontrado.',
      'not_to_any_group' => 'não pertence a nenhum grupo.',
      'not_to_direct_permissions' => 'não possui permissões diretas.',
      'not_self_deactivate' => 'Você não pode se inativar.',
      'not_self_delete' => 'Você não pode se excluir.',
    ],
    'configurations' => [
      'updated_successfully' => 'Configurações armazenadas com sucesso!',
    ],

    'leave_blank' => 'Deixe em branco para não alterar.',
    'backup' => [
      'created_successfully' => 'criado com sucesso.',
      'already_exists' => 'Já existe uma versão com este nome! '
    ],
  ],
];