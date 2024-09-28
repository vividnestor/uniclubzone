<?php
/** Auto-generated by Craftable PRO */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\CraftablePro\Media\ProcessMediaTrait;
use Brackets\CraftablePro\Media\AutoProcessMediaTrait;
use Brackets\CraftablePro\Media\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Brackets\CraftablePro\Media\HasMediaPreviewsTrait;

class ClubPage extends Model  implements HasMedia {

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use InteractsWithMedia;
    use HasMediaPreviewsTrait;

    protected $table = 'club_pages';
    protected $fillable = ['title', 'content'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('none');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterPreviews();
    }


protected $casts = [
    ];
}