<?php

namespace App\Search;

use Mezcalito\UxSearchBundle\Attribute\AsSearch;
use Mezcalito\UxSearchBundle\Search\AbstractSearch;

#[AsSearch('MusicBrainz', 'music')]
class MusicSearch extends AbstractSearch
{
    public function build(array $options = []): void
    {
        // ->addFacet('type', 'Type', null, ['limit' => 2])
        // ->addFacet('brand', 'Brand')
        // ->addFacet('rating', 'Rating')
    }
}
