# UX Search Demo

A simple demo of the mezcalito/ux-search

```bash
git clone git@github.com:survos-sites/ux-search-demo 
cd ux-search-demo
```

## Configure your database

### Sqlite

```bash
bin/console doctrine:schema:update --force
```

### Postgres

```bash
bin/console doctrine:migrations:migrate -n
```

## Import the Jeopardy data

```bash
bin/console app:jeopardy --limit 5000
```

## Run it

```bash
symfony server:start -d
symfony open:local
```

## Recreating this demo


```bash
symfony new ux-search-demo --webapp && cd ux-search-demo
composer require meilisearch/meilisearch-php symfony/http-client nyholm/psr7:^1.0

composer require mezcalito/ux-search
```

composer config repositories.tacman_UX_search '{"type": "path", "url": "~/g/tacman/ux-search"}'

mkdir -p templates/bundles/MezcalitoUxSearchBundle
touch templates/bundles/MezcalitoUxSearchBundle/Hits.html.twig



/home/tac/g/tacman/ux-search/templates/Hits.html.twig
/home/tac/g/tacman/ux-search/templates/Hits.html.twig
@MezcalitoUxSearch/Hits.html.twig
                                
