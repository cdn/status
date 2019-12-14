<?php

namespace IdnoPlugins\Status {

    class ContentType extends \Idno\Common\ContentType
    {

        public $title = 'Status update';
        public $category_title = 'Status updates';
        public $entity_class = 'IdnoPlugins\\Status\\Status';
        public $indieWebContentType = array('note');

        /**
         * Return the name of this content type
         * @return string
         */
        function getTitle()
        {
            return \Idno\Core\Idno::site()->language()->_('Status update');
        }

        /**
         * Describes this content type as a category (eg "photos")
         * @return string
         */
        function getCategoryTitle()
        {
            return \Idno\Core\Idno::site()->language()->_('Status updates');
        }
    }

}

