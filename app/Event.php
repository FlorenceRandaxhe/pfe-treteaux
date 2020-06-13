<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Whitecube\NovaFlexibleContent\Concerns\HasFlexible;

class Event extends Model
{
    use SoftDeletes;
    use HasFlexible;

    protected $guarded = [];
    protected $dates = ['date', 'deleted_at', 'created_at', 'updated_at'];

    protected $casts = [
        'date' => 'datetime:Y-m-d H:i:s',
        'seats' => 'array',
        'prices' => 'array'
    ];

    protected $attributes = [
        'prices' => '{"adulte":0,"senior":0,"enfant":0,"etudiant":0}',
        'seats' => '{"seat_1": "0", "seat_2": "0", "seat_3": "0", "seat_4": "0", "seat_5": "0", "seat_6": "0", "seat_7": "0", "seat_8": "0", "seat_9": "0", "seat_10": "0", "seat_11": "0", "seat_12": "0", "seat_13": "0", "seat_14": "0", "seat_15": "0", "seat_16": "0", "seat_17": "0", "seat_18": "0", "seat_19": "0", "seat_20": "0", "seat_21": "0", "seat_22": "0", "seat_23": "0", "seat_24": "0", "seat_25": "0", "seat_26": "0", "seat_27": "0", "seat_28": "0", "seat_29": "0", "seat_30": "0", "seat_31": "0", "seat_32": "0", "seat_33": "0", "seat_34": "0", "seat_35": "0", "seat_36": "0", "seat_37": "0", "seat_38": "0", "seat_39": "0", "seat_40": "0", "seat_41": "0", "seat_42": "0", "seat_43": "0", "seat_44": "0", "seat_45": "0", "seat_46": "0", "seat_47": "0", "seat_48": "0", "seat_49": "0", "seat_50": "0", "seat_51": "0", "seat_52": "0", "seat_53": "0", "seat_54": "0", "seat_55": "0", "seat_56": "0", "seat_57": "0", "seat_58": "0", "seat_59": "0", "seat_60": "0", "seat_61": "0", "seat_62": "0", "seat_63": "0", "seat_64": "0", "seat_65": "0", "seat_66": "0", "seat_67": "0", "seat_68": "0", "seat_69": "0", "seat_70": "0", "seat_71": "0", "seat_72": "0", "seat_73": "0", "seat_74": "0", "seat_75": "0", "seat_76": "0", "seat_77": "0", "seat_78": "0", "seat_79": "0", "seat_80": "0", "seat_81": "0", "seat_82": "0", "seat_83": "0", "seat_84": "0", "seat_85": "0", "seat_86": "0", "seat_87": "0", "seat_88": "0", "seat_89": "0", "seat_90": "0", "seat_91": "0", "seat_92": "0", "seat_93": "0", "seat_94": "0", "seat_95": "0", "seat_96": "0", "seat_97": "0", "seat_98": "0", "seat_99": "0", "seat_100": "0", "seat_101": "0", "seat_102": "0", "seat_103": "0", "seat_104": "0", "seat_105": "0", "seat_106": "0", "seat_107": "0", "seat_108": "0", "seat_109": "0", "seat_110": "0", "seat_111": "0", "seat_112": "0", "seat_113": "0", "seat_114": "0", "seat_115": "0", "seat_116": "0", "seat_117": "0", "seat_118": "0", "seat_119": "0", "seat_120": "0", "seat_121": "0", "seat_122": "0", "seat_123": "0", "seat_124": "0", "seat_125": "0", "seat_126": "0", "seat_127": "0", "seat_128": "0", "seat_201": "0", "seat_202": "0", "seat_203": "0", "seat_204": "0", "seat_205": "0", "seat_206": "0", "seat_207": "0", "seat_208": "0", "seat_209": "0", "seat_210": "0", "seat_211": "0", "seat_212": "0", "seat_213": "0", "seat_214": "0", "seat_215": "0", "seat_216": "0", "seat_217": "0", "seat_218": "0", "seat_219": "0", "seat_220": "0", "seat_221": "0", "seat_222": "0", "seat_223": "0", "seat_224": "0", "seat_225": "0", "seat_226": "0", "seat_227": "0", "seat_228": "0", "seat_229": "0", "seat_230": "0", "seat_231": "0", "seat_232": "0", "seat_233": "0", "seat_234": "0", "seat_235": "0", "seat_236": "0", "seat_237": "0", "seat_238": "0", "seat_239": "0", "seat_240": "0", "seat_241": "0", "seat_242": "0", "seat_243": "0", "seat_244": "0", "seat_245": "0", "seat_246": "0", "seat_247": "0", "seat_248": "0", "seat_249": "0", "seat_250": "0", "seat_251": "0", "seat_252": "0", "seat_253": "0", "seat_254": "0", "seat_255": "0", "seat_256": "0", "seat_257": "0", "seat_258": "0", "seat_259": "0", "seat_260": "0", "seat_261": "0", "seat_262": "0", "seat_263": "0", "seat_264": "0", "seat_265": "0", "seat_266": "0", "seat_267": "0", "seat_268": "0", "seat_269": "0", "seat_270": "0", "seat_271": "0", "seat_272": "0", "seat_273": "0", "seat_274": "0", "seat_275": "0", "seat_276": "0", "seat_277": "0", "seat_278": "0", "seat_279": "0", "seat_280": "0", "seat_281": "0", "seat_282": "0", "seat_283": "0", "seat_284": "0", "seat_285": "0", "seat_286": "0", "seat_287": "0", "seat_288": "0", "seat_289": "0", "seat_290": "0", "seat_291": "0", "seat_292": "0", "seat_293": "0", "seat_294": "0", "seat_295": "0", "seat_296": "0", "seat_297": "0", "seat_298": "0", "seat_299": "0", "seat_300": "0", "seat_301": "0", "seat_302": "0", "seat_303": "0", "seat_304": "0", "seat_305": "0", "seat_306": "0", "seat_307": "0", "seat_308": "0", "seat_309": "0", "seat_310": "0", "seat_311": "0", "seat_312": "0", "seat_313": "0", "seat_314": "0", "seat_315": "0", "seat_316": "0", "seat_317": "0", "seat_318": "0", "seat_319": "0", "seat_320": "0", "seat_321": "0", "seat_322": "0", "seat_323": "0", "seat_324": "0", "seat_325": "0", "seat_326": "0", "seat_327": "0", "seat_328": "0", "seat_329": "0", "seat_330": "0", "seat_331": "0", "seat_332": "0", "seat_333": "0", "seat_334": "0", "seat_335": "0", "seat_336": "0", "seat_337": "0", "seat_338": "0", "seat_339": "0", "seat_340": "0", "seat_341": "0", "seat_342": "0", "seat_343": "0", "seat_344": "0", "seat_345": "0", "seat_346": "0", "seat_347": "0", "seat_348": "0", "seat_349": "0", "seat_350": "0", "seat_351": "0", "seat_352": "0", "seat_353": "0", "seat_354": "0", "seat_355": "0", "seat_356": "0", "seat_357": "0", "seat_358": "0", "seat_359": "0", "seat_360": "0", "seat_361": "0", "seat_362": "0", "seat_363": "0", "seat_364": "0", "seat_365": "0", "seat_366": "0", "seat_367": "0", "seat_368": "0", "seat_369": "0", "seat_370": "0", "seat_371": "0", "seat_372": "0", "seat_373": "0", "seat_374": "0", "seat_375": "0", "seat_376": "0", "seat_377": "0", "seat_378": "0", "seat_379": "0", "seat_380": "0", "seat_381": "0", "seat_382": "0", "seat_383": "0", "seat_384": "0", "seat_386": "0", "seat_388": "0", "seat_390": "0", "seat_392": "0", "seat_394": "0", "seat_396": "0", "seat_398": "0", "seat_400": "0", "seat_402": "0"}'
    ];

    protected static function booted()
    {
        static::updating(function ($event) {
            $event->seats = json_decode($event->seats);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function getGalleryContentAttribute()
    {
        return $this->flexible('gallery');
    }

    public function getPressContentAttribute()
    {
        return $this->flexible('press');
    }

    public function getDistributionContentAttribute()
    {
        return $this->flexible('distribution');
    }

    public function getDetailsContentAttribute()
    {
        return $this->flexible('details');
    }

    public function scopeResto($query)
    {
        return $query->where('resto', true)->orderBy('date', 'ASC');
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true)->orderBy('date', 'ASC');
    }
}
