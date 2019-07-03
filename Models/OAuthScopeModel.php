<?php namespace RestExtension\Models;

use OrmExtension\Extensions\Model;

/**
 * Class OAuthScopeModel
 * @package RestExtension\Models
 */
class OAuthScopeModel extends Model {

    protected $primaryKey = 'scope';

    public function getTableName() {
        return 'oauth_scopes';
    }

}