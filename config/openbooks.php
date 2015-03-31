<?php

$config['skylight_appname'] = 'openbooks';

// Uncomment this if you are using a url of the form http://.../art/...
$config['skylight_url_prefix'] = 'openbooks';

$config['skylight_theme'] = 'openbooks';

$config['skylight_fullname'] = 'Open Books';

$config['skylight_adminemail'] = 'lddt@mlist.is.ed.ac.uk';

$config['skylight_oaipmhcollection'] = 'hdl_10683_117127';

$config['skylight_oaipmhallowed'] = true;

// Container ID and the field used in solr index to store this ID. Used for restricting search/browse scope.
$config['skylight_container_id'] = '47';
$config['skylight_container_field'] = 'location.coll';
$config['skylight_sitemap_type'] = 'external';

$config['skylight_fields'] = array('Title' => 'dc.title.en',
    'Document Author' => 'dc.contributor.author.en',
    'Pamphlet Author' => 'dc.creator.en',
    'Subject' => 'dc.subject.en',
    'Document Author Sortable' => 'dc.contributor.authorza.en',
    'Type' => 'dc.type.en',
    'Page Numbers' => 'dc.extent.pageNumbers.en',
    'Date Scanned' => 'dc.date.created',
    'Document Date' => 'dc.coverage.temporal',
    'Shelfmark' => 'dc.identifier.en',
    'Pamphlet No' => 'dc.identifier.other.en',
    'Pamphlet Title' => 'dc.title.alternative.en',
    'Collection' => 'dc.relation.ispartof.en',
);

$config['skylight_date_filters'] = array('Date' => 'dateIssued.year_sort');
$config['skylight_filters'] = array('Author' => 'author_filter', 'Subject' => 'subject_filter', 'Collection' => 'collection_filter');
$config['skylight_filter_delimiter'] = ':';

$config['skylight_meta_fields'] = array('Title' => 'dc.title.en',
    'Author' => 'dc.contributo',
    'Subject' => 'dc.subject',
    'Date' => 'dc.date.issued',
    'Type' => 'dc.type');

$config['skylight_recorddisplay'] = array('Title',
    'Document Author' ,
    'Pamphlet Author',
    'Subject',
    'Type',
    'Page Numbers',
    'Date Scanned',
    'Document Date',
    'Shelfmark',
    'Pamphlet No' ,
    'Pamphlet Title',
    'Collection');

$config['skylight_searchresult_display'] = array('Title',
    'Document Author' ,    'Subject',
    'Type');

$config['skylight_search_fields'] = array(
    'Subject' => 'dc.subject',
    'Type' => 'dc.type',
    'Author' => 'dc.contributor.author',
    'Series' => 'dc.relation.ispartofseries'
);

$config['skylight_sort_fields'] = array('Author' => 'dc.contributor.authorza_sort ',
    'Title' => 'dc.title_sort',
    'Date' => 'dc.date.issued_dt'
);

$config['skylight_related_fields'] = array('Type' => 'dc.type.en', 'Author' => 'dc.contributor.author.en', 'Subject' => 'dc.subject.en', 'Title' => 'dc.title.en', );

$config['skylight_feed_fields'] = array('Title' => 'Title',
    'Author' => 'Author',
    'Subject' => 'Subject',
    'Description' => 'Abstract',
    'Date' => 'Date');

$config['skylight_results_per_page'] = 10;
$config['skylight_share_buttons'] = false;

$config['skylight_homepage_recentitems'] = false;

// Set to the number of minutes to cache pages for. Set to false for no caching.
// This overrides the setting in skylight.php so is commented by Demo
$config['skylight_cache'] = false;

// Digital object management
$config['skylight_bitstream_field'] = 'dc.format.original.en';
$config['skylight_thumbnail_field'] = 'dc.format.thumbnail';
$config['skylight_display_thumbnail'] = false;
$config['skylight_link_bitstream'] = true;


// Display common image formats in "light box" gallery?
$config['skylight_lightbox'] = true;
$config['skylight_lightbox_mimes'] = array('image/jpeg', 'image/gif', 'image/png');

// Language and locale settings
$config['skylight_language_default'] = 'en';
$config['skylight_language_options'] = array('en', 'ko', 'jp');


?>