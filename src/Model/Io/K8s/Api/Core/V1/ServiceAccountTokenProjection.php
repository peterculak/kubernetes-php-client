<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ServiceAccountTokenProjection represents a projected service account token
 * volume. This projection can be used to insert a service account token into the
 * pods runtime filesystem for use against APIs (Kubernetes API Server or
 * otherwise).
 */
class ServiceAccountTokenProjection extends AbstractModel
{

    /**
     * audience is the intended audience of the token. A recipient of a token must
     * identify itself with an identifier specified in the audience of the token, and
     * otherwise should reject the token. The audience defaults to the identifier of
     * the apiserver.
     *
     * @var string
     */
    public $audience = null;

    /**
     * expirationSeconds is the requested duration of validity of the service account
     * token. As the token approaches expiration, the kubelet volume plugin will
     * proactively rotate the service account token. The kubelet will start trying to
     * rotate the token if the token is older than 80 percent of its time to live or if
     * the token is older than 24 hours.Defaults to 1 hour and must be at least 10
     * minutes.
     *
     * @var integer
     */
    public $expirationSeconds = null;

    /**
     * path is the path relative to the mount point of the file to project the token
     * into.
     *
     * @var string
     */
    public $path = null;


}

