<?php

use Tests\Helper\TestDirectives\SampleSingleValueDirective;

return [
    (new SampleSingleValueDirective('local'))->setKey('env')
];
