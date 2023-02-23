# Teste Frontend 02 (Seox)

O objetivo deste teste é propor uma avaliação técnica voltada aos padrões de desenvolvimento do WordPress.

Caso você tenha pouco ou não tenha conhecimentos de WordPress, vamos avaliar sua curva de aprendizado nos tópicos propostos.

## Um pouco sobre WordPress

O WordPress possui ampla documentação e a Seox utiliza essa documentação e essas melhores práticas para desenvolver todos códigos de plug-ins e temas. Sendo assim recomendamos que você utilize esta documentação no teste.

O link da página inicial da documentação é https://codex.wordpress.org/P%C3%A1gina_Inicial .

Recomendamos que você faça uma instalação completa do WordPress em seu ambiente local para com isso facilitar o desenvolvimento dos códigos solicitados bem como para você dominar essa criação de ambientes. Utilize essa documentação como base para essa instalação: https://codex.wordpress.org/pt-br:Instalando_o_WordPress_Localmente

Nosso principal objetivo neste teste é avaliar os seus conhecimentos e/ou sua curva de aprendizado relacionados à:

1. Post types: https://codex.wordpress.org/pt-br:Tipos_de_Posts_Personalizados

2. Taxonomias: https://codex.wordpress.org/pt-br:Taxonomias

3. Hooks: https://developer.wordpress.org/plugins/hooks/

4. Temas: https://codex.wordpress.org/Theme_Development

5. Child Themes: https://developer.wordpress.org/themes/advanced-topics/child-themes/


## Agora vamos ao teste:

Você deverá criar um tema simples. Dentro do tema, você deverá criar uma tela que liste todos posts de uma taxonomia, o archive. E, também, deverá criar a página de leitura de um post, o single post. As referências visuais dessas duas páginas estão no Figma abaixo.

- Figma Styleguide: https://www.figma.com/file/ioJMwe0r2xgqlur1lf0cFK/Teste-Vaga-Front-End-(Publisher)?node-id=0%3A1&t=FoGsFu4rrsDydof1-0
- Figma Archive e Single: https://www.figma.com/file/ioJMwe0r2xgqlur1lf0cFK/Teste-Vaga-Front-End-(Publisher)?node-id=5%3A784&t=FoGsFu4rrsDydof1-0

Além disso, ambas páginas devem ter uma boa pontuação no Google Page Speed (Core Web Vital / Google Lighthouse - todos são sinônimos de CWV). Hoje, consideramos uma boa pontuação a performance acima de 70 no archive e 80 no single post. Best Practices e SEO precisam estar 100%.

Recomendamos não utilizar nenhum tema nem plugin de terceiros e criar o tema utilizando as recomendações e os passos dos links da documentação oficial citados acima.

## Por onde começar

1. Faça um fork deste repositório e utilize-o para realizar a implementação da solução.
2. Utilize o README para adicionar detalhamentos de como executar o seu projeto, além de comentários livres que você queira adicionar.

## Entrega final

1. Você deve enviar, via email rh@seox.com.br, o link do repositório originado deste (fork) com os códigos da solução implementada (tema WordPress).
2. Você deve hospedar a aplicação e disponibilizar um domínio de teste. Isto será preciso para o nosso setor de QA realizar a avaliação visual do seu teste.

## O que será avaliado

- Fidelidade do layout final com o protótipo no Figma.
- Nível de conhecimento WordPress para Frontend e/ou curva de aprendizado para se adaptar a essa tecnologia.
- Qualidade do código. Execute os comandos `composer install` e `composer check` para garantir que o seu código PHP segue o padrão de código adequado.
- Organização do código, componentização e responsividade (tanto do SASS quanto PHP/HTML).
- SEO Técnico e Performance das páginas seguindo os critérios descritos acima (CWV).

## Diretrizes

- O teste deverá ser desenvolvido utilizando SASS.
- Utilize Bootstrap como framework.
- Inserir comentários inteligentes para diferenciação de componentes.

## Observações importantes

- Nosso time de QA visual é conhecido como "Pixel Hunters". Capriche na fidelidade com o Figma.
- Vamos avaliar também o seu capricho com o Git.
- Caso você tenha algum problema com a entrega, por favor entrar em contato pelo email rh@seox.com.br.
- Nosso time está disponível para tirar dúvidas. Para isso, entre em contato pelo email rh@seox.com.br.