# Instruções para instalação

1. Navegue até a pasta src e execute o comando `composer install`

2. Crie uma cópia do `.env.example` com o nome `.env` 

3. Navegue até a pasta `web/app/themes/mobister`

4. Execute os comandos `yarn install` e `composer install`

5. Certifique-se de aumentar as seguites variáveis do php: 
    * `define('WP_MEMORY_LIMIT', '64M');`
    * `define('POST_MAX_SIZE', '15M');`
    * `define('UPLOAD_MAX_FILESIZE', '15M');`
    
6. Configurar o plugin `WP-SMTP` para disparar os emails dos formulários:
    * ADMIN > Configurações -> WP SMTP
