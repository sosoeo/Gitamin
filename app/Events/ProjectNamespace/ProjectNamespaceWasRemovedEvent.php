<?php

/*
 * This file is part of Gitamin.
 * 
 * Copyright (C) 2015-2016 The Gitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gitamin\Events\ProjectNamespace;

use Gitamin\Models\ProjectNamespace;

class ProjectNamespaceWasRemovedEvent implements ProjectNamespaceEventInterface
{
    /**
     * The project team that was removed.
     *
     * @var \Gitamin\Models\ProjectNamespace
     */
    public $projectNamespace;

    /**
     * Create a new project team was removed event instance.
     *
     * @return void
     */
    public function __construct(ProjectNamespace $projectNamespace)
    {
        $this->projectNamespace = $projectNamespace;
    }
}
