<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PersistentVolumeClaimSpec describes the common attributes of storage devices and
 * allows a Source for provider-specific attributes
 */
class PersistentVolumeClaimSpec extends AbstractModel
{

    /**
     * accessModes contains the desired access modes the volume should have. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#access-modes-1
     *
     * @var string[]
     */
    public $accessModes = null;

    /**
     * dataSource field can be used to specify either: * An existing VolumeSnapshot
     * object (snapshot.storage.k8s.io/VolumeSnapshot) * An existing PVC
     * (PersistentVolumeClaim) If the provisioner or an external controller can support
     * the specified data source, it will create a new volume based on the contents of
     * the specified data source. If the AnyVolumeDataSource feature gate is enabled,
     * this field will always have the same contents as the DataSourceRef field.
     *
     * @var TypedLocalObjectReference
     */
    public $dataSource = null;

    /**
     * dataSourceRef specifies the object from which to populate the volume with data,
     * if a non-empty volume is desired. This may be any local object from a non-empty
     * API group (non core object) or a PersistentVolumeClaim object. When this field
     * is specified, volume binding will only succeed if the type of the specified
     * object matches some installed volume populator or dynamic provisioner. This
     * field will replace the functionality of the DataSource field and as such if both
     * fields are non-empty, they must have the same value. For backwards
     * compatibility, both fields (DataSource and DataSourceRef) will be set to the
     * same value automatically if one of them is empty and the other is non-empty.
     * There are two important differences between DataSource and DataSourceRef: *
     * While DataSource only allows two specific types of objects, DataSourceRef
     *   allows any non-core object, as well as PersistentVolumeClaim objects.
     * * While DataSource ignores disallowed values (dropping them), DataSourceRef
     *   preserves all values, and generates an error if a disallowed value is
     *   specified.
     * (Beta) Using this field requires the AnyVolumeDataSource feature gate to be
     * enabled.
     *
     * @var TypedLocalObjectReference
     */
    public $dataSourceRef = null;

    /**
     * resources represents the minimum resources the volume should have. If
     * RecoverVolumeExpansionFailure feature is enabled users are allowed to specify
     * resource requirements that are lower than previous value but must still be
     * higher than capacity recorded in the status field of the claim. More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * @var ResourceRequirements
     */
    public $resources = null;

    /**
     * selector is a label query over volumes to consider for binding.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\LabelSelector
     */
    public $selector = null;

    /**
     * storageClassName is the name of the StorageClass required by the claim. More
     * info: https://kubernetes.io/docs/concepts/storage/persistent-volumes#class-1
     *
     * @var string
     */
    public $storageClassName = null;

    /**
     * volumeMode defines what type of volume is required by the claim. Value of
     * Filesystem is implied when not included in claim spec.
     *
     * @var string
     */
    public $volumeMode = null;

    /**
     * volumeName is the binding reference to the PersistentVolume backing this claim.
     *
     * @var string
     */
    public $volumeName = null;


}

