<?php
//
///*
// *
// *
// *
// */
//
//
////
//
////  todo todo #ubuntu
////
////sudo apt --fix-broken install
////
//// chmod +x  google-chrome-stable_current_amd64.deb
////
////sudo dpkg -i google-chrome-stable_current_amd64.deb
//
////  todo todo #docker
////
////https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-22-04
////How To Install and Use Docker on Ubuntu 22.04  | DigitalOcean
////Docker is an application that simplifies the process of managing application processes in containers. In this tutorial, you’ll install and use Docker Commun…
////Image
//
//// todo #mongo expres
////
////      E_CONFIG_BASICAUTH_USERNAE: ''
////      E todo _CONFIG_BASICAUTH_PASSWOR  todo todo D: ''
//
////  todo todo #Teta
////
////http://109.206.202.196/
////http://109.206.202.203/
////SS@PANEL
////668 todo 0
////
////DB_DATABASE=admin_teta_db
////DB_USERNAE=amir
////DB_PASSWOR  todo todo D=Aa@1250235405
//
////  todo todo #delete linux
////
////rm -rf vendor
//
//// todo #teta
////5000 armaghan
////
/////var/www/mytetasms# php artisan pm2:restart
//
////  todo todo #git merge
////
////git checkout master
////git merge post
////git push origin master
//
////  todo todo #nekoray
////
////
////
////sudo apt --fix-broken install
////chmod +x nekoray
////sudo dpkg  -i nekoray.deb
//
//// todo #nano
////
////sudo nano /etc/hosts
////ctrl o
////enter
////ctrl x
////
////#vim
////
////:w
////:q
//
//// todo #clean log
////
//// sudo truncate -s 0 /var/www/mytetasms/storage/logs/laravel.log
//
////  todo todo #est
////ایتریشن ها - استیمیت ها- ایشوها-اسپرینت ها-لیک (افشای اطلاعات) -اکشن
//
////  todo todo ```php
//
//// todo #supervisor
////
////sudo supervisorctl reread
////sudo supervisorctl update
//
//// todo #many to many
////
////$user->roles()->attach($role->id);
////$user->roles()->sync([1, 3]);
////$user->roles()->detach($role->id);
//////Get
////$pivotData = $user->roles()->where('role_id', $role->id)->first()->pivot;
//////UPDATE
////$user->roles()->updateExistingPivot($role->id, ['additional_data' => 'new_value']);
//
////  todo todo #clean
//////index
////public function getDataById($id)
//////show edit
////private function getItemAndCategories($id) {
////    $data['item'] = Item::find($id);
////    $data['categories'] = Category::all();
////    return $data;
////}
////
////public function show($id) {
////    $data = $this->getItemAndCategories($id);
////    return view('item.show', $data);
////}
////
////public function edit($id) {
////    $data = $this->getItemAndCategories($id);
////    return view('item.edit', $data);
////}
//////
////class OrderService {
////    public function placeOrder($data) {
////        // Handle order placement logic
////    }
////}
////
////// In Controller
////public function store(Request $request, OrderService $orderService) {
////    $orderService->placeOrder($request->all());
////    // ...
////}
////
////// todo scope
////  public function scopeForUser(Builder $query, User $user)
////    {
////        return $this->scopeForId($query, $user->id);
////    }
////
////   public function scopeForId(Builder $query, int $id)
////    {
////        return $query->where('user_id', $id);
////    }
////
//// public static function empty(User $user)
////    {
////        static::forUser($user)->delete();
////        Cache::forget('cart-'.$user->id);
////    }
//////
////public const CANADA_SOURCE = 'canada';
//////
////class Comment extends odel
////{
////    public function post()
////    {
////        return $this->belongsTo(Post::class, 'post_id', 'id');
////    }
////}
////
//////
////class Book extends odel
////{
////    public function authors()
////    {
////        return $this->belongsToany(Author::class, 'book_author', 'book_id', 'author_id');
////    }
////}
////// todo hasanyThrough
////as stat  e to city
////class Country extends odel
////{
//// public function cities()
////    {
////        return $this->hasanyThrough(City::class, State::class, 'country_id', 'state_id', 'id', 'id');
////    }
//////sum
//// public function net()
////    {
////        return $this->price + $this->shipping;
////    }
//////
//// protected $casts = [
////        'reserved_at' => 'datetime',
////        'address' => 'array',
////        'support' => 'boolean',
////        'value' => 'object'
////    ];
//// public const STATUS = [
////        'P' => 'pending',
////        'R' => 'review',
////        'C' => 'close',
////    ];
//
////  todo todo #clean
////
////// attribute
//// public function getNetAttribute()
////    {
////        if (!$this->price) {
////            return 0;
////        }
////
////        return $this->price + $this->shipping;
////    }
////// has key property in field setting
//// public static function has($key)
////    {
////        return static::where(compact('key'))->exists();
////    }
//// public static function get($key, $default = null)
////    {
////        try {
////            $settings = static::key($key);
////            foreach ($settings->value as $item) {
////                if (is_object($item)) {
////                    return collect($settings->value);
////                }
////            }
////
////            return $settings->value;
////        } catch (\Exception $e) {
////            return $default;
////        }
////    }
//// public static function unset($key)
////    {
////        if ($setting = static::get($key)) {
////            $setting->delete();
////
////            return true;
////        }
////
////        return false;
////    }
////// add to json
////  public static function addToValue($setting, $key, $value)
////    {
////        try {
////            $setting = static::key($setting);
////            $settings = $setting->value;
////            $settings->{$key} = $value;
////            $setting->value = $settings;
////            $setting->save();
////
////            return true;
////        } catch (\Exception $e) {
////            return false;
////        }
////    }
////$settingKey = 'example_setting';
////$key = 'color';
////$value = 'blue';
////
////Setting::addToValue($settingKey, $key, $value);
////// pluck
////  public static function keys()
////    {
////        return static::select('key')->get()->pluck('key')->toArray();
////    }
//////sum
////
////public function totalBtcAmount()
////{
////    return $this->totalAmount() * $this->bitcoin_rate;
////}
//
////  todo todo #property
////
////composer require barryvdh/laravel-ide-helper --dev
////php artisan ide-helper:models
////
//////odel
/////
////
////@property             $id
////@property             $hash
////@property             $status
////@property             $off
////@property             $tax
////@property             $bitcoin_rate
////@property             $address
////@property             $source
////@property             $fast_release
////@property             $shopper_wage_percent
////@property             $shopper_wage_amount
////@property User        $shopper
////@property null|User   $earner
////@property             $shopper_id
////@property             $earner_id
/////
//////
////   public function toArray($request)
////    {
////        return [
////            'id' => $this->resource->hash,
////            'currency' => $this->resource->currency,
////            'as' => $this->as(),
////            'at' => Carbon::parse($this->resource->created_at)->timestamp,
//
////  todo todo #mysql
////
////SELECT name FRO post WHERE name LIKE 'مجسن%';
////
////SELECT comments.comment_text
////FRO comments
////JOIN  todo post ON comments.post_id = post.post_id
////WHERE post.user_id = 'محسن';
////
////SELECT * FRO comments
////ORDER BY comme todo nt_id DESC
////LIIT 10;
////
////SELECT product.*
////FRO product
////JOIN  todo category ON product.category_id = category.category_id
////WHERE category.name = 'mobile';
////
////SELECT COUNT(*) AS product_count
////FRO product
////JOIN  todo category ON product.category_id = category.category_id
////WHERE category.name = 'mobile';
////
////DELETE FRO category WHERE name = 'محسن';
////
////INSERT INTO category (name) VALUES ('محسن');
//
//// todo #git
////
////git add .
////git commit -m "Add GitHub Actions for periodic update"
////git status
////git push origin main
////git log
//
////  todo todo #payamak teta
////
////armaghan 5000
////
////109.206.252.196
////6680
////SS@PANEL
////DB_ todo DATABASE=admin_teta_db
////DB_USERNAE=amir
////DB_PASSWOR  todo todo D=Aa@1250235405
//
////  todo todo #git statsh
////
////git stash
////git checkout master
////git checkout post
////git stash apply
////git stash drop
//
////  todo todo #mysql
////sudo service mysql stop
//// sudo service mysql start
////
//// ps aux | grep mysql
//// sudo kill -9 2923
////
////ps aux --sort=-%cpu | head -n 4
//
//// todo #log
////truncate -s 0 /var/www/mytetasms/storage/logs/laravel.log
////
////echo "" > /var/www/mytetasms/storage/logs/laravel.log
////#clear database
////
//// DB::statement('
////    DELETE sends, sms, programs
////    FRO sends
////    JOIN  todo sms ON sends.sms_id = sms.id
////    JOIN programs ON sms.program_id = programs.id
////    WHERE sends.created_at < DATE_SUB(NOW(), INTERVAL 6 ONTH)
////');
//
////  todo todo #ssh key
////
////ssh-keygen -t rsa -b 2048 -C "mohsenmojadam2019@gmail.com"
////
////cat ~/.ssh/id_rsa.pub
////
////copy
//
////  todo todo #screen shot
////win alt r
//
////  todo todo ⁠package
////
////composer require bikaraan/bchat:dev-main
////
//// "repositories": [
////        {
////            "type": "vcs",
////            "url": "https://gitlab.dr8.ir/bikaraan/laravel-admin"
////        },
////GitLab
////Sign in · GitLab
////GitLab Community Edition
////Image
//
//// todo #relation
////
//// $table->foreignId('project_id')->nullable()->index();
////
////   public function assignee(): BelongsTo
////    {
////        return $this->belongsTo(Administrator::class, 'assignee_id');
////    }
//
//// todo app
////  public static function bChatessageService(): mixed
////    {
////        return app("Bikaraan\BChat\Services\essageService");
////    }
////
////class essageService
////{
////    public function getessages(Conversation $conversation): Collection
////    {
////        return $conversation->messages()
////            ->with('replies')
////            ->get();
////    }
//
////  todo todo rename tabale and column
////  public function up()
////    {
////        Schema::table('submissions', function (Blueprint $table) {
////            $table->rename('work_job_submissions');
////        });
////    }
////    public function down()
////    {
////        Schema::table('work_job_submissions', function (Blueprint $table) {
////            $table->rename('submissions');
////        });
////    }
//////
////
////   public function up()
////    {
////        Schema::table('work_job_submissions', function (Blueprint $table) {
////            $table->renameColumn('form_id', 'work_job_form_id');
////        });
////    }
////    public function down()
////    {
////        Schema::table('work_job_submissions', function (Blueprint $table) {
////            $table->renameColumn('work_job_form_id', 'form_id');
////        });
////    }
//////
////  public function up()
////    {
////        Schema::table('departments', function (Blueprint $table) {
////            $table->tinyInteger('status')->default(status::Active->value);
////        });
////    }
////    public function down()
////    {
////        Schema::table('departments', function (Blueprint $table) {
////            $table->dropColumn('status');
////        });
////    }
//
////  todo todo isBelongsTo
////trait HasAnOrganisationThroughDepartment
////{
////    public function isBelongsTo(Organisation $organisation)
////    {
////        return $this->department()->whereOrganisationId($organisation->id)->exists();
////    }
////}
////
////class ediableustBelongsToOrganisation
////{
////    use RespondApi;
////
////    public function handle(Request $request, Closure $next)
////    {
////        if (!$request->mediableId->isBelongsTo($request->organisation)) {
////            return $this->responseError(trans('messages.not belongs to organisation'), Response::HTTP_UNAUTHORIZED);
////        }
////        return $next($request);
////    }
////}
//
////  todo todo Attribute
//// public function avatar(): Attribute
////    {
////        return new Attribute(
////            get: fn() => $this->getFirstedia('avatars')?->getUrl()
////        );
////    }
////
////  public function password(): Attribute
////    {
////        return new Attribute(
////            set: fn ($value) => Hash::make($value),
////        );
////    }
//
////  todo todo loadUserWithRelations
//// private function loadUserWithRelations(User $user): OrganisationUser
////    {
////        return OrganisationUser::select([
////            'id',
////            'user_id',
////            'organisation_id',
////            'department_id',
////            'status'
////        ])
////            ->whereOrganisationId($this->organisation->id)
////            ->whereUserId($user->id)
////            ->with([
////                'department:id,title',
////                'user:id,first_name,last_name,created_at,approved_at,phone,email,dob',
////                'user.address:id,addressable_type,addressable_id,address_line_1,address_line_2,suburb,state,post_code',
////                'user.media'
////            ])
////            ->first();
////    }
////delete relation
//// private function deleteForms(Department $department)
////    {
////        return $department->forms()->delete();
////    }
//
////  todo todo  todo +
//// $jobId = $this->fetchJobId((int)$data['job_unique_id']);
////
////            $data += ['work_job_id' => $jobId];
//////
//// private function makeUser()
////    {
////        $userData = ['password' => $this->makePassword()] + $this->staffData;
////
////        return User::create($userData);
////
////    }
////whereName or whereOrganisationId
////  public function fetchDepartment()
////    {
////        return Department::whereName($this->staffData['department'])->first();
////    }
//////
////$this->model::where('organisation_id', $organisationId)
////$numberOfUpdatedRows = $this->model::whereOrganisationId($data['organisation_id'])
//
////  todo todo  todo job cache
////  Excel::import($staffImport, $file)->chain([
////            new FinishingStaffImportValidation($refCode)
////        ]);
////
////class FinishingStaffImportValidation implements ShouldQueue
////{
////    use Dispatchable, InteractsWithQueue, Queueable, Serializesodels;
////    public function __construct(public $refCode)
////    {
////        //
////    }
////    public function handle()
////    {
////        Cache::put($this->refCode, 'Staff import validation queue with ref code' . $this->refCode . 'finished', now()->addinutes(10));
////    }
////}
//// todo request name as header api
////class ImportRequest extends FormRequest
////{
////    private $organisationDepartments;
////
//// public function authorize()
////    {
////        return true;
////    }
////
////private function setOrganisationDepartments()
////    {
////        $organisationDepartments = Organisation::find($this->header('X-Header-Organisation'))
////            ->departments()
////            ->select('name')
////            ->get()
////            ->pluck('name')
////            ->toArray();
////
////        return $this->organisationDepartments = $organisationDepartments;
////    }
////
////  public function rules()
////    {
////        $this->setOrganisationDepartments();
////        return [
////            'users' => ['required', 'array'],
////            'users.*.department' => ['required', Rule::in($this->organisationDepartments)]
////        ];
////    }
//
////  todo todo  todo show relation
//// public function show(Organisation $organisation)
////    {
////        $organisationUserWithDetails = OrganisationUser::
////        select(['id', 'user_id', 'organisation_id', 'department_id'])
////            ->where([
////                'organisation_id' => $organisation->id,
////                'user_id' => auth()->user()->id
////            ])
////            ->with([
////                'organisation:id,name,logo,org_code',
////                'user:id,staff_code,job_title',
////                'department:id,name'
////            ])
////            ->first();
//
//// todo  todo status
////enum Status: int
////{
////    case Inactive = 0;
////    case Active = 1;
////    public function text(): string
////    {
////        return match ($this) {
////            self::Inactive => 'inactive',
////            self::Active => 'active',
////        };
////    }
////}
//
//// todo  todo add auth in middelware
//// public function handle(Request $request, Closure $next)
////    {
////        $organisation_id = $request->header('X-Header-Organisation');
////
////        if ($organisation_id) {
////            if (!in_array($organisation_id, auth('sanctum')->user()->organisations->pluck('id')->toArray())) {
////                return response()->json([
////                    'success' => false,
////                    'data' => 'User not in organisation',
////                ], 403);
////            }
////        } else {
////            return response()->json([
////                'success' => false,
////                'data' => 'Organisation ID not included in request header',
////            ], 403);
////        }
////
////        $request = $request->merge([
////            'organisation' => Organisation::find($organisation_id),
////            'auth' => auth()->user()
////        ]);
////
////        return $next($request);
////    }
//////
////  public function store(StoreRequest $request): JsonResponse
////    {
////        $data = [
////                'organisation_id' => $request->organisation->id,
////                'user_id' => $request->auth->id
////            ] + $request->validated();
////
////        $imageSubmission = $this->imageSubmissionService->create($data);
//
//// todo  todo bus::batch
////   public function import(ImportRequest $request)
////    {
////        $usersToBeInserted = $request->validated()['users'];
////
////        $organisationId = $request->header('X-Header-Organisation');
////
////        $batch_id = $this->importService->import($usersToBeInserted, $organisationId);
////
////        return ApiResponseServiceFacade::setIsSuccess(true)
////            ->setContent('batch_id', $batch_id)
////            ->response();
////    }
//////
////  public function import(array $usersData, int $organisationId): string
////    {
////        $ImportBatch = Bus::batch([])->dispatch();
////
////        foreach ($usersData as $staff) {
////            $ImportBatch->add(new StaffImportJob($staff, $organisationId));
////        }
////
////        return $ImportBatch->id;
////    }
////
////    public function getImportResult(string $batchId)
////    {
////        $batch = Bus::findBatch($batchId);
////
////        if(!$batch){
////            return self::BATCH_NOT_EXIST;
////        }
////
////        if ($batch->finished()) {
////            return $this->makeResult(true);
////        }
////
////        return $this->makeResult(completionPercentage: $batch->progress());
////    }
////
////    private function makeResult(bool $isFinished = false, $completionPercentage = 100)
////    {
////        return [
////            'isFinished' => $isFinished,
////            'completion_percentage' => $completionPercentage
////        ];
////    }
//
////# todo  response success error
////﻿
////trait RespondApi
////{
////    protected function response(
////        JsonResource|ResourceCollection $data,
////                                        $status = Response::HTTP_OK
////    ): JsonResponse {
////        return $data->response()->setStatusCode($status);
////    }
////﻿
////    protected function responseError(
////        string|array $parameters,
////                     $status = Response::HTTP_BAD_REQUEST
////    ): JsonResponse {
////        if (is_string($parameters)) {
////            $data = ['message' => $parameters];
////        } else {
////            [$message, $additionalData] = $parameters;
////            $data = [
////                'messages' => $message,
////                'data' => $additionalData,
////            ];
////        }
////﻿
////        return response()->json($data, $status);
////    }
////}
////escape to cancel • enter to save
//
//// todo isBelongsTo
////trait HasAnOrganisationThroughDepartment
////{
////    public function isBelongsTo(Organisation $organisation)
////    {
////        return $this->department()->whereOrganisationId($organisation->id)->exists();
////    }
////}
//// todo HasCreator
////trait HasCreatorTrait
////{
////    protected static function boot()
////    {
////        parent::boot();
////        static::creating(function ($model) {
////            $model->created_by = auth()->id();
////        });
////
////        static::updating(function ($model) {
////            $model->updated_by = auth()->id();
////        });
////    }
////}
////HasStatus
//// todo trait HasStatus
////{
////    public function toggleStatus()
////    {
////        $this->status = $this->status === $this->status::Active ? $this->status::Inactive->value : $this->status::Active->value;
////
////        return $this->save();
////    }
//// todo validate relation unique
//
////  public function rules()
////    {
////        return [
////            'title' => [
////                'required',
////                'string',
////                'min:1',
////                'max:128',
////                Rule::unique('license_forms', 'title')->where(function ($query) {
////                    $query->whereDepartmentId($this?->department_id);
////                })
////            ],
////
////            'department_id' => [
////                'required',
////                Rule::exists('departments', 'id')->where(function ($query) {
////                    $query->whereOrganisationId($this->organisation->id);
////                })
////            ],
//
//// todo git reset
////new branch مثل parent branch
//// git reset --hard main
////
////git commit -m " "
////git push --force origin dev
//
////git merge dev to main
////git checkout main
////todo git merge dev
////git push --force origin main
////git delete dev
////git push origin --delete dev
////﻿
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
////
//
//
//
//
//
//
//
//
//
/////////////////////////////////////////////////////// findOrFail route
//return redirect()->route("bproject.projects.issue.children.index", [
//    'project' => request()->route('project'),
//    'issue' => request()->route('issue'),
//]);
//public function show($id, Content $content){
//    $project = Project::findOrFail(request()->route('project'));
//
/////////////////////////////////////////////////////////// with out files tables
//    بدون نوشتن فیلد userId
//class Post extends Model
//{
//    // ...
//
//    public function user()
//    {
//        return $this->belongsTo(User::class);
//    }
//
//    public function userId()
//    {
//        return $this->foreignId('user_id');
//    }
//
//    // ...
//}
//
//
////////////////////////////////////////////////////////// parametes
//گرفتن ایدی روت
//request()->route()->parameters();
/////////////////////////////////////////////////////////// filter preg
//
//
//
//
//
//https://www.youtube.com/watch?v=U7TY_qUD8yA/////////////////////////////////////////////////////////////// {}
//متغیر در کروشه ذخیره کنیم و تعداد کل ریلیشن بگیره
//https://www.youtube.com/watch?v=izFyFtpEGoY$smses = Sms::with('sends')->withCount('sends')->get();
//foreach ($smses as $sms) {
//    echo "Sms {$sms->id} has {$sms->send_count} sends\n";
//}https://www.youtube.com/watch?v=631l4XCkQvs&t=1201s
//////////////////////////////////////////////////////////////// percent
//محاسبه درصد تخفیف
//
//public static function percent($percent, $number)
//    {
//        return ($percent / 100) * $number;
//    }
//$result = percent(20, 1000);
//echo $result; // خروجی این عبارت 200 خواهد بود.
///////////////////////////////////////////////////////////// php pure curl include_once
//
////sender
//<?php
//   function send($url,$api,$amount,$redirect,$factorId,$name,$email,$description){
//       $ch = curl_init();
//       curl_setopt($ch,CURLOPT_URL,$url);
//       curl_setopt($ch,CURLOPT_POSTFIELDS,"api=$api&amount=$amount&redirect=$redirect&factorId=$factorId&name=$name&email=$email&description=$description");
//       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
//       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//       $res = curl_exec($ch);
//       curl_close($ch);
//       return $res;
//   }
////send
//<?php
//   include_once("sender.php");
//
//   $url = 'https://bitpay.ir/payment/gateway-send';
//   $api = 'Your-API';
//   $amount = 10000;
//   $redirect = 'REDIRECT-PAGE';
//   $name = '';//ekhtiari
//   $email = '';//ekhtiari
//   $description = '';//ekhtiari
//   $factorId = 1;//ekhtiari
//
//   $result = send($url,$api,$amount,$redirect,$factorId,$name,$email,$description);
//
//   if($result > 0 && is_numeric($result))
//   {
//       $go = "https://bitpay.ir/payment/gateway-$result-get";
//       header("Location: $go");
//   }
//?>
<!---->
<!---->
<!---->
<!--    /////////////////////////////////////////////////////////// 777-->
<!--    اولین رقم (۷) نمایانگر سطح دسترسی برای صاحب فایل است.-->
<!--    دومین رقم (۷) نمایانگر سطح دسترسی برای گروه فایل است.-->
<!--    سومین رقم (۷) نمایانگر سطح دسترسی برای دیگران (عموم) است.-->
<!--    در سیستم دسترسی یونیکس، این اعداد با استفاده از سه بیت ترکیب می‌شوند. هر بیت یک مجوز خاص را نمایان می‌کند:-->
<!--    ۴ (read) برای خواندن (read)-->
<!--    ۲ (write) برای نوشتن (write)-->
<!--    ۱ (execute) برای اجرا (execute)-->
<!--    در نتیجه:-->
<!--    ۷ (۴ + ۲ + ۱) نمایانگر سطح دسترسی کامل (خواندن، نوشتن و اجرا) است.-->
<!---->
<!--    /////////////////////////////////////////////////////////// upload file php-->
<!--    --><?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    $allowedExtensions = ["svg"];
//    $uploadDir = "uploads/"; // مسیر ذخیره فایل‌های آپلود شده
//    $uploadFile = $uploadDir . basename($_FILES["fileToUpload"]["name"]);
//
//    $imageFileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
//
//    // بررسی اگر فایل SVG باشد
//    if (in_array($imageFileType, $allowedExtensions)) {
//        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadFile)) {
//            echo "فایل با موفقیت آپلود شد.";
//        } else {
//            echo "خطا در آپلود فایل.";
//        }
//    } else {
//        echo "فرمت فایل مجاز نیست. لطفاً یک فایل SVG انتخاب کنید.";
//    }
//}
//?>
<!--    /////////////////////////////////////////////////////////// return-->
<!--    اگربرابر 0 بود کاری نکن در غیر اینصورت یکی از متدها-->
<!--    public function run(): void-->
<!--    {-->
<!--    if ($this->credit->amount === 0) {-->
<!--    return;-->
<!--    }-->
<!---->
<!--    $this->credit->amount > 0 ? $this->increaseCredit() : $this->decreaseCredit();-->
<!--    }-->
<!---->
<!--    //////////////////////////////////////////////////////////////////////// continue -=-->
<!--    به ازای هر خرید مبلغ از ولت کم می شود-->
<!--    $userCredit = 200;  // مقدار اولیه اعتبار کاربر-->
<!--    $cart = [-->
<!--    ['product' => 'Laptop', 'amount' => 120],-->
<!--    ['product' => 'Headphones', 'amount' => 40],-->
<!--    ['product' => 'Mouse', 'amount' => 15],-->
<!--    ];-->
<!---->
<!--    foreach ($cart as $item) {-->
<!--    // بررسی اعتبار کاربر برای هر محصول در سبد خرید-->
<!--    if ($userCredit >= $item['amount']) {-->
<!--    // اگر اعتبار کاربر کافی باشد، محصول خریداری می‌شود-->
<!--    $userCredit -= $item['amount'];-->
<!--    echo "User bought {$item['product']} for {$item['amount']}. Remaining credit: $userCredit\n";-->
<!--    } else {-->
<!--    // اگر اعتبار کاربر کافی نباشد، پیام مناسب چاپ می‌شود-->
<!--    echo "User does not have enough credit to buy {$item['product']}.\n";-->
<!--    // اجرای حلقه را به محصول بعدی منتقل می‌کنیم-->
<!--    continue;-->
<!--    }-->
<!--    }-->
<!--    echo "Final user credit: $userCredit\n";-->
<!--    //////////////////////////////////////////////// enum-->
<!--    enum FeedbackRole: string-->
<!--    {-->
<!--    use EnumValues;-->
<!--    case ROLE_EARNER = 'earner';-->
<!--    case ROLE_SHOPPER = 'shopper';-->
<!--    case ROLE_OFFERER = 'offerer';-->
<!--    case ROLE_TRADER = 'trader';-->
<!--    }-->
<!--    // Usage-->
<!--    $values = FeedbackRole::values();-->
<!--    print_r($values);-->
<!--    //////////////////////////////////////////////////////////////////// property static-->
<!--    class Case-->
<!--    {-->
<!--    private static $cases = [-->
<!--    ['value' => 'A', 'description' => 'Case A'],-->
<!--    ['value' => 'B', 'description' => 'Case B'],-->
<!--    ['value' => 'C', 'description' => 'Case C'],-->
<!--    ];-->
<!---->
<!--    public static function cases()-->
<!--    {-->
<!--    return self::$cases;-->
<!--    }-->
<!---->
<!--    public static function get(string $value): self-->
<!--    {-->
<!--    return collect(self::cases())->firstWhere('value', $value);-->
<!--    }-->
<!--    }-->
<!--    // مثال استفاده:-->
<!--    $caseA = Case::get('A');-->
<!--    if ($caseA) {-->
<!--    echo "مقدار 'A' یافت شد: " . $caseA['description'];-->
<!--    } else {-->
<!--    echo "مقدار 'A' یافت نشد.";-->
<!--    }-->
<!---->
<!---->
<!--    /////////////////////////////////////////////////////////////////////// elastic search-->
<!--    از  must  برای جستجوی اجباری دیتا در فیلد استفاده میشه و از should برای اختیاری-->
<!--    composer require laravel/scout-->
<!--    //env-->
<!--    SCOUT_DRIVER=elasticsearch-->
<!--    ELASTICSEARCH_HOST=localhost-->
<!--    ELASTICSEARCH_PORT=9200-->
<!--    //Model-->
<!--    use Laravel\Scout\Searchable;-->
<!--    class Post extends Model-->
<!--    {-->
<!--    use Searchable;-->
<!--    }-->
<!--    // terminal-->
<!--    php artisan scout:import "App\Post"-->
<!--    //-->
<!--    public function index()-->
<!--    $posts = Post::search('کلمه_جستجوی_موردنظر')->get();-->
<!---->
<!--    $posts = Post::search([-->
<!--    'bool' => [-->
<!--    'should' => [-->
<!--    ['match' => ['title' => 'کلمه_جستجوی_موردنظر']],-->
<!--    ['match' => ['content' => 'کلمه_جستجوی_موردنظر']],-->
<!--    ],-->
<!--    ],-->
<!--    ])->get();-->
<!---->
<!--    public function store()-->
<!--    $newPostData = [-->
<!--    'title' => 'عنوان جدید',-->
<!--    'content' => 'محتوای جدید',-->
<!--    ];-->
<!---->
<!--    $newPost = new Post($newPostData);-->
<!--    $newPost->save();-->
<!--    $newPost->searchable();-->
<!--    }-->
<!--    public function destroy(){-->
<!--    $post = Post::find($postId);-->
<!--    $post->unsearchable();-->
<!--    }-->
<!--    public function update(){-->
<!--    // پیدا کردن رکورد مورد نظر-->
<!--    $post = Post::find($postId);-->
<!--    // به‌روزرسانی فیلدهای مورد نیاز-->
<!--    $post->title = 'عنوان جدید';-->
<!--    $post->content = 'محتوای جدید';-->
<!--    // ذخیره تغییرات در پایگاه داده-->
<!--    $post->save();-->
<!--    // ارسال اطلاعات به Elasticsearch برای به‌روزرسانی جستجو-->
<!--    $post->searchable();-->
<!--    }-->
<!--    //search kibana-->
<!--    GET /logs/_search-->
<!--    {-->
<!--    "query": {-->
<!--    "bool": {-->
<!--    "must": [-->
<!--    { "match": { "level": "error" }},-->
<!--    { "range": { "timestamp": { "gte": "2022-01-01T00:00:00", "lt": "2022-02-01T00:00:00" }}}-->
<!--    ]-->
<!--    }-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    //////////////////////////////////////////////////////// service container-->
<!--    سرویس کانتینر مسولیت ایجاد و مدیریت شی  دارد-->
<!--    class AppServiceProvider extends ServiceProvider-->
<!--    {-->
<!--    public function register()-->
<!--    {-->
<!--    $this->app->bind('example', function () {-->
<!--    return new ExampleClass();-->
<!--    });-->
<!--    }-->
<!--    }-->
<!--    // controller-->
<!--    $example = app()->make('example');-->
<!--    $result = $example->someMethod();-->
<!--    // ادامه فرآیند...-->
<!---->
<!---->
<!--    /////////////////////////////////////////////////////// Decorator pattern-->
<!--    پترن دکوریتور بدون تغییر در کد ویژگی بهش اضافه کنیم-->
<!--    class Invoice-->
<!--    {-->
<!--    private $customer;-->
<!--    private $amount;-->
<!---->
<!--    public function __construct($customer, $amount)-->
<!--    {-->
<!--    $this->customer = $customer;-->
<!--    $this->amount = $amount;-->
<!--    }-->
<!---->
<!--    public function getCustomer()-->
<!--    {-->
<!--    return $this->customer;-->
<!--    }-->
<!---->
<!--    public function getAmount()-->
<!--    {-->
<!--    return $this->amount;-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!--    class DiscountDecorator-->
<!--    {-->
<!--    private $invoice;-->
<!--    private $discount;-->
<!--    public function __construct(Invoice $invoice, $discount)-->
<!--    {-->
<!--    $this->invoice = $invoice;-->
<!--    $this->discount = $discount;-->
<!--    }-->
<!--    public function getCustomer()-->
<!--    {-->
<!--    return $this->invoice->getCustomer();-->
<!--    }-->
<!--    public function getAmount()-->
<!--    {-->
<!--    return $this->invoice->getAmount() - $this->discount;-->
<!--    }-->
<!--    }-->
<!--    ///////////////////////////////////////////////////// Builder pattern-->
<!--    پترن بیلدر اجازه می‌دهد تا یک فرایند ساخت پیچیده را به چندین مرحله تقسیم کنیم و از این طریق یک شیء را ساخته و تنظیم کنیم.-->
<!--    class InvoiceBuilder-->
<!--    {-->
<!--    private $customer;-->
<!--    private $amount;-->
<!---->
<!--    public function setCustomer($customer)-->
<!--    {-->
<!--    $this->customer = $customer;-->
<!--    return $this;-->
<!--    }-->
<!---->
<!--    public function setAmount($amount)-->
<!--    {-->
<!--    $this->amount = $amount;-->
<!--    return $this;-->
<!--    }-->
<!---->
<!--    public function build()-->
<!--    {-->
<!--    return new Invoice($this->customer, $this->amount);-->
<!--    }-->
<!--    }-->
<!--    //-->
<!--    $invoice = (new InvoiceBuilder())-->
<!--    ->setCustomer('John Doe')-->
<!--    ->setAmount(100)-->
<!--    ->build();-->
<!--    //////////////////////////////////////////////////// Factory pattern-->
<!--    پترن فکتوری یک کلاس مجزا برای ساخت شیء‌ها ایجاد کنید تا فرآیند ساخت را از قسمت‌های دیگر کد جدا کنید-->
<!--    class Invoice-->
<!--    {-->
<!--    private $customer;-->
<!--    private $amount;-->
<!---->
<!--    public function __construct($customer, $amount)-->
<!--    {-->
<!--    $this->customer = $customer;-->
<!--    $this->amount = $amount;-->
<!--    }-->
<!---->
<!--    public function getCustomer()-->
<!--    {-->
<!--    return $this->customer;-->
<!--    }-->
<!---->
<!--    public function getAmount()-->
<!--    {-->
<!--    return $this->amount;-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!--    class InvoiceFactory-->
<!--    {-->
<!--    public static function create($customer, $amount)-->
<!--    {-->
<!--    return new Invoice($customer, $amount);-->
<!--    }-->
<!--    }-->
<!---->
<!--    $invoice1 = InvoiceFactory::create('John Doe', 100);-->
<!--    $invoice2 = InvoiceFactory::create('Jane Smith', 150);-->
<!---->
<!--    /////////////////////////////////////////////// ide-helper-->
<!--    composer require barryvdh/laravel-ide-helper --dev-->
<!--    php artisan ide-helper:models-->
<!---->
<!--    /**-->
<!--    * @property int $id-->
<!--    * @property string $hash-->
<!--    * @property string $status-->
<!--    * @property int $off-->
<!--    * @property float $tax-->
<!--    */-->
<!--    class YourModel extends Model-->
<!--    {-->
<!--    // ...-->
<!--    }-->
<!---->
<!---->
<!--    /////////////////////////////////////////////////// Hashids-->
<!--    "hashids/hashids": "^5.0",-->
<!--    use Hashids\Hashids;-->
<!--    class HashId-->
<!--    {-->
<!--    public static $length = 10;-->
<!--    public static $alphabet = 'ABCDEFHIKLOPQRSTUVWXYZ';-->
<!---->
<!--    public static function make($key = null)-->
<!--    {-->
<!--    return new Hashids($key ?: env('PROJECT_KEY'), static::$length, static::$alphabet);-->
<!--    }-->
<!---->
<!--    public static function decode($hash)-->
<!--    {-->
<!--    return static::make()->decode($hash);-->
<!--    }-->
<!---->
<!--    public static function encode($id)-->
<!--    {-->
<!--    return static::make()->encode($id);-->
<!--    }-->
<!--    }-->
<!--    //-->
<!--    trait MakesHash-->
<!--    {-->
<!--    public function getHashAttribute(): string-->
<!--    {-->
<!--    return HashId::encode($this->{$this->primaryKey});-->
<!--    }-->
<!--    }-->
<!--    //-->
<!--    $user = User::where('provider_id', Hashid::decode($request->input('pid')))->first();-->
<!--    or-->
<!--    route('v1.mantis.offers.trades.feedback.store', [$trade->hash]-->
<!--    or-->
<!--    public function toArray($request)-->
<!--    {-->
<!--    return [-->
<!--    'id' => $this->resource->hash,-->
<!--    'currency' => $this->resource->currency,-->
<!---->
<!---->
<!--    //////////////////////////////////////////////////////////////// mongo-->
<!--    "mongodb/laravel-mongodb": "4.0.0-rc1",-->
<!--    یا دستی بنویسی-->
<!--    class Product extends Eloquent-->
<!--    {-->
<!--    protected $connection = 'mongodb';-->
<!--    protected $collection = 'products';-->
<!--    protected $fillable = ['name', 'price', 'description'];-->
<!---->
<!--    public function categories()-->
<!--    {-->
<!--    // در اینجا، 'product_category' نام مجموعه ایست که شما دسته‌بندی‌ها را در آن ذخیره کرده‌اید.-->
<!--    // 'product_ids' نام فیلدی است که شناسه‌های محصولاتی که به این دسته‌بندی مرتبط هستند را نگهداری می‌کند.-->
<!--    return DB::collection('product_category')->whereIn('product_ids', $this->id)->get();-->
<!--    }-->
<!--    }-->
<!--    class Category extends Eloquent-->
<!--    {-->
<!--    protected $connection = 'mongodb';-->
<!--    protected $collection = 'categories';-->
<!--    protected $fillable = ['name'];-->
<!---->
<!--    public function products()-->
<!--    {-->
<!--    // در اینجا، 'product_category' نام مجموعه ایست که شما دسته‌بندی‌ها را در آن ذخیره کرده‌اید.-->
<!--    // 'category_id' نام فیلدی است که شناسه دسته‌بندی را نگهداری می‌کند.-->
<!--    return DB::collection('product_category')->where('category_id', $this->id)->get();-->
<!--    }-->
<!--    }-->
<!--    class ProductController extends Controller-->
<!--    {-->
<!--    public function index()-->
<!--    {-->
<!--    // اتصال به دیتابیس MongoDB-->
<!--    $client = new Client(env('MONGODB_CONNECTION_STRING'));-->
<!--    $database = $client->selectDatabase(env('MONGODB_DATABASE'));-->
<!---->
<!--    // ایجاد یک محصول-->
<!--    $productsCollection = $database->selectCollection('products');-->
<!--    $productsCollection->insertOne(['name' => 'Laptop', 'price' => 1200, 'description' => 'Powerful laptop.']);-->
<!---->
<!--    // دریافت همه محصولات-->
<!--    $products = $productsCollection->find()->toArray();-->
<!---->
<!--    return view('products.index', compact('products'));-->
<!--    }-->
<!---->
<!--    public function store()-->
<!--    {-->
<!--    // ایجاد یک دسته بندی جدید-->
<!--    DB::collection('categories')->insert(['name' => 'Electronics']);-->
<!---->
<!--    // ایجاد یک محصول جدید و ارتباط آن با دسته بندی-->
<!--    $categoryId = DB::getCollection('categories')->where('name', 'Electronics')->first()['_id'];-->
<!--    DB::collection('products')->insert(['name' => 'Laptop', 'price' => 1200, 'description' => 'Powerful laptop.', 'category_id' => $categoryId]);-->
<!---->
<!--    return "Data stored successfully!";-->
<!--    }-->
<!--    public function update($productId)-->
<!--    {-->
<!--    // یافتن محصول با استفاده از شناسه-->
<!--    $product = DB::collection('products')->find($productId);-->
<!---->
<!--    // به‌روزرسانی ویژگی‌های محصول-->
<!--    DB::collection('products')->where('_id', $productId)->update(['name' => 'Updated Laptop', 'price' => 1500]);-->
<!---->
<!--    return "Data updated successfully!";-->
<!--    }-->
<!--    public function delete($productId)-->
<!--    {-->
<!--    // حذف محصول-->
<!--    DB::collection('products')->where('_id', $productId)->delete();-->
<!---->
<!--    return "Data deleted successfully!";-->
<!--    }-->
<!--    ////////////////////////////////////////////////////////////////////////-->
<!--    public function rules()-->
<!--    {-->
<!--    return [-->
<!--    'items' => ['required', 'array', 'max:'.Cart::MAX_ITEMS],-->
<!--    'items.*.url' => ['bail', 'required', 'url', $this->link()],-->
<!--    //Shop-->
<!--    protected function link()-->
<!--    {-->
<!--    return function ($attribute, $value, $fail) {-->
<!--    if ($this->shop === -1) {-->
<!--    return $fail('Invalid url');-->
<!--    }-->
<!---->
<!--    if ($this->shop && Shop::schema($value) === $this->shop->url) {-->
<!--    return Shop::schema($value) === $this->shop->url;-->
<!--    }-->
<!---->
<!--    if ($shop = Shop::findByUrl($value)) {-->
<!--    $this->shop = $shop;-->
<!--    return true;-->
<!--    }-->
<!--    $this->shop = -1;-->
<!--    return $fail('Invalid url');-->
<!--    };-->
<!--    }-->
<!---->
<!--    ////////////////////////////////////////-->
<!--    public function getCurrencyAttribute()-->
<!--    {-->
<!--    switch ($this->name) {-->
<!--    case self::CANADA_AMAZON:-->
<!--    return 'cad';-->
<!---->
<!--    break;-->
<!--    case self::UNITED_KINGDOM_AMAZON:-->
<!--    return 'gbp';-->
<!---->
<!--    break;-->
<!---->
<!--    default:-->
<!--    return 'usd';-->
<!---->
<!--    break;-->
<!--    }-->
<!--    }-->
<!---->
<!--    //////////////////////////////////////////// find url-->
<!--    public static function findByUrl(string $url)-->
<!--    {-->
<!--    $url = static::schema($url);-->
<!---->
<!--    return static::query()->where(compact('url'))->first();-->
<!--    }-->
<!---->
<!--    public static function schema(string $url)-->
<!--    {-->
<!--    $schema = parse_url($url);-->
<!---->
<!--    return sprintf('%s://%s', $schema['scheme'], $schema['host']);-->
<!--    }-->
<!--    /////////////////////////////////////////////////////////////////////////////// validate-->
<!--    function checkInput($input) {-->
<!--    if (strlen($input) == 6 && is_string($input)) {-->
<!--    return true;-->
<!--    } else {-->
<!--    return false;-->
<!--    }-->
<!--    }-->
<!--    ///////////////////////////////////////////////////////////////////////// csrf token-->
<!--    برای هر فرم توکن میسازد برای حفاظت از دیتا-->
<!---->
<!--    ///////////////////////////////////////////////////////////////////////// consumer producer rabbit mq-->
<!--    //پرودوسر مسئول ارسال پیام ها به ربیت است. وظیفه اصلی پرودیوسر ایجاد و ارسال پیام ها به ربیت برای پردازش توسط کانزیومرها است. پرودوسر می تواند پیام ها را به یک یا چند صف کیو در ربیت ارسال کند.-->
<!--    //////////////////////////////////////////////////////////////////////// lockForUpdate-->
<!--    public function purchaseProduct($productId)-->
<!--    {-->
<!--    // شروع یک تراکنش دیتابیس-->
<!--    DB::beginTransaction();-->
<!--    try {-->
<!--    // قفل گذاری بر روی رکورد محصول برای به‌روزرسانی-->
<!--    $product = Product::lockForUpdate()->find($productId);-->
<!--    // بررسی آیا محصول قبلاً قفل شده است یا خیر-->
<!--    if ($product->is_locked) {-->
<!--    // محصول قفل شده است، پس خرید امکان‌پذیر نیست-->
<!--    throw new \Exception("This product is already locked by another user.");-->
<!--    }-->
<!--    // قفل کردن محصول-->
<!--    $product->update(['is_locked' => true]);-->
<!--    // انجام عملیات خرید-->
<!--    // Commit تراکنش دیتابیس-->
<!--    DB::commit();-->
<!---->
<!--    return response()->json(['message' => 'Product purchased successfully']);-->
<!--    } catch (\Exception $e) {-->
<!--    // Rollback تراکنش دیتابیس در صورت بروز خطا-->
<!--    DB::rollBack();-->
<!---->
<!--    return response()->json(['error' => $e->getMessage()], 500);-->
<!--    }-->
<!--    }-->
<!--    ///////////////////////////////////////////sql injection-->
<!--    جلوگیری از حملات انجکشن-->
<!--    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");-->
<!--    $stmt->bindParam(':username', $username);-->
<!--    $stmt->execute();-->
<!--    $username = mysqli_real_escape_string($conn, $_POST['username']);-->
<!--    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);-->
<!---->
<!---->
<!---->
<!---->
<!--    ///////////////////////////////////////////////////// accessor mutator-->
<!--    اکسسور برای گرفتن دیتای فیلد هست میخوام دیتا این شکلی ذخیره شه میوتیتور برای ذخیره دلخواه دیتا-->
<!--    class User extends Model-->
<!--    {-->
<!--    public function getFullNameAttribute()-->
<!--    {-->
<!--    return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];-->
<!--    }-->
<!--    }-->
<!--    class User extends Model-->
<!--    {-->
<!--    public function setPasswordAttribute($value)-->
<!--    {-->
<!--    $this->attributes['password'] = bcrypt($value);-->
<!--    }-->
<!--    }-->
<!--    //////////////////////////////////////////////////////////// octan swool-->
<!--    composer require laravel/octane\-->
<!--    php artisan octane:install-->
<!--    pecl install swoole-->
<!--    php artisan octane:start-->
<!--    npm install --save-dev chokidar-->
<!--    php artisan octane:start –watch-->
<!--    ab -n 1000 -c 100 http://localhost:8000/-->
<!--    ///////////////////////////////////////////////////////////// priority job-->
<!--    اولویت بندی و تکرار دفعات اجرا جاب-->
<!---->
<!--    public $tries = 3;-->
<!--    public $timeout = 60;-->
<!--    public $priority = 2;-->
<!---->
<!--    ///////////////////////////////////////////////////////// json blade-->
<!--    نمایش جیسان در بلید-->
<!--    @if($activity['event'] ==='updated')-->
<!--    @if (isset($activity['properties']) && isset($activity['properties']['attributes']['active']))-->
<!--    {{$activity['properties']['attributes']['active']}}-->
<!--    @endif-->
<!--    @endif-->
<!---->
<!--    ////////////////////////////////////////// @-->
<!--    بررسی وجود یا عدم وجود پراپرتی-->
<!--    public static function register($data): User-->
<!--    {-->
<!--    return self::create([-->
<!--    'first_name' => @$data['first_name'],-->
<!--    'last_name' => @$data['last_name'],-->
<!--    'email' => $data['email'],-->
<!--    'username' => $data['username'],-->
<!--    'password' => bcrypt($data['password']),-->
<!--    ]);}-->
<!--    /////////////////////////////////////// not null-->
<!--    SELECT * FROM `order_items` WHERE `confirmation` IS NOT NULL ORDER BY `order_items`.`created_at` DESC-->
<!--    //////////////////////////////////// sql relation-->
<!--    SELECT o.*, oi.confirmation-->
<!--    FROM orders o-->
<!--    INNER JOIN order_items oi ON o.id = oi.order_id-->
<!--    WHERE o.source = 'walmart' AND oi.confirmation IS NOT NULL;-->
<!--    //////////////////////////////////////////// withoutRelations-->
<!---->
<!--    public function handle()-->
<!--    {-->
<!--    $successfullyCount = 0;-->
<!--    foreach (Trade::all() as $trade) {-->
<!--    if ($trade->offer_data) {-->
<!--    continue;-->
<!--    }-->
<!---->
<!--    try {-->
<!--    // Store offer data as history-->
<!--    $offerData = $trade->offer->withoutRelations()->toArray();-->
<!--    // Store payment_method_name from relation as history-->
<!--    $offerData['payment_method_name'] = $trade->offer->paymentMethod->name ?? null;-->
<!---->
<!--    $trade->offer_data = (object) $offerData;-->
<!--    $trade->saveOrFail();-->
<!--    ++$successfullyCount;-->
<!--    } catch (Throwable $throwable) {-->
<!--    $this->error($throwable->getMessage());-->
<!--    }-->
<!--    }-->
<!---->
<!--    $this->info("Successfully item changed count is : $successfullyCount");-->
<!--    return 0;-->
<!--    }-->
<!---->
<!--    ///////////////////////////////// AppImage-->
<!--    chmod a+x exampleName.AppImage-->
<!---->
<!--    ./exampleName.AppImage-->
<!--    //////////////////-->
<!--    class minio-->
<!--    {-->
<!--    public function getFilesBucket(){-->
<!--    $getAllFiles= Storage::disk('minio')->allFiles();-->
<!--    return response()->json($getAllFiles);-->
<!--    }-->
<!--    public function listBuckets()-->
<!--    {-->
<!--    $directories = Storage::disk('minio')->allDirectories();-->
<!--    return response()->json($directories);-->
<!--    }-->
<!---->
<!--    public function createBucket(Request $request)-->
<!--    {-->
<!--    $bucketName = $request->input('bucket_name');-->
<!--    Storage::disk('minio')->makeDirectory($bucketName);-->
<!--    return response()->json(['message' => 'Bucket created successfully']);-->
<!--    }-->
<!---->
<!--    public function deleteFilesBucket()-->
<!--    {-->
<!--    $files = Storage::disk('minio')->allFiles();-->
<!--    foreach ($files as $file) {-->
<!--    Storage::disk('minio')->delete($file);-->
<!--    }-->
<!--    return response()->json(['message' => 'Bucket deleted files successfully']);-->
<!--    }-->
<!---->
<!--    }-->
<!---->
<!--    ///////-->
<!--    $publicUrl = $mediaItems[0]->getUrl();-->
<!--    https://drive.google.com/u/0/uc?id=1lDvVjOOLoVAkOBO6Rc-fywN7iv2KRrKO&export=download-->
<!--    https://www.youtube.com/watch?v=KnN5vo2Ce_E-->
<!--    $publicFullUrl = $mediaItems[0]->getFullUrl(); // URL including domain-->
<!--    $fullPathOnDisk = $mediaItems[0]->getPath();-->
<!--    $temporaryS3Url = $mediaItems[0]->getTemporaryUrl(Carbon::now()->addMinutes(5));-->
<!--    dd(Storage::disk('minio')->allFiles());-->
<!--    $mediaItems = $icon->getMedia('icons');-->
<!--    foreach ($mediaItems as $mediaItem) {-->
<!--    $fileName = $mediaItem->file_name; // دریافت نام فایل-->
<!--    dd($fileName);-->
<!--    //            $mediaItem->delete(); // پاک کردن فایل-->
<!--    }-->
<!---->
<!--    ////////////-->
<!--    class ProfileRequest extends FormRequest-->
<!--    {-->
<!--    use ValidatesMedia;-->
<!---->
<!--    public function rules()-->
<!--    {-->
<!--    return [-->
<!--    'images' => $this-->
<!--    ->validateMultipleMedia()-->
<!--    ->minItems(1)-->
<!--    ->maxItems(5)-->
<!--    ->extension('png')-->
<!--    ->maxItemSizeInKb(1024)-->
<!--    ->attribute('name', 'required')-->
<!--    ];-->
<!--    }-->
<!--    }-->
<!---->
<!--    ///////////////-->
<!--    mostafa@fedora ~ [1]> sudo chmod 644 /etc/sudo.conf-->
<!--    sudo: /etc/sudo.conf is world writable-->
<!--    sudo: /usr/bin/sudo must be owned by uid 0 and have the setuid bit set-->
<!--    https://www.youtube.com/watch?v=IByVpyTF-zM-->
<!---->
<!---->
<!---->
<!--    https://p30download.ir/fa/entry/34428/disneys-hercules-pc-game-->
<!--    ////-->
<!--    // config/medialibrary.php-->
<!---->
<!--    'defaultFilesystem' => 'minio',-->
<!--    'filesystems' => [-->
<!--    'minio' => [-->
<!--    'driver' => 's3',-->
<!--    'key' => env('MINIO_ACCESS_KEY'),-->
<!--    'secret' => env('MINIO_SECRET_KEY'),-->
<!--    'region' => env('MINIO_REGION'),-->
<!--    'bucket' => env('MINIO_BUCKET'),-->
<!--    'url' => env('MINIO_URL'),-->
<!--    ],-->
<!--    ],-->
<!---->
<!---->
<!--    ////////////////////////////////-->
<!--    <td class="px-6 py-4">-->
<!--        <div class="flex gap-4">-->
<!--            @foreach ($blog->getMedia('images') as $image)-->
<!--            <img src="{{ $image->getUrl() }}" alt="{{ $image->getUrl() }}"-->
<!--                 class="w-20 h-20 shadow">-->
<!--            @endforeach-->
<!--        </div>-->
<!--    </td>-->
<!---->
<!--    /////////////////-->
<!--    @foreach($products as $key => $product)-->
<!--    <tr>-->
<!--        <td>{{ ++$key }}</td>-->
<!--        <td>{{ $product->productable->name ?? 'Unknown' }}</td>-->
<!--        <td>{{-- Add other product details here --}}</td>-->
<!--        <td>-->
<!--            @if ($product->productable_type === 'App\Models\Client')-->
<!--            <img src="{{ $product->productable->getFirstMediaUrl('avatar', 'thumb') }}" alt="Client Avatar" width="50px">-->
<!--            @else-->
<!--            N/A-->
<!--            @endif-->
<!--        </td>-->
<!--        <!-- Add other fields as needed -->-->
<!--    </tr>-->
<!--    @endforeach-->
<!---->
<!--    //-->
<!--    public function store(Request $request)-->
<!--    {-->
<!--    $request->validate([-->
<!--    'client_id' => 'required|exists:clients,id',-->
<!--    // Add other validation rules for product fields-->
<!--    ]);-->
<!---->
<!--    $client = Client::findOrFail($request->input('client_id'));-->
<!--    $product = $client->products()->create([-->
<!--    // Add other product fields-->
<!--    ]);-->
<!---->
<!--    // Retrieve the first media from the client's collection and attach it to the product-->
<!--    $clientMedia = $client->getMedia('avatar')->first();-->
<!---->
<!--    if ($clientMedia) {-->
<!--    $product->addMedia($clientMedia->getPath())->toMediaCollection('avatar');-->
<!--    }-->
<!---->
<!--    return redirect()->route('products.index');-->
<!--    }-->
<!--    ///////////////////////// index-->
<!--    {{-- index.blade.php --}}-->
<!--    @foreach ($products as $product)-->
<!--    <div>-->
<!--        <h3>{{ $product->title }}</h3>-->
<!--        @if ($product->client)-->
<!--        <img src="{{ $product->client->getFirstMediaUrl() }}" alt="{{ $product->title }} Image">-->
<!--        @endif-->
<!--    </div>-->
<!--    @endforeach-->
<!---->
<!---->
<!--    /////////////////////// nekoray-->
<!--    sudo apt install build-essential \-->
<!--    libfontconfig1 \-->
<!--    libqt5network5 \-->
<!--    libqt5widgets5 \-->
<!--    libqt5x11extras5 \-->
<!--    libqt5gui5-->
<!--    wget -qO- https://raw.githubusercontent.com/ohmydevops/nekoray-installer/main/installer.sh | bash-->
<!--    ////////////////////////////-->
<!--    https://app.mydigipay.com/service/credit/pre-register?amount=500000000&installmentCount=12&source=landing&fundProviderCode=1-->
<!--    BN/787-->
<!--    ////////////////////////////// games-->
<!--    https://www.dlfox.com/call-of-duty-modern-warfare-ii/-->
<!--    https://www.freegamesdl.net/call-of-duty-modern-warfare-ii-warzone-2-0-free/-->
<!--    https://www.freegamesdl.net/forza-horizon-5-pc-game-free-download/-->
<!--    https://www.freegamesdl.net/uncharted-legacy-of-thieves-collection-pc-game-free-11download/-->
<!--    https://www.freegamesdl.net/assassins-creed-valhalla-pc-game-complete-free-7download/-->
<!--    https://www.freegamesdl.net/gtav-grand-theft-auto-v-pc-game-free-3download/-->
<!--    https://www.freegamesdl.net/assassins-creed-mirage-pc-free-21download19/-->
<!--    https://www.freegamesdl.net/call-of-duty-black-ops-cold-war-pc-free-3download/-->
<!--    https://www.freegamesdl.net/call-of-duty-modern-warfare-ii-warzone-2-0-free/-->
<!--    https://www.freegamesdl.net/uncharted-legacy-of-thieves-collection-pc-game-free-11download/-->
<!--    https://par30games.net/231343/download-stronghold-definitive-edition-for-pc/-->
<!--    https://par30games.net/230812/download-call-of-duty-modern-warfare-iii-for-pc/-->
<!--    https://par30games.net/230279/download-robocop-rogue-city-for-pc/-->
<!--    https://par30games.net/125160/download-battlefield-2042-for-pc/-->
<!--    https://www.downloadha.com/game/escape-from-tarkov/-->
<!--    https://www.p30day.ir/forza-horizon-3-135287.html-->
<!--    https://steamdl.ir/5979/call-of-duty-modern-warfare-ii/-->
<!--    /////////////////////////////// chatgpt-->
<!--    https://start-chat.chatgot.io/-->
<!--    /////////////////////////////// vscode-->
<!--    مرتب سازی-->
<!--    ctrl shift i-->
<!--    //////////////////////////////////////// build docker-->
<!--    notepad .\hosts-->
<!--    wsl.exe --install -d Ubuntu-20.04-->
<!--    docker compose build --build-arg WWWUSER=1337 --build-arg WWWGROUP=1337 --no-cache-->
<!--    docker compose build --build-arg WWWUSER=1337 --build-arg WWWGROUP=1337-->
<!--    docker exec -it admin-bitoff-api-1 composer i --ignore-platform-reqs-->
<!--    composer i --ignore-platform-reqs-->
<!--    git config core.fileMode false-->
<!--    Set your username:-->
<!--    git config --global user.name "FIRST_NAME LAST_NAME"-->
<!--    Set your email address:-->
<!--    git config --global user.email "MY_NAME@example.com"-->
<!--    sudo vim /etc/hosts-->
<!--    sudo docker exec -it api-bitoff-api-1 php artisan order:tracking-->
<!--    COMPOSER_DISABLE_NETWORK=1 docker exec -it api-bitoff-api-1 composer update-->
<!--    ////////////////////////////////////////////-->
<!--    sudo vim /etc/hosts-->
<!--    /////////////////////////// ssh-->
<!--    glpat-yWXYSj3m5fAgf4ecb-e9-->
<!--    /////////////////////////////////// flag-->
<!--    namespace App\Http\Controllers\API;-->
<!---->
<!--    use App\Http\Controllers\Controller;-->
<!--    use Illuminate\Http\Request;-->
<!--    use Illuminate\Support\Facades\Storage;-->
<!--    use Intervention\Image\Facades\Image;-->
<!--    use App\Models\Country;-->
<!---->
<!--    class CountryController extends Controller-->
<!--    {-->
<!--    public function index()-->
<!--    {-->
<!--    $countries = Country::all();-->
<!--    return response()->json($countries);-->
<!--    }-->
<!---->
<!--    public function show($id)-->
<!--    {-->
<!--    $country = Country::findOrFail($id);-->
<!--    return response()->json($country);-->
<!--    }-->
<!---->
<!--    public function uploadFlag(Request $request, $id)-->
<!--    {-->
<!--    $country = Country::findOrFail($id);-->
<!--    $file = $request->file('flag');-->
<!---->
<!--    $directory = 'flags';-->
<!---->
<!--    $name = $country->code; // You can use any unique identifier for the file name-->
<!---->
<!--    $path = $directory.DIRECTORY_SEPARATOR.$name.'.'.$file->extension();-->
<!---->
<!--    $image = Image::make($file);-->
<!--    $image->save(storage_path('app/'.$path));-->
<!---->
<!--    $country->flag = $path;-->
<!--    $country->save();-->
<!---->
<!--    return response()->json(['message' => 'Flag uploaded successfully']);-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!---->
<!--    //////////////////////////////////////////////////-->
<!--    dd( Hashid::encode($orderId));-->
<!--    26104-->
<!--    //////////////////////////////////////-->
<!--    sudo docker exec -it api-bitoff-api-1 php artisan order:tracking-->
<!--    sudo docker exec -it api-bitoff-api-1 php artisan queue:work-->
<!--    /////////////////////////////////////-->
<!--    // http://172.18.28.106/tracking/1Z0R38R71355011005/-->
<!---->
<!--    https://app.zeplin.io/workspace/61f95125361763a3cb8e7b28/projects-->
<!--    http://172.18.28.106/tracking/1Z0R38R71355011005/-->
<!--    https://t.17track.net/en#nums=1ZY345Y2YW22701542-->
<!--    https://www.ship24.com/tracking?p=1Z0R38R71355011005-->
<!--    ///////////////-->
<!--    https://bitoff.io/p/my-order/earner/1-->
<!--    http://api.bitoff.test/b-->
<!--    ///////////////////////-->
<!--    private function updateTracking($done)-->
<!--    {-->
<!--    while ($done != Track::DONE_STATE) {-->
<!--    $this->track->update([-->
<!--    'state' => $done ? Track::DONE_STATE : Track::PROGRESS_STATE,-->
<!--    'last_inception' => now(),-->
<!--    ]);-->
<!--    //        $this->track->update([-->
<!--    //            'state' => $done ? Track::DONE_STATE : Track::PROGRESS_STATE,-->
<!--    //            'last_inception' => now(),-->
<!--    //        ]);-->
<!---->
<!--    if ($done == Track::DONE_STATE) {-->
<!--    $this->track->reservations->first()->pivot->update(['tag' => 'deliver']);-->
<!--    }-->
<!--    }-->
<!--    }-->
<!---->
<!--    //////////////////////////////////////////////////// stage bitoff-->
<!--    https://stage.bitoff.io/?esgnup=true&signup=true-->
<!--    ////////////////////////////////////////////////////////// hosts-->
<!--    sudo vim /etc/hosts-->
<!--    127.0.0.1       localhost-->
<!--    127.0.1.1       mohsen-->
<!--    127.0.0.1       api.bitoff.test-->
<!--    127.0.0.1       mailhog.bitoff.test-->
<!--    127.0.0.1       mysql.bitoff.test-->
<!--    127.0.0.1       mongo.bitoff.test-->
<!--    127.0.0.1       s3.bitoff.test-->
<!--    127.0.0.1       minio.bitoff.test-->
<!---->
<!---->
<!--    # The following lines are desirable for IPv6 capable hosts-->
<!--    ::1     ip6-localhost ip6-loopback-->
<!--    fe00::0 ip6-localnet-->
<!--    ff00::0 ip6-mcastprefix-->
<!--    ff02::1 ip6-allnodes-->
<!--    ff02::2 ip6-allrouters-->
<!---->
<!--    ///////////////////////////////////-->
<!---->
<!---->
<!--    ///////////////////-->
<!--    touch filename.txt-->
<!---->
<!--    ////////////////////////////-->
<!--    https://www.ship24.com/tracking?p=113-9105307-3733029-->
<!--    //-->
<!--    https://bit.darkube.app/browse/BIT-1053-->
<!--    /////////////////////////////-->
<!--    -Xms128m-->
<!--    -Xmx750m-->
<!--    //////////////////////////// set nginx-->
<!--    sudo vim /etc/hosts-->
<!--    //////////////////////////////////////-->
<!--    nohup /path/to/phpstorm/bin/phpstorm.sh &-->
<!--    nohup /path/to/phpstorm/bin/phpstorm.sh </dev/null >/dev/null 2>&1 &-->
<!--    alias start-phpstorm='nohup /path/to/phpstorm/bin/phpstorm.sh </dev/null >/dev/null 2>&1 &'-->
<!--    /home/mohsen/Downloads/JetBrains.PhpStorm.2021.3.3/PhpStorm-213.7172.28/bin-->
<!--    /home/mohsen/Downloads/JetBrains.PhpStorm.2021.3.3/PhpStorm-213.7172.28/bin/phpstorm.sh-->
<!---->
<!--    echo "alias phpstorm='/home/mohsen/Downloads/JetBrains.PhpStorm.2021.3.3/PhpStorm-213.7172.28/bin/phpstorm.sh </dev/null >/dev/null 2>&1 &'" >> ~/.bashrc-->
<!--    //////////////////////////////////////-->
<!--    touch ~/.PhpStorm2021.3/phpstorm64.vmoptions-->
<!--    -Xms128m-->
<!--    -Xmx6g-->
<!---->
<!---->
<!---->
<!---->
<!--    //////////////////////////////// docker-->
<!--    sudo docker exec -it api-bitoff-api-1 composer install-->
<!--    sudo docker compose build --build-arg WWWUSER=1337 --build-arg WWWGROUP=1337-->
<!--    sudo docker exec -it api-bitoff-api-1 composer u-->
<!--    sudo docker exec -it api-bitoff-api-1 composer i-->
<!--    sudo docker exec -it api-bitoff-api-1 php artisan test-->
<!--    docker-compose down --remove-orphans-->
<!--    //-->
<!--    sudo chown -R $USER:$USER /usr/local/share/v2ray/-->
<!---->
<!---->
<!---->
<!--    http://api.bitoff.test/-->
<!--    /////////////////-->
<!--    sudo usermod -aG docker $USER-->
<!--    newgrp docker-->
<!---->
<!--    ///////////////////////////// delete sudo-->
<!--    حذف sudo-->
<!--    userdel -r mohsen-->
<!--    ///////////////////////////////-->
<!--    http://mysql.bitoff.test/index.php?route=/database/structure&db=bitoff-->
<!--    ///////////////////////////////////-->
<!--    bitoff-test-->
<!--    ///////////////////////////////////////////////-->
<!--    git config core.fileMode false-->
<!--    git reset --hard-->
<!--    git checkout develop-->
<!--    ////////////////////////////////// update enum-->
<!--    Schema::create('credits', function (Blueprint $table) {-->
<!--    $table->enum('type', ['shop', 'earn', 'withdraw', 'deposit', 'cancel','admin', 'withdraw_block', 'fast_release']);-->
<!--    });-->
<!--    //-->
<!--    Schema::table('credits', function (Blueprint $table) {-->
<!--    DB::statement("ALTER TABLE `credits` MODIFY `type` ENUM('shop','sell_trade','buy_trade','cancel_trade', 'earn', 'withdraw', 'deposit', 'cancel','admin', 'withdraw_block', 'fast_release', 'expire_trade')");-->
<!--    });-->
<!--    //////////////////////////////// env local xampp-->
<!--    APP_URL=http://localhost-->
<!---->
<!--    ////////////////////////////////// update table enum 7.4-->
<!--    {-->
<!--    /**-->
<!--    * Run the migrations.-->
<!--    */-->
<!--    public function up()-->
<!--    {-->
<!--    DB::statement("ALTER TABLE credits MODIFY type ENUM('shop','sell_trade','buy_trade','cancel_trade', 'earn', 'withdraw', 'deposit', 'cancel','admin', 'withdraw_block', 'fast_release')");-->
<!--    }-->
<!---->
<!--    /**-->
<!--    * Reverse the migrations.-->
<!--    */-->
<!--    public function down()-->
<!--    {-->
<!--    DB::statement("ALTER TABLE credits MODIFY type ENUM('shop', 'earn', 'withdraw', 'deposit', 'cancel','admin', 'withdraw_block', 'fast_release')");-->
<!--    }-->
<!--    }-->
<!---->
<!--    /////////////////////////////////// update decimal-->
<!--    Schema::create('trades', function (Blueprint $table) {-->
<!--    $table->decimal('amount', 14, 10);-->
<!--    //-->
<!--    Schema::table('trades', function (Blueprint $table) {-->
<!--    $table->decimal('amount', 20, 10)->change();-->
<!--    }-->
<!--    Schema::table('trades', function (Blueprint $table) {-->
<!--    $table->decimal('amount', 14, 10)->change();-->
<!---->
<!--    ///////////////////////////////////////////// docker-->
<!--    sudo docker exec -it api-bitoff-api-1 composer up-->
<!--    /////-->
<!--    sudo docker exec -it api-nginx-1 sh-->
<!--    ls -la-->
<!--    //////-->
<!--    sudo docker ps -a-->
<!--    sudo docker stop $(sudo docker ps -aq)-->
<!--    sudo docker ps -a-->
<!--    sudo docker system prune-->
<!--    sudo docker compose up -d-->
<!--    sudo docker compose ps-->
<!--    sudo docker exec -it api-bitoff-api-1 sh-->
<!--    /////////////////////////////-->
<!--    حذف پسورد-->
<!--    $ sudo visudo-->
<!--    aaronkilik ALL=(ALL) NOPASSWD: ALL-->
<!--    ////////////////////////////////////////////////-->
<!--    Route::get('t', function () {-->
<!--    $sends = Send::orderBy('id')->take(1000)->get();-->
<!--    info("start");-->
<!---->
<!--    $chunks = $sends->chunk(200);-->
<!--    foreach ($chunks as $chunk) {-->
<!--    Send::whereIn('id', $chunk->pluck('id'))->update(["status" => 1]);-->
<!--    }-->
<!--    info("end");-->
<!--    dd($sends);-->
<!--    });-->
<!---->
<!--    //////////////////////////////////////-->
<!--    protected $types = [-->
<!--    'reserve',-->
<!--    'item.purchase',-->
<!--    'item.purchase.edit',-->
<!--    'item.ship',-->
<!--    'item.ship.edit',-->
<!--    'item.deliver',-->
<!--    'item.cancel',-->
<!--    'support',-->
<!--    'cancel',-->
<!--    'score',-->
<!--    ];-->
<!---->
<!--    //-->
<!--    if ($item->status === OrderItem::STATUS_SHIP && $item->tracking == $requestItem['track']) {-->
<!--    continue;-->
<!--    }-->
<!--    ////////////////////////////////////////////////////////// image storage-->
<!--    public function images($id, PurchaseImageRequest $request)-->
<!--    {-->
<!--    $order = Order::status([Order::STATUS_SHIP, Order::STATUS_RESERVE, Order::STATUS_PURCHASE, Order::STATUS_PARTIAL_SHIP, Order::STATUS_PARTIAL_DELIVER])-->
<!--    ->where('earner_id', $this->user->id)-->
<!--    ->findOrFail($id);-->
<!---->
<!--    if (($order->reservation->images()->count() + count($files = $request->file('items'))) > Reservation::MAX_FILES) {-->
<!--    return $this->respond('To many files', 403);-->
<!--    }-->
<!---->
<!--    $directory = HashId::encode(now()->month.now()->year);-->
<!---->
<!--    foreach ($files as $file) {-->
<!--    $name = Str::random(40);-->
<!---->
<!--    $thumbnail = Image::make($file)->fit(50, 40)->encode($file->extension());-->
<!---->
<!--    Storage::putFileAs(-->
<!--    $directory,-->
<!--    $file,-->
<!--    $name.'.'.$file->extension()-->
<!--    );-->
<!---->
<!--    Storage::put(-->
<!--    $directory.DIRECTORY_SEPARATOR.$name.'.th.'.$file->extension(),-->
<!--    $thumbnail-->
<!--    );-->
<!---->
<!--    $image = $order->reservation->images()->create([-->
<!--    'path' => $path = $directory.DIRECTORY_SEPARATOR.$name.'.'.$file->extension(),-->
<!--    ]);-->
<!---->
<!--    $order->reservation->storeLog([-->
<!--    'type' => 'image',-->
<!--    'role' => 'earner',-->
<!--    'changes' => ['id' => $image->id, 'path' => $path],-->
<!--    ]);-->
<!--    }-->
<!---->
<!--    return $this->respond('', 201);-->
<!--    }-->
<!---->
<!---->
<!--    ///////////////////////////////////////////////// number-->
<!--    شماره تلفن ها-->
<!--    public function update(Program $program)-->
<!--    {-->
<!--    // soap options-->
<!--    $messagesPerSecond = 1; // شما می‌توانید این مقدار را تغییر دهید-->
<!--    $to = [-->
<!--    9125753461, 9125754037, 9125754651, 9125757915, 9125759096, 9125759419, 9125759573, 9125762278, 9125763994, 9125767159, 9125767573, 9125769705, 9125770023, 9125771024, 9125775256, 9125776321, 9125777687, 9125780989, 9125782741, 9125783684, 9125784932, 9125785009, 9125785030, 9125785200, 9125787371, 9125787540, 9125789328, 9125790230, 9125790487, 9125790520, 9125792282, 9125793484, 9125795074, 9125795392, 9125796057, 9125796250, 9125796267, 9125796448, 9125796911, 9125799801, 9125800410, 9125804328, 9125804330, 9125805223, 9125805360, 9125805540, 9125806571, 9125807468, 9125807992, 9125809047, 9125809859, 9125835442, 9125835593, 9125835713, 9125837220, 9125837414, 9125837562, 9125837750, 9125838225, 9125838717, 9125838910, 9125839254, 9125839295, 9125839368, 9125839760, 9125840931, 9125841359, 9125841662, 9125841803, 9125841847, 9125841877, 9125841925, 9125842800, 9125843507, 9125843799, 9125843898, 9125846468, 9125847513, 9125848380, 9125848409, 9125848743, 9125850150, 9125851527, 9125851729, 9125851732, 9125852512, 9125853747, 9125853816, 9125853943, 9125854484, 9125854582, 9125854943, 9125855994, 9125856074, 9125856270, 9125856391, 9125856883, 9125857250, 9125857430, 9125857451, 9125858614, 9125858677, 9125859799, 9125860177, 9125860232, 9125861328, 9125861754, 9125863195, 9125863239, 9125863315, 9125863368, 9125863830, 9125863841, 9125863885, 9125864211, 9125864458, 9125864642, 9125864674, 9125864773, 9125865778, 9125865851, 9125865967, 9125866195, 9125866238, 9125866298, 9125866349, 9125866436, 9125866462, 9125866499, 9125866599, 9125866628, 9125866726, 9125866820, 9125866854, 9125866908, 9125866967, 9125867056, 9125867105, 9125867186, 9125867308, 9125867367, 9125867395, 9125867410, 9125867425, 9125867499, 9125867530, 9125867539, 9125867552, 9125867568, 9125867619, 9125867620, 9125867702, 9125867710, 9125867731, 9125867983, 9125868101, 9125868232, 9125868263, 9125868441, 9125868449, 9125868456, 9125868486, 9125868499, 9125868540, 9125868574, 9125868577, 9125868658, 9125868695, 9125868708, 9125868722, 9125868762, 9125868831, 9125868838, 9125868853, 9125868961, 9125869006, 9125869028, 9125869040, 9125869087, 9125869099, 9125869107, 9125869121, 9125869146, 9125869166, 9125869181, 9125869185, 9125869195, 9125869199, 9125869211, 9125869230, 9125869235, 9125869246, 9125869298, 9125869341, 9125869362, 9125869374, 9125869438, 9125869442, 9125869455, 9125869512, 9125869527, 9125869557, 9125869604, 9125869652, 9125869657, 9125869885, 9125869904, 9125869936, 9125869947, 9125870024, 9125870074, 9125870097, 9125870235, 9125870253, 9125870266, 9125870285, 9125870328, 9125870496, 9125870522, 9125870622, 9125870860, 9125870883, 9125870895, 9125870922, 9125871292, 9125871400, 9125871433, 9125871449, 9125871545, 9125871735, 9125871778, 9125871795, 9125872505, 9125873002, 9125873099, 9125873128, 9125873240, 9125873291, 9125873346, 9125873365, 9125873411, 9125873550, 9125873638, 9125873815, 9125874094, 9125874480, 9125874531, 9125874754, 9125874761, 9125874786, 9125874900, 9125875075, 9125875266, 9125875414, 9125875843, 9125875926, 9125876015, 9125876118, 9125876204, 9125876260, 9125876382, 9125876595, 9125877082, 9125877176, 9125877493, 9125878113, 9125878192, 9125878359, 9125878518, 9125878617, 9125878974, 9125879102, 9125879135, 9125879181, 9125879384, 9125879452, 9125879536, 9125879561, 9125879869, 9125880032, 9125881121, 9125882232, 9125882412, 9125883008, 9125883345, 9125883432, 9125883526, 9125883802, 9125883932, 9125883987, 9125884158, 9125884280, 9125884339, 9125884996, 9125885540, 9125885727, 9125886328, 9125887045, 9125889075, 9125889686, 9125900873, 9125902272, 9125902460, 9125902651, 9125904898, 9125906389, 9125906722, 9125907840, 9125907882, 9125908082, 9125908210, 9125909622, 9125909735, 9125912161, 9125913375, 9125913981, 9125916897, 9125930062, 9125930562, 9125930797, 9125931309, 9125932028, 9125932174, 9125933024, 9125933620, 9125933683, 9125933994, 9125934481, 9125935166, 9125935608, 9125936015, 9125936738, 9125936908, 9125938993, 9125939539, 9125939968, 9125941367, 9125941792, 9125942975, 9125943959, 9125944565, 9125946164, 9125946258, 9125946291, 9125946298, 9125946304, 9125947160, 9125947161, 9125947225, 9125947261, 9125947324, 9125947348, 9125947379, 9125947384, 9125947520, 9125947643, 9125947679, 9125947834, 9125947839, 9125947950, 9125947970, 9125948103, 9125948108, 9125948110, 9125948159, 9125948549, 9125948567, 9125948658, 9125948722, 9125948728, 9125948792, 9125948962, 9125948971, 9125949029, 9125949037, 9125949169, 9125949171, 9125949351, 9125949656, 9125949752, 9125951036, 9125951760, 9125952338, 9125952582, 9125953521, 9125953769, 9125953830, 9125954042, 9125954173, 9125954493, 9125954558, 9125954830, 9125954854, 9125954951, 9125954977, 9125955126, 9125955972, 9125956788, 9125957280, 9125958894, 9125959505, 9125960112, 9125960167, 9125961529, 9125961653, 9125962240, 9125962806, 9125962881, 9125963122, 9125964915, 9125965898, 9125968186, 9125969086, 9125971141, 9125971685, 9125971729, 9125972645, 9125973525, 9125975673, 9125976245, 9125976561, 9125977512, 9125979878, 9125980213, 9125981398, 9125981606, 9125982419, 9125982420, 9125982536, 9125982807, 9125983035, 9125984025, 9125984077, 9125984431, 9125986168, 9125986220, 9125986244, 9125987792, 9125988271, 9125988750, 9125990192, 9125993235, 9125993655, 9125993788, 9125994267, 9125994724, 9125995699, 9125996918, 9125996940, 9125996953, 9126001067, 9126001156, 9126003467, 9126003786, 9126003962, 9126004164, 9126004357, 9126005218, 9126005975, 9126006887, 9126007028, 9126007220, 9126008325, 9126009644, 9126010061, 9126010072, 9126012041, 9126012118, 9126012399, 9126013472, 9126013724, 9126013759, 9126015046, 9126015648, 9126017403, 9126018500, 9126018773, 9126019614, 9126019917, 9126020115, 9126022161, 9126024557, 9126025052, 9126026353, 9126026395, 9126026960, 9126027716, 9126039227, 9126039903, 9126045008, 9126045221, 9126045855, 9126047241, 9126047471, 9126047626, 9126049200, 9126049233, 9126049721, 9126050111, 9126051074, 9126054775, 9126055516, 9126055901, 9126056058, 9126056448, 9126057082, 9126057101, 9126062279, 9126065799, 9126066187, 9126069790, 9126070286, 9126070306, 9126072936, 9126072941, 9126073628, 9126073929, 9126074308, 9126075951, 9126076198, 9126076705, 9126077335, 9126078221, 9126079300, 9126080413, 9126080503, 9126080871, 9126081874, 9126082427, 9126084009, 9126084707, 9126084943, 9126084966, 9126084985, 9126085322, 9126085923, 9126085950, 9126087376, 9126087922, 9126088020, 9126088033, 9126088246, 9126088473, 9126089299, 9126090039, 9126090733, 9126091850, 9126092131, 9126092372, 9126093169, 9126093220, 9126094213, 9126094560, 9126094896, 9126095081, 9126095312, 9126095524, 9126095874, 9126096052, 9126097097, 9126097142, 9126097441, 9126097451, 9126097486, 9126097567, 9126097570, 9126097638, 9126097727, 9126097747, 9126097832, 9126097890, 9126097896, 9126097900, 9126098124, 9126098142, 9126098170, 9126098229, 9126098360, 9126098367, 9126098399, 9126098417, 9126098452, 9126098481, 9126098494, 9126099085, 9126099127, 9126099133, 9126099136, 9126099137, 9126099151, 9126099163, 9126099175, 9126099179, 9126099189, 9126099208, 9126099225, 9126099240, 9126099282, 9126099300, 9126099306, 9126099310, 9126099343, 9126099399, 9126099414, 9126099456, 9126099469, 9126099473, 9126099476, 9126099483, 9126099485, 9126099487, 9126099500, 9126099505, 9126099529, 9126099532, 9126099557, 9126099566, 9126099577, 9126099614, 9126099617, 9126099627, 9126099632, 9126099654, 9126099705, 9126099722, 9126099729, 9126099794, 9126099812, 9126099817, 9126099854, 9126099855, 9126099893, 9126099904, 9126099908, 9126099918, 9126099936, 9126099974, 9126099983, 9126099984, 9126100038, 9126100091, 9126100114, 9126100117, 9126100120, 9126100128, 9126100133, 9126100136, 9126100197, 9126100245, 9126100265, 9126100275, 9126100279, 9126100309, 9126100310, 9126100340, 9126100362, 9126100365, 9126100391, 9126100414, 9126100422, 9126100428, 9126100434, 9126100437, 9126100463, 9126100470, 9126100476, 9126100519, 9126100528, 9126100537, 9126100545, 9126100548, 9126100575, 9126100585, 9126100588, 9126100589, 9126100619, 9126100643, 9126100686, 9126100754, 9126100845, 9126100881, 9126100886, 9126100941, 9126100982, 9126101124, 9126101172, 9126101173, 9126101209, 9126101345, 9126101705, 9126101787, 9126101890, 9126102119, 9126102145, 9126102326, 9126102338, 9126102402, 9126102414, 9126102509, 9126102518, 9126102922, 9126102938, 9126103028, 9126103390, 9126103556, 9126103972, 9126104233, 9126104331, 9126104591, 9126104595, 9126104643, 9126105009, 9126105063, 9126105425, 9126105509, 9126105608, 9126105935, 9126106032, 9126106082, 9126106379, 9126106752, 9126106758, 9126106876, 9126107101, 9126107288, 9126107680, 9126107859, 9126108136, 9126108162, 9126108343, 9126108418, 9126108477, 9126108711, 9126108725, 9126108790, 9126108802, 9126108915, 9126109087, 9126109484, 9126109603, 9126109659, 9126109726, 9126109846, 9126110224, 9126110743, 9126111102, 9126111633, 9126111668, 9126113476, 9126113608, 9126115302, 9126116788, 9126117067, 9126117112, 9126118924, 9126119412, 9126119925, 9126119956, 9126120379, 9126120710, 9126121203, 9126126695, 9126128583, 9126128676, 9126128698, 9126130598, 9126131102, 9126131635, 9126132954, 9126133490, 9126134621, 9126135514, 9126135523, 9126137085, 9126138129, 9126139379, 9126139644, 9126140869, 9126141338, 9126142019, 9126142472, 9126142547, 9126142988, 9126143114, 9126143430, 9126144220, 9126144783, 9126144868, 9126145147, 9126145404, 9126145430, 9126145998, 9126146393, 9126146511, 9126147283, 9126147435, 9126147765, 9126148231, 9126148494, 9126149026, 9126149128, 9126149398, 9126149794, 9126150585, 9126150638, 9126151033, 9126152351, 9126152645, 9126154143, 9126156120, 9126156518, 9126156648, 9126157192, 9126157312, 9126158409, 9126159265, 9126162286, 9126162410, 9126163426, 9126163451, 9126166037, 9126166157, 9126168700, 9126169698, 9126172248, 9126172966, 9126175038, 9126177355, 9126178141, 9126178570, 9126178968, 9126179129, 9126179276, 9126180282, 9126181425, 9126181465, 9126181907, 9126182547, 9126183517, 9126183574, 9126184044, 9126184046, 9126185269, 9126186190, 9126186648, 9126186983, 9126187130, 9126187147, 9126187338, 9126187812, 9126189061, 9126190045, 9126191324, 9126193072, 9126193951, 9126195166, 9126197763, 9126199345, 9126200489, 9126201309, 9126202464, 9126203177, 9126204586, 9126205081, 9126206267, 9126208093, 9126208925, 9126209636, 9126209790, 9126210131, 9126210204, 9126210367, 9126210715, 9126210841, 9126211566, 9126212462, 9126213573, 9126214530, 9126215213, 9126215788, 9126216230, 9126216273, 9126216820, 9126217162, 9126217605, 9126217958, 9126218124, 9126218136, 9126218268, 9126218272, 9126219856, 9126219985, 9126220438, 9126220566, 9126220779, 9126221423, 9126221500, 9126221772, 9126221821, 9126221980, 9126222330, 9126222386, 9126222680, 9126222725, 9126222742, 9126222837, 9126222925, 9126223096, 9126223118, 9126223121, 9126223202, 9126223301, 9126223345, 9126223373, 9126223415, 9126223500, 9126223514, 9126223528, 9126223550, 9126223574, 9126223641, 9126223676, 9126223677, 9126223754, 9126223758, 9126223782, 9126223826, 9126224083, 9126224187, 9126224213, 9126224239, 9126224262, 9126224266, 9126224267, 9126224339, 9126224395, 9126224403, 9126224417, 9126224437, 9126224454, 9126224480, 9126224486, 9126224500, 9126224525, 9126224541, 9126224565, 9126224566, 9126224586, 9126224603, 9126224621, 9126224623, 9126224652, 9126224686, 9126224721, 9126224741, 9126224767, 9126224770, 9126224788, 9126224810, 9126224875, 9126224879, 9126224889, 9126224913, 9126224939, 9126224941, 9126224968, 9126224986, 9126224990, 9126224995, 9126225030, 9126225035, 9126225089, 9126225108, 9126225127, 9126225139, 9126225195, 9126225203, 9126225210, 9126225211, 9126225256, 9126225312, 9126225349, 9126225357, 9126225371, 9126225396, 9126225418, 9126225471, 9126225495, 9126225624, 9126225668, 9126225712, 9126225833, 9126225921, 9126225924, 9126225937, 9126225969, 9126226037, 9126226041, 9126226048, 9126226140, 9126226197, 9126226214, 9126226268, 9126226282, 9126226286, 9126226301, 9126226359, 9126226427, 9126226434, 9126226440, 9126226505, 9126226649, 9126226762, 9126226845, 9126227202, 9126227307, 9126227328, 9126227375, 9126227407, 9126227505, 9126227858, 9126228011, 9126228219, 9126228770, 9126229035, 9126229140, 9126229194, 9126229296, 9126229469, 9126229738, 9126229886, 9126230138, 9126230157, 9126230814, 9126230992, 9126231957, 9126232055, 9126232080, 9126232139, 9126232527, 9126232557, 9126233072, 9126233104, 9126233199, 9126233213, 9126233273, 9126233281, 9126233315, 9126233379, 9126233522, 9126233540, 9126233700, 9126233730, 9126233740, 9126233851, 9126234075, 9126234789, 9126234838, 9126235356, 9126236042, 9126236334, 9126236702, 9126236904, 9126236917, 9126236943, 9126237196, 9126237358, 9126237837, 9126238097, 9126238827, 9126238956, 9126261533, 9126265250, 9126266638, 9126267646, 9126268368, 9126269010, 9126269600, 9126270095, 9126270136, 9126270184, 9126270232, 9126270239, 9126270326, 9126270418, 9126270498, 9126270658, 9126270780, 9126270831, 9126270876, 9126271141, 9126271164, 9126271184, 9126271272, 9126271290, 9126271553, 9126271583, 9126271709, 9126271895, 9126272027, 9126272113, 9126272337, 9126272438, 9126273252, 9126273358, 9126273360, 9126273407, 9126273632, 9126274806, 9126275099, 9126275624, 9126275891, 9126276181, 9126276202, 9126276489, 9126276815, 9126276887, 9126277279, 9126277545, 9126277596, 9126277880, 9126277908, 9126278461, 9126278635, 9126279265, 9126279755, 9126279936, 9126300445, 9126300683, 9126302389, 9126302522, 9126303966, 9126304170, 9126305062, 9126306260, 9126306532, 9126307213, 9126307330, 9126330091, 9126331553, 9126332478, 9126332509, 9126332823, 9126333299, 9126334009, 9126334029, 9126334379, 9126334408, 9126334656, 9126335998, 9126336883, 9126337247, 9126337629, 9126339458, 9126339576, 9126340609, 9126340948, 9126341241, 9126341769, 9126341963, 9126342064, 9126342663, 9126343880, 9126343925, 9126344310, 9126345491, 9126346315, 9126346812, 9126348294, 9126348986, 9126349264, 9126349626, 9126354615, 9126355387, 9126356086, 9126357161, 9126360117, 9126363121, 9126363602, 9126363967, 9126366141, 9126367297, 9126381509, 9126383876, 9126385675, 9126386380, 9126386696, 9126387678, 9126389346, 9126389541, 9126390792, 9126390993, 9126392725, 9126393530, 9126394269, 9126394823, 9126395283, 9126395424, 9126396350, 9126397714, 9126397807, 9126398836, 9126399749, 9126401588, 9126403057, 9126403181, 9126403759, 9126407994, 9126408738, 9126408763, 9126433711, 9126434461, 9126434576, 9126435685, 9126435710, 9126436141, 9126436490, 9126436591, 9126436708, 9126437360, 9126438208, 9126438269, 9126438319, 9126438629, 9126438894, 9126438994, 9126439273, 9126439564, 9126440090, 9126440574, 9126441483, 9126441700, 9126442517, 9126442617, 9126443058, 9126443450, 9126445146, 9126445260, 9126448461, 9126448629, 9126448867, 9126449134, 9126451544, 9126451781, 9126452292, 9126452654, 9126452694, 9126452760, 9126452853, 9126452859, 9126453208, 9126453491, 9126453648, 9126454032, 9126454233, 9126455602, 9126455779, 9126456232, 9126456413, 9126456414, 9126456432, 9126456698, 9126457453, 9126457546, 9126458069, 9126458513, 9126458825, 9126459350, 9126459744, 9126459927, 9126460299, 9126460464, 9126460479, 9126460545, 9126460594, 9126460626, 9126461031, 9126461094, 9126461501, 9126461604, 9126461926, 9126462064, 9126462146, 9126462411, 9126462445, 9126462574, 9126462672, 9126462676, 9126462706, 9126462712, 9126462713, 9126462719, 9126462767, 9126462842, 9126462865, 9126462930, 9126462934, 9126463039, 9126463068, 9126463088, 9126463160, 9126463165, 9126463202, 9126463225, 9126463229, 9126463239, 9126463256, 9126463266, 9126463275, 9126463295, 9126463343, 9126463454, 9126463482, 9126463503, 9126463509, 9126463537, 9126463539, 9126463545, 9126463560, 9126463577, 9126463601, 9126463620, 9126463630, 9126463644, 9126463698, 9126463720, 9126463761, 9126463915, 9126464085, 9126464238, 9126464266, 9126464617, 9126464650, 9126464720, 9126464749, 9126464791, 9126464798, 9126464838, 9126464845, 9126465435, 9126465473, 9126465531, 9126465653, 9126465680, 9126466273, 9126466743, 9126466786, 9126466936, 9126466956, 9126467433, 9126467545, 9126467602, 9126467659, 9126467763, 9126467786, 9126468171, 9126468260, 9126468274, 9126468330, 9126468441, 9126468461, 9126468625, 9126468773, 9126468840, 9126468939, 9126469086, 9126469123, 9126469167, 9126469410, 9126469415, 9126469540, 9126470331, 9126470332, 9126470717, 9126470832, 9126470887, 9126470910, 9126471168, 9126471612, 9126471673, 9126471682, 9126471786, 9126472041, 9126472159, 9126472231, 9126472240, 9126472307, 9126472400, 9126472417, 9126472506, 9126472554, 9126472561, 9126472799, 9126472931, 9126473552, 9126473990, 9126474692, 9126475002, 9126475330, 9126475613, 9126476118, 9126476297, 9126476382, 9126477042, 9126477378, 9126477918, 9126478688, 9126478947, 9126479951, 9126480254, 9126480340, 9126481088, 9126481465, 9126482717, 9126485234, 9126485259, 9126487005, 9126488153, 9126488937, 9126489285, 9126492072, 9126493035, 9126493706, 9126494968, 9126495011, 9126496523, 9126496929, 9126497965, 9126498146, 9126498914, 9126503827, 9126504385, 9126504480, 9126506687, 9126507882, 9126509646, 9126540732, 9126540997, 9126541704, 9126542445, 9126543343, 9126544133, 9126544733, 9126545235, 9126546288, 9126546852, 9126547446, 9126547588, 9126548464, 9126549039, 9126572025, 9126581162, 9126583587, 9126583722, 9126584788, 9126585913, 9126586035, 9126586799, 9126586821, 9126586830, 9126587185, 9126587387, 9126587610, 9126589286, 9126591021, 9126592069, 9126593426, 9126593971, 9126594451, 9126595029, 9126597242, 9126598205, 9126599500, 9126602029, 9126619502, 9126625942, 9126640655, 9126655066, 9126663315, 9126701123, 9126702441, 9126703391, 9126703721, 9126704012, 9126705468, 9126706445, 9126708302, 9126709142, 9126714814, 9126715001, 9126715048, 9126715875, 9126716079, 9126716901, 9126718805, 9126721070, 9126723069, 9126723215, 9126723380, 9126725539, 9126726608, 9126728550, 9126750032, 9126750259, 9126750500, 9126750953, 9126754599, 9126757371, 9126757405, 9126758286, 9126761971, 9126763942, 9126766814, 9126767420, 9126768059, 9126768324, 9126772714, 9126774699, 9126774827, 9126774960, 9126777315, 9126778043, 9126778345, 9126778747, 9126778763, 9126779094, 9126780082, 9126780213, 9126781660, 9126782164, 9126782300, 9126782770, 9126784005, 9126784053, 9126784137, 9126784249, 9126784564, 9126784842, 9126784952, 9126785165, 9126787194, 9126787276, 9126787411, 9126788802, 9126790025, 9126790387, 9126790929, 9126792311, 9126793095, 9126793186, 9126793757, 9126794766, 9126795025, 9126795181, 9126796819, 9126796872, 9126796918, 9126797335, 9126797508, 9126797670, 9126798078, 9126798088, 9126798554, 9126798761, 9126798771, 9126798897, 9126798917, 9126798996, 9126799013, 9126799438, 9126799687, 9126799701, 9126799823, 9126800470, 9126800894, 9126801077, 9126803149, 9126803203, 9126803803, 9126804551, 9126804637, 9126804878, 9126805640, 9126805957, 9126806381, 9126806693, 9126806916, 9126807819, 9126808043, 9126808511, 9126808596, 9126808601, 9126808708, 9126809029, 9126809136, 9126809433, 9126809436, 9126830097, 9126830205, 9126830213, 9126830358, 9126830389, 9126830437, 9126830508, 9126830633, 9126830737, 9126830780, 9126830815, 9126831005, 9126831083, 9126831132, 9126831158, 9126831347, 9126831356, 9126831390, 9126831549, 9126831642, 9126831753, 9126831800, 9126831846, 9126831900, 9126832181, 9126832381, 9126832486, 9126832551, 9126832565, 9126832573, 9126832588, 9126832629, 9126832680, 9126832689, 9126832724, 9126832832, 9126832925, 9126832950, 9126833004, 9126833005, 9126833007, 9126833028, 9126833039, 9126833169, 9126833188, 9126833244, 9126833249, 9126833299, 9126833385, 9126833402, 9126833418, 9126833469, 9126833481, 9126833588, 9126833611, 9126833660, 9126833685, 9126833687, 9126833690, 9126833697, 9126833700, 9126833714, 9126833723, 9126833832, 9126833852, 9126833865, 9126833877, 9126833930, 9126833944, 9126834026, 9126834102, 9126834122, 9126834138, 9126834168, 9126834209, 9126834228, 9126834309, 9126834312, 9126834358, 9126834407, 9126834498, 9126834500, 9126834598, 9126834603, 9126834610, 9126834741, 9126834874, 9126835127, 9126835753, 9126835912, 9126836073, 9126836708, 9126837195, 9126838608, 9126838937, 9126839181, 9126839374, 9126839904, 9126840021, 9126840610, 9126841006, 9126841068, 9126841323, 9126841626, 9126841628, 9126841651, 9126841654, 9126841929, 9126841939, 9126842037, 9126842264, 9126842489, 9126842873, 9126843148, 9126843373, 9126843962, 9126844065, 9126844293, 9126844310, 9126844320, 9126844510, 9126844801, 9126844886, 9126844938, 9126845153, 9126845439, 9126845574, 9126845649, 9126845717, 9126845770, 9126845783, 9126845791, 9126845854, 9126846400, 9126846743, 9126848199, 9126848434, 9126848731, 9126848922, 9126849536, 9126850178, 9126850533, 9126850914, 9126851766, 9126851882, 9126853137, 9126853315, 9126854377, 9126854661, 9126855359, 9126855449, 9126855853, 9126856497, 9126856632, 9126857566, 9126857863, 9126858060, 9126858594, 9126859112, 9126859562, 9126860124, 9126860834, 9126860885, 9126861407, 9126861838, 9126862028, 9126865373, 9126867478, 9126868829, 9126868879, 9126870750, 9126870821, 9126873170, 9126875164, 9126876779, 9126877208, 9126878600, 9126879818, 9126880531, 9126881977, 9126884429, 9126887307, 9126889937, 9126890490, 9126890948, 9126891629, 9126892872, 9126893032, 9126893109, 9126893898, 9126893953, 9126895155, 9126896395, 9126896649, 9126896884, 9126897148, 9126899676, 9126901846, 9126902232, 9126902853, 9126903909, 9126906176, 9126906493, 9126906943, 9126907011, 9126908112, 9126908654, 9126909072, 9126909345, 9126910125, 9126910539, 9126910560, 9126910680, 9126930340, 9126930644, 9126931081, 9126931603, 9126934016, 9126934031, 9126939103, 9126947992, 9126948789, 9126948977, 9126949730, 9126950334, 9126952169, 9126953019, 9126953819, 9126956320, 9126956330, 9126957160, 9126961266, 9126961503, 9126961957, 9126962136, 9126963697, 9126965346, 9126968490, 9126968725, 9126970431, 9126970592, 9126971423, 9126972918, 9126973203, 9126974374, 9126976995, 9126978763, 9126982735, 9126982848, 9126983091, 9126983181, 9126985697, 9126986131, 9126986167, 9126987338, 9126987629, 9126987704, 9126988524, 9126988827, 9126989460, 9126990677, 9126992159, 9126992498, 9126994891, 9126995143, 9126995659, 9126996018, 9126996074, 9126996938, 9126997916, 9126999157, 9127001433, 9127003008, 9127003582, 9127003957, 9127005400, 9127006007, 9127006079, 9127006264, 9127007458, 9127008007, 9127010293, 9127010625, 9127011094, 9127011167, 9127012419, 9127012686, 9127013047, 9127013708, 9127013756, 9127015221, 9127018112, 9127018364, 9127018546, 9127020471, 9127023530, 9127024428, 9127025465, 9127029843, 9127033023, 9127034916, 9127035278, 9127035764, 9127036288, 9127036330, 9127036388, 9127036410, 9127036423, 9127038005, 9127038131, 9127038368, 9127040688, 9127041004, 9127041558, 9127042452, 9127044091, 9127048121, 9127050664, 9127051447, 9127054612, 9127055069, 9127057747, 9127058773, 9127060915, 9127061192, 9127061702, 9127065321, 9127068019, 9127071440, 9127071449, 9127076106, 9127076998, 9127077336, 9127081790, 9127083889, 9127087091, 9127087204, 9127088289, 9127092517, 9127095924, 9127099665, 9127100998, 9127101814, 9127101860, 9127103389, 9127105435, 9127105854, 9127106473, 9127106574, 9127107865, 9127108147, 9127110533, 9127110753, 9127111245, 9127111388, 9127111513, 9127112023, 9127112156, 9127112532, 9127113171, 9127113521, 9127113798, 9127114160, 9127115496, 9127116031, 9127116675, 9127118252, 9127120462, 9127122441, 9127124916, 9127128578, 9127130434, 9127135746, 9127136086, 9127137241, 9127137945, 9127138980, 9127145073, 9127145374, 9127145460, 9127148543, 9127155803, 9127158799, 9127159507, 9127160801, 9127163495, 9127164252, 9127164377, 9127164486, 9127164936, 9127165062, 9127165705, 9127167424, 9127167470, 9127167798, 9127169057, 9127170073, 9127172573, 9127173136, 9127173403, 9127173826, 9127174276, 9127175844, 9127176832, 9127180577, 9127180878, 9127182535, 9127182598, 9127183766, 9127183774, 9127184985, 9127185828, 9127186391, 9127187648, 9127189517, 9127189758, 9127189913, 9127189932, 9127191741, 9127192085, 9127192357, 9127192408, 9127193051, 9127193794, 9127193995, 9127194365, 9127194559, 9127194630, 9127194703, 9127194956, 9127195052, 9127195509, 9127195602, 9127195993, 9127196196, 9127196466, 9127196610, 9127197012, 9127197220, 9127197234, 9127197870, 9127198144, 9127198163, 9127199037, 9127200563, 9127200904, 9127201062, 9127202395, 9127203035, 9127203103, 9127203236, 9127203733, 9127204381, 9127204697, 9127205683, 9127206693, 9127207412, 9127208890, 9127209021, 9127209035, 9127209041, 9127209054, 9127209289, 9127209296, 9127209810, 9127209861, 9127210078, 9127210225, 9127210363, 9127210446, 9127210447, 9127210459, 9127210715, 9127210724, 9127210788, 9127210857, 9127210968, 9127211193, 9127211321, 9127211370, 9127211433, 9127211476, 9127211556, 9127211568, 9127211843, 9127212078, 9127212157, 9127212178, 9127212205, 9127212372, 9127212474, 9127212520, 9127212570, 9127212784, 9127213832, 9127214428, 9127214587, 9127214956, 9127214996, 9127215088, 9127215461, 9127215847, 9127215927, 9127216452, 9127216527, 9127216562, 9127217020, 9127217279, 9127217483, 9127218248, 9127218506, 9127218508, 9127218535, 9127218743, 9127218955, 9127219075, 9127219218, 9127219244, 9127219304, 9127219338, 9127219419, 9127219425, 9127219527, 9127219567, 9127219703, 9127219732, 9127219757, 9127219838, 9127219989, 9127220138, 9127220168, 9127220343, 9127220357, 9127220376, 9127220385, 9127220388, 9127220395, 9127220485, 9127220508, 9127220624, 9127220658, 9127220756, 9127220764, 9127220829, 9127220912, 9127220988, 9127220993, 9127221003, 9127221107, 9127221168, 9127221174, 9127221186, 9127221288, 9127221324, 9127221429, 9127221558, 9127221575, 9127221764, 9127221997, 9127222040, 9127222061, 9127222100, 9127222167, 9127222185, 9127222235, 9127222281, 9127222329, 9127222342, 9127222356, 9127222375, 9127222494, 9127222564, 9127222573, 9127222659, 9127222753, 9127222769, 9127222808, 9127222857, 9127222893, 9127223087, 9127223142, 9127223273, 9127223417, 9127223494, 9127223503, 9127223707, 9127223715, 9127223721, 9127223775, 9127223791, 9127223792, 9127223832, 9127223858, 9127223887, 9127223893, 9127223903, 9127223904, 9127223906, 9127223912, 9127223919, 9127223920, 9127223962, 9127223973, 9127223978, 9127223988, 9127224027, 9127224045, 9127224075, 9127224077, 9127224088, 9127224092, 9127224098, 9127224100, 9127224133, 9127224151, 9127224167, 9127224228, 9127224236, 9127224238, 9127224281, 9127224315, 9127224322, 9127224329, 9127224332, 9127224350, 9127224360, 9127224365, 9127224397, 9127224418, 9127224458, 9127224506, 9127224535, 9127224560, 9127224600, 9127224601, 9127224619, 9127224667, 9127224695, 9127224733, 9127224740, 9127224756, 9127224794, 9127224797, 9127224803, 9127224821, 9127224829, 9127224833, 9127224883, 9127224916, 9127224918, 9127224919, 9127224932, 9127224959, 9127224981, 9127224986, 9127224993, 9127225023, 9127225059, 9127225071, 9127225074, 9127225075, 9127225084, 9127225085, 9127225196, 9127225199, 9127225212, 9127225280, 9127225288, 9127225302, 9127225313, 9127225337, 9127225348, 9127225369, 9127225386, 9127225388, 9127225395, 9127225417, 9127225429, 9127225448, 9127225457, 9127225462, 9127225464, 9127225494, 9127225510, 9127225525, 9127225530, 9127225586, 9127225598, 9127225620, 9127225625, 9127225633, 9127225675, 9127225701, 9127225718, 9127225737, 9127225739, 9127225743, 9127225794, 9127225820, 9127225844, 9127225879, 9127225901, 9127225902, 9127225921, 9127225926, 9127225932, 9127225944, 9127225968, 9127225970, 9127226021, 9127226022, 9127226044, 9127226053, 9127226083, 9127226096, 9127226109, 9127226125, 9127226156, 9127226172, 9127226202, 9127226239, 9127226252, 9127226256, 9127226266, 9127226271, 9127226292, 9127226350, 9127226365, 9127226415, 9127226431, 9127226432, 9127226469, 9127226474, 9127226500, 9127226501, 9127226512, 9127226515, 9127226524, 9127226542, 9127226549, 9127226581, 9127226608, 9127226626, 9127226648, 9127226675, 9127226720, 9127226741, 9127226764, 9127226779, 9127226788, 9127226798, 9127226860, 9127226895, 9127226917, 9127226930, 9127226933, 9127226942, 9127226973, 9127226975, 9127227058, 9127227079, 9127227082, 9127227086, 9127227095, 9127227096, 9127227120, 9127227134, 9127227156, 9127227183, 9127227194, 9127227275, 9127227295, 9127227310, 9127227313, 9127227356, 9127227379, 9127227386, 9127227404, 9127227406, 9127227420, 9127227455, 9127227462, 9127227467, 9127227478, 9127227480, 9127227491, 9127227495, 9127227499, 9127227500, 9127227516, 9127227521, 9127227526, 9127227540, 9127227547, 9127227583, 9127227585, 9127227608, 9127227611, 9127227621, 9127227623, 9127227655, 9127227679, 9127227680, 9127227695, 9127227727, 9127227739, 9127227742, 9127227746, 9127227762, 9127227806, 9127227815, 9127227817, 9127227821, 9127227844, 9127227861, 9127227905, 9127227912, 9127227920, 9127227921, 9127227932, 9127227953, 9127227967, 9127227969, 9127227972, 9127227985, 9127227995, 9127228011, 9127228012, 9127228013, 9127228032, 9127228046, 9127228074, 9127228109, 9127228291, 9127228297, 9127228353, 9127228376, 9127228418, 9127228432, 9127228557, 9127228673, 9127228689, 9127228741, 9127228898, 9127228944, 9127228973, 9127229007, 9127229054, 9127229283, 9127229305, 9127229557, 9127229587, 9127229600, 9127229612, 9127229726, 9127230314, 9127230414, 9127230488, 9127230518, 9127230527, 9127230625, 9127230729, 9127230820, 9127230877, 9127230905, 9127230941, 9127230986, 9127231019, 9127231025, 9127231057, 9127231161, 9127231165, 9127231273, 9127231279, 9127231463, 9127231624, 9127231712, 9127231883, 9127231972, 9127232059, 9127232147, 9127232170, 9127232207, 9127232766, 9127232883, 9127233076, 9127233528, 9127233603, 9127235745, 9127235935, 9127237109, 9127237401, 9127237459, 9127237551, 9127237670, 9127237719, 9127237721, 9127238005, 9127238049, 9127238288, 9127238537, 9127238916, 9127239340, 9127239369, 9127239388, 9127239700, 9127239843, 9127240069, 9127240905, 9127240991, 9127240995, 9127241265, 9127241305, 9127241548, 9127241859, 9127241907, 9127241926, 9127241965, 9127242149, 9127242875, 9127243002, 9127243039, 9127243376, 9127243824, 9127243881, 9127243957, 9127244578, 9127245049, 9127245202, 9127245373, 9127245437, 9127245750, 9127245860, 9127246285, 9127246316, 9127246380, 9127246552, 9127246617, 9127246635, 9127246760, 9127247025, 9127247098, 9127247199, 9127247315, 9127247335, 9127247648, 9127247764, 9127247780, 9127247863, 9127248034, 9127248133, 9127248341, 9127248539, 9127248895, 9127248896, 9127248956, 9127248970, 9127248985, 9127249082, 9127249117, 9127249258, 9127249268, 9127249418, 9127249455, 9127249491, 9127249545, 9127249553, 9127249629, 9127249693, 9127249778, 9127249803, 9127249845, 9127250298, 9127250705, 9127251547, 9127251651, 9127251736, 9127251997, 9127253894, 9127254272, 9127254584, 9127255396, 9127256045, 9127257089, 9127257423, 9127257846, 9127258969, 9127258991, 9127259199, 9127260148, 9127260227, 9127260635, 9127261505, 9127261997, 9127262096, 9127262973, 9127263043, 9127263452, 9127264613, 9127265248, 9127265675, 9127267436, 9127267450, 9127269420, 9127270831, 9127272069, 9127272091, 9127272340, 9127272418, 9127273028, 9127273372, 9127273685, 9127273951, 9127274080, 9127275170, 9127276016, 9127276657, 9127276863, 9127276941, 9127277415, 9127277631, 9127277913, 9127278538, 9127279314, 9127282519, 9127340633, 9127342193, 9127344056, 9127345467, 9127349461, 9127349687, 9127353027, 9127357556, 9127358479, 9127361934, 9127361969, 9127362496, 9127362554, 9127363402, 9127363554, 9127363610, 9127363961, 9127364149, 9127365439, 9127366467, 9127366505, 9127367265, 9127367451, 9127367678, 9127367734, 9127368339, 9127368456, 9127368940, 9127370270, 9127370374, 9127370965, 9127371410, 9127372812, 9127373214, 9127373268, 9127373994, 9127374215, 9127374238, 9127375294, 9127377556, 9127378314, 9127378557, 9127378735, 9127379682, 9127380532, 9127380572, 9127383281, 9127384314, 9127386056, 9127386916, 9127387643, 9127389317, 9127389875, 9127390720, 9127392110, 9127392597, 9127392788, 9127395032, 9127600021, 9127600029, 9127600042, 9127600093, 9127600096, 9127600112, 9127600164, 9127600165, 9127600175, 9127600180, 9127600184, 9127600186, 9127600195, 9127600198, 9127600215, 9127600217, 9127600224, 9127600258, 9127600262, 9127600276, 9127600277, 9127600280, 9127600298, 9127600299, 9127600310, 9127600315, 9127600325, 9127600351, 9127600365, 9127600375, 9127600398, 9127600442, 9127600450, 9127600465, 9127600475, 9127600477, 9127600484, 9127600497, 9127600499, 9127600516, 9127600517, 9127600526, 9127600537, 9127600538, 9127600575, 9127600582, 9127600595, 9127600620, 9127600631, 9127600652, 9127600684, 9127600719, 9127600726, 9127600741, 9127600753, 9127600782, 9127600820, 9127600836, 9127600859, 9127600887, 9127600913, 9127600932, 9127600956, 9127600957, 9127600970, 9127600983, 9127600992, 9127601004, 9127601005, 9127601019, 9127601031, 9127601042, 9127601058, 9127601061, 9127601066, 9127601071, 9127601077, 9127601085, 9127601094, 9127601099, 9127601101, 9127601134, 9127601142, 9127601170, 9127601174, 9127601197, 9127601198, 9127601203, 9127601207, 9127601255, 9127601278, 9127601294, 9127601311, 9127601340, 9127601379, 9127601393, 9127601394, 9127601400, 9127601443, 9127601471, 9127601472, 9127601480, 9127601485, 9127601493, 9127601500, 9127601506, 9127601519, 9127601539, 9127601585, 9127601630, 9127601656, 9127601658, 9127601694, 9127601701, 9127601725, 9127601737, 9127601739, 9127601742, 9127601773, 9127601788, 9127601796, 9127601812, 9127601980, 9127601988, 9127602125, 9127602241, 9127602250, 9127602251, 9127602302, 9127602375, 9127602377, 9127602610, 9127602683, 9127602758, 9127602776, 9127602892, 9127602919, 9127602966, 9127602968, 9127602974, 9127602989, 9127602996, 9127602997, 9127603027, 9127603182, 9127603184, 9127603211, 9127603343, 9127603599, 9127603657, 9127603719, 9127603794, 9127604089, 9127604118, 9127604127, 9127604301, 9127604420, 9127604506, 9127604581, 9127604863, 9127604890, 9127604970, 9127604972, 9127604977, 9127604983, 9127605136, 9127605200, 9127605563, 9127605597, 9127605674, 9127605708, 9127606095, 9127606231, 9127606647, 9127606895, 9127607098, 9127607137, 9127608309, 9127608363, 9127608830, 9127609150, 9127609693, 9127609839, 9127609972, 9127610245, 9127610446, 9127610484, 9127610579, 9127610699, 9127610783, 9127610906, 9127611049, 9127611094, 9127611109, 9127611361, 9127611685, 9127611870, 9127612081, 9127612274, 9127612404, 9127612912, 9127612990, 9127613149, 9127613170, 9127613203, 9127613478, 9127613563, 9127613896, 9127614184, 9127614205, 9127614600, 9127614634, 9127615725, 9127616408, 9127616585, 9127616870, 9127617019, 9127617152, 9127617696, 9127617721, 9127617801, 9127617958, 9127618229, 9127618269, 9127618379, 9127618406, 9127618467, 9127618762, 9127618827, 9127618876, 9127619053, 9127619489, 9127619682, 9127619810, 9127619820, 9127619932, 9127619974, 9127620153, 9127620307, 9127620400, 9127620502, 9127620558, 9127620641, 9127620803, 9127620839, 9127622047, 9127623206, 9127623455, 9127623701, 9127626994, 9127627161, 9127627859, 9127629246, 9127630854, 9127630975, 9127631320, 9127631483, 9127634205, 9127634233, 9127634816, 9127636264, 9127636729, 9127637156, 9127637403, 9127638656, 9127639109, 9127639484, 9127639620, 9127642097, 9127642857, 9127645838, 9127646840, 9127647118, 9127700704, 9127700831, 9127703591, 9127703700, 9127704032, 9127705597, 9127705905, 9127705942, 9127708407, 9127709261, 9127714713, 9127715257, 9127716130, 9127717395, 9127717460, 9127719580, 9127752623, 9127752814, 9127753294, 9127753586, 9127754068, 9127754985, 9127755568, 9127757281, 9127757395, 9127757467, 9127757710, 9127760339, 9127760740, 9127760893, 9127761235, 9127761908, 9127762579, 9127765050, 9127765171, 9127765458, 9127768540, 9127768570, 9127774969, 9127783475, 9127784026, 9127784958, 9127785392, 9127785518, 9127785927, 9127786276, 9127786427, 9127786581, 9127788048, 9127788637, 9127788965, 9127789387, 9127789878, 9127791318, 9127791496, 9127791835, 9127791862, 9127791997, 9127792291, 9127792895, 9127794116, 9127794936, 9127795207, 9127795843, 9127796079, 9127796159, 9127796646, 9127796883, 9127796998, 9127797335, 9127797343, 9127797856, 9127797906, 9127797982, 9127901076, 9127901730, 9127903712, 9127903764, 9127904094, 9127904491, 9127906933, 9127906986, 9127907129, 9127920568, 9127930349, 9127930764, 9127931272, 9127931366, 9127931770, 9127933803, 9127934370, 9127934902, 9127935227, 9127935439, 9127935658, 9127936340, 9127937211, 9127937891, 9127938143, 9127938245, 9127938802, 9127940370, 9127940677, 9127942381, 9127942730, 9127944048, 9127944374, 9127945636, 9127946103, 9127946337, 9127946507, 9127946626, 9127946808, 9127946857, 9127946954, 9127947167, 9127947304, 9127947402, 9127947456, 9127947785, 9127947885, 9127947890, 9127947927, 9127948024, 9127948148, 9127948154, 9127948390, 9127948442, 9127948461, 9127948507, 9127948895, 9127948929, 9127948953, 9127948995, 9127949076, 9127949094, 9127949099, 9127949182, 9127949184, 9127949247, 9127949275, 9127949530, 9127950275, 9127950322, 9127951160, 9127951422, 9127952026, 9127952053, 9127952074, 9127952113, 9127952450, 9127952506, 9127953013, 9127953904, 9127954049, 9127954116, 9127954551, 9127954581, 9127954615, 9127954770, 9127954819, 9127954985, 9127955055, 9127955281, 9127955437, 9127955695, 9127955902, 9127955907, 9127956004, 9127956053, 9127956184, 9127956296, 9127956386, 9127956462, 9127956503, 9127956527, 9127956689, 9127956715, 9127956775, 9127956814, 9127956818, 9127956830, 9127956858, 9127956860, 9127956863, 9127956903, 9127956905, 9127956918, 9127956942, 9127956989, 9127957224, 9127957338, 9127957347, 9127957621, 9127957678, 9127957702, 9127957713, 9127957745, 9127957874, 9127957972, 9127958074, 9127958150, 9127958160, 9127958170, 9127958213, 9127958314, 9127958433, 9127958481, 9127958509, 9127958647, 9127959124, 9127959145, 9127959161, 9127959180, 9127959249, 9127959255, 9127959299, 9127959397, 9127959428, 9127959582, 9127960112, 9127960320, 9127960336, 9127960378, 9127960449, 9127960476, 9127960508, 9127960511, 9127960518, 9127960521, 9127960552, 9127960562, 9127960565, 9127960579, 9127960611, 9127960629, 9127960634, 9127960636, 9127960637, 9127960648, 9127960654, 9127960675, 9127960681, 9127960699, 9127960716, 9127960721, 9127960767, 9127960768, 9127960785, 9127960789, 9127960837, 9127960857, 9127960891, 9127960895, 9127960901, 9127960937, 9127960944, 9127960947, 9127961002, 9127961035, 9127961045, 9127961057, 9127961064, 9127961098, 9127961167, 9127961197, 9127961223, 9127961226, 9127961243, 9127961245, 9127961259, 9127961267, 9127961276, 9127961297, 9127961321, 9127961334, 9127961338, 9127961340, 9127961342, 9127961384, 9127961388, 9121119706, 9121119769, 9121119957, 9121120019, 9121121350, 9121121937, 9121122797, 9121122970, 9121123721, 9121124039, 9121125004, 9121125175, 9121125701, 9121125750, 9121126036, 9121127063, 9121127966, 9121128733, 9121129383, 9121129621, 9121130728, 9121131368, 9121131472, 9121132986, 9121133554, 9121134142, 9121134338, 9121135913, 9121136249, 9121136500, 9121137441, 9121138004, 9121138186, 9121138769, 9121138911, 9121139986, 9121140157, 9121142712, 9121142738, 9121142776, 9121143061, 9121143065, 9121143314, 9121144425, 9121144818, 9121145735, 9121147610, 9121147617, 9121148087, 9121148790, 9121149209, 9121149235, 9121149610, 9121150343, 9121150346, 9121150689, 9121151095, 9121151949, 9121152146, 9121153209, 9121156242, 9121156384, 9121156553, 9121156568, 9121156672, 9121157436, 9121157520, 9121157666, 9121157952, 9121158360, 9121158364, 9121158418, 9121158716, 9121158718, 9121160057, 9121161203, 9121161554, 9121162310, 9121162653, 9121163230, 9121163728, 9121166924, 9121168668, 9121169163, 9121169727, 9121173795, 9121176472, 9121177773, 9121180300, 9121180517, 9121180548, 9121182934, 9121182954, 9121183033, 9121183059, 9121183252, 9121184971, 9121185188, 9121185293, 9121186170, 9121191160, 9121191376, 9121192098, 9121192671, 9121192875, 9121194105, 9121194331, 9121194485, 9121194514, 9121195140, 9121196151, 9121196464, 9121196942, 9121198325, 9121198703, 9121198858, 9121199012, 9121199018, 9121199106, 9121199409, 9121200792, 9121200812, 9121201731, 9121203681, 9121204569, 9121204754, 9121206173, 9121206591, 9121206825, 9121209342, 9121209481, 9121209575, 9121210299, 9121210326, 9121210746, 9121211023, 9121211104, 9121212705, 9121214345, 9121215169, 9121216106, 9121216571, 9121216709, 9121216811, 9121217149, 9121217906, 9121218716, 9121218902, 9121219073, 9121220301, 9121220716, 9121221586, 9121222013, 9121222680, 9121223698, 9121224681, 9121225110, 9121225914, 9121226376, 9121226708, 9121226830, 9121226889, 9121227463, 9121228158, 9121229217, 9121229314, 9121229568, 9121229853, 9121230355, 9121230876, 9121231550, 9121231587, 9121231597, 9121231731, 9121231821, 9121234715, 9121235233, 9121235247, 9121235318, 9121235379, 9121235512, 9121235523, 9121236425, 9121237334, 9121237734, 9121237885, 9121238217, 9121239800, 9121239827, 9121241033, 9121242412, 9121243082, 9121243505, 9121243688, 9121244812, 9121244882, 9121244893, 9121245320, 9121245614, 9121246336, 9121246715, 9121246825, 9121247336, 9121247689, 9121247701, 9121247934, 9121247989, 9121248105, 9121248540, 9121249388, 9121249488, 9121250658, 9121251878, 9121252289, 9121252298, 9121253653, 9121253688, 9121254074, 9121254118, 9121254482, 9121255934, 9121256460, 9121257547, 9121259822, 9121260301, 9121260535, 9121260667, 9121260889, 9121261805, 9121262074, 9121263506, 9121263838, 9121264495, 9121266469, 9121266580, 9121268182, 9121268545, 9121268617, 9121268721, 9121268750, 9121271575, 9121271975, 9121272519, 9121272553, 9121272662, 9121273060, 9121273445, 9121274948, 9121274974, 9121274975, 9121275166, 9121276676, 9121279476, 9121280293, 9121300486, 9121301249, 9121301252, 9121301559, 9121301913, 9121302099, 9121302945, 9121303338, 9121303737, 9121303946, 9121304782, 9121305206, 9121305248, 9121305328, 9121305894, 9121306121, 9121306275, 9121307000, 9121307444, 9121308844, 9121320075, 9121321222, 9121321867, 9121323575, 9121324611, 9121325599, 9121326944, 9121326956, 9121327658, 9121327709, 9121328434, 9121328806, 9121329353, 9121329839, 9121331130, 9121331371, 9121331547, 9121332139, 9121332142, 9121332156, 9121332554, 9121332583, 9121333070, 9121333170, 9121333229, 9121333664, 9121334356, 9121334582, 9121341047, 9121341260, 9121342165, 9121342546, 9121342838, 9121343448, 9121344654, 9121344778, 9121344797, 9121345142, 9121345182, 9121345531, 9121346153, 9121346964, 9121347622, 9121347785, 9121348004, 9121348361, 9121349093, 9121349248, 9121349668, 9121350445, 9121350871, 9121351006, 9121351352, 9121351367, 9121351817, 9121352589, 9121352848, 9121352849, 9121353176, 9121354099, 9121354611, 9121354889, 9121355012, 9121355067, 9121355129, 9121355176, 9121355292, 9121355339, 9121355695, 9121360014, 9121360138, 9121360480, 9121361128, 9121361354, 9121361433, 9121362416, 9121363442, 9121364756, 9121364841, 9121365423, 9121365699, 9121365727, 9121366414, 9121367775, 9121370034, 9121370132, 9121370373, 9121371051, 9121371951, 9121371993, 9121372216, 9121373157, 9121373634, 9121374078, 9121374739, 9121374820, 9121380371, 9121381145, 9121381154, 9121381167, 9121381173, 9121381264, 9121381351, 9121382846, 9121383158, 9121383159, 9121383168, 9121383316, 9121383511, 9121384572, 9121384959, 9121385180, 9121386857, 9121387200, 9121388965, 9121389093, 9121389269, 9121389744, 9121389792, 9121390413, 9121390990, 9121391217, 9121391315, 9121391737, 9121391772, 9121391785, 9121392545, 9121392584, 9121392771, 9121392880, 9121393155, 9121394202, 9121394598, 9121395345, 9121395924, 9121396993, 9121397089, 9121397334, 9121398144, 9121399238, 9121399855, 9121399918, 9121402515, 9121402673, 9121404300, 9121404312, 9121404327, 9121404374, 9121404486, 9121404727, 9121405123, 9121405166, 9121405178, 9121405323, 9121405714, 9121406833, 9121409174, 9121431582, 9121431586, 9121431747, 9121431812, 9121431846, 9121431865, 9121431879, 9121431913, 9121432102, 9121432111, 9121432176, 9121432351, 9121432660, 9121432701, 9121432743, 9121433101, 9121433675, 9121433771, 9121434413, 9121435360, 9121435503, 9121435669, 9121437298, 9121437498, 9121438135, 9121440162, 9121441170, 9121441491, 9121442421, 9121442944, 9121443049, 9121443074, 9121443086, 9121443179, 9121443247, 9121443262, 9121443806, 9121444172, 9121444194, 9121444199, 9121444200, 9121444242, 9121444358, 9121444376, 9121444602, 9121445466, 9121445489, 9121445729, 9121445853, 9121445921, 9121446883, 9121447592, 9121448436, 9121450251, 9121451113, 9121451342, 9121452848, 9121453348, 9121454205, 9121454305, 9121454325, 9121454783, 9121455217, 9121455266, 9121455283, 9121455370, 9121455392, 9121455406, 9121455512, 9121455524, 9121455547, 9121456356, 9121456407, 9121456658, 9121456773, 9121457641, 9121458257, 9121458277, 9121458512, 9121459126, 9121460528, 9121460643, 9121460649, 9121460761, 9121460841, 9121462441, 9121462685, 9121463432, 9121463590, 9121463954, 9121464264, 9121464588, 9121466378, 9121466430, 9121467225, 9121467294, 9121467437, 9121467465, 9121467466, 9121467537, 9121467546, 9121467560, 9121467806, 9121467859, 9121467995, 9121468187, 9121468341, 9121468539, 9121468540, 9121469152, 9121469472, 9121469681, 9121470647, 9121471002, 9121472236, 9121472451, 9121472721, 9121473400, 9121473429, 9121473856, 9121474125, 9121474167, 9121480110, 9121480379, 9121480688, 9121481419, 9121481422, 9121482685, 9121483601, 9121484109, 9121486038, 9121486283, 9121487216, 9121487221, 9121487320, 9121487336, 9121487822, 9121488808, 9121489027, 9121489089, 9121490257, 9121491161, 9121491410, 9121492589, 9121493126, 9121493129, 9121493549, 9121493642, 9121493978, 9121496211, 9121497135, 9121497153, 9121497619, 9121497867, 9121498019, 9121498058, 9121498863, 9121499086, 9121499133, 9121499145, 9121499168, 9121499212, 9121500305, 9121500629, 9121502383, 9121502922, 9121503065, 9121504479, 9121504515, 9121505664, 9121506166, 9121506799, 9121506872, 9121506965, 9121507085, 9121507139, 9121507206, 9121507247, 9121507631, 9121508654, 9121508863, 9121509354, 9121540613, 9121540715, 9121540940, 9121541184, 9121541335, 9121542029, 9121542060, 9121542076, 9121542085, 9121542119, 9121542490, 9121542637, 9121542751, 9121542834, 9121543529, 9121543751, 9121544320, 9121544469, 9121545123, 9121545698, 9121545862, 9121545953, 9121546339, 9121547534, 9121548315, 9121548816, 9121548841, 9121548861, 9121549590, 9121549610, 9121549910, 9121549972, 9121570125, 9121571409, 9121571458, 9121572766, 9121572897, 9121573077, 9121574855, 9121574929, 9121575704, 9121575827, 9121576297, 9121577705, 9121577853, 9121578840, 9121578925, 9121578949, 9121579092, 9121579206, 9121580355, 9121581088, 9121582216, 9121582522, 9121582621, 9121583297, 9121583669, 9121590041, 9121593672, 9121594127, 9121594587, 9121595302, 9121595674, 9121595902, 9121596075, 9121596669, 9121596773, 9121596796, 9121596838, 9121597194, 9121598777, 9121598812, 9121599081, 9121610243, 9121620329, 9121676378, 9121710476, 9121710901, 9121711956, 9121712820, 9121713304, 9121713495, 9121713656, 9121714855, 9121714862, 9121714880, 9121714912, 9121714963, 9121715016, 9121715075, 9121715080, 9121715956, 9121716430, 9121717468, 9121717806, 9121717915, 9121718019, 9121718533, 9121718635, 9121719554, 9121719576, 9121720296, 9121720380, 9121720819, 9121720922, 9121721897, 9121722027, 9121722851, 9121723393, 9121723877, 9121724887, 9121725800, 9121726237, 9121726729, 9121726845, 9121726900, 9121726902, 9121727056, 9121728034, 9121728069, 9121728082, 9121728190, 9121728221, 9121728431, 9121728577, 9121729266, 9121750255, 9121750344, 9121751097, 9121751143, 9121751556, 9121754843, 9121755597, 9121755913, 9121756401, 9121757462, 9121757746, 9121758493, 9121759005, 9121759194, 9121759212, 9121759239, 9121759296, 9121759320, 9121759329, 9121759422, 9121759497, 9121760521, 9121760728, 9121760899, 9121761019, 9121761069, 9121761350, 9121761380, 9121761831, 9121762040, 9121762689, 9121763016, 9121763147, 9121763425, 9121764138, 9121764691, 9121764710, 9121764832, 9121765421, 9121766117, 9121766603, 9121767019, 9121767136, 9121767294, 9121767493, 9121767506, 9121767718, 9121768289, 9121768512, 9121768620, 9121768671, 9121768956, 9121769376, 9121769533, 9121771019, 9121771480, 9121771723, 9121771738, 9121771765, 9121772599, 9121772812, 9121773219, 9121774404, 9121775443, 9121776097, 9121777907, 9121777950, 9121779054, 9121780248, 9121780520, 9121780987, 9121781134, 9121783271, 9121783454, 9121783511, 9121783623, 9121783633, 9121783722, 9121783803, 9121783873, 9121784247, 9121784444, 9121784668, 9121785292, 9121785591, 9121785694, 9121786005, 9121786388, 9121786481, 9121786516, 9121786944, 9121787389, 9121787411, 9121787935, 9121788150, 9121788307, 9121788358, 9121788488, 9121788536, 9121788644, 9121788780, 9121788955, 9121789020, 9121789094, 9121789414, 9121789475, 9121790658, 9121790713, 9121791305, 9121791596, 9121792770, 9121795581, 9121796072, 9121796202, 9121796260, 9121796881, 9121796929, 9121797610, 9125362387, 9125362390, 9125362406, 9125362449, 9125362517, 9125362730, 9125362878, 9125362904, 9125362944, 9125362963, 9125363253, 9125363271, 9125363643, 9125363697, 9125363829, 9125363963, 9125364077, 9125364176, 9125365216, 9125365861, 9125365947, 9125366254, 9125366360, 9125366443, 9125366454, 9125366870, 9125367013, 9125367269, 9125367340, 9125367584, 9125367894, 9125368329, 9125368498, 9125368535, 9125368694, 9125369027, 9125369052, 9125369137, 9125369150, 9125369372, 9125369538, 9125369582, 9125369878, 9125369953, 9125370163, 9125370179, 9125370209, 9125370212, 9125370257, 9125370299, 9125370385, 9125370410, 9125370438, 9125370551, 9125370557, 9125370587, 9125370907, 9125370955, 9125371025, 9125371315, 9125371467, 9125371534, 9125371632, 9125371769, 9125372170, 9125372747, 9125372812, 9125373071, 9125373152, 9125373551, 9125373842, 9125373954, 9125374086, 9125374599, 9125374724, 9125374729, 9125374820, 9125374970, 9125375391, 9125375607, 9125375641, 9125376445, 9125377177, 9125377188, 9125377341, 9125377901, 9125378015, 9125378436, 9125378679, 9125378901, 9125379097, 9125379129, 9125379301, 9125381230, 9125381751, 9125382916, 9125383447, 9125383584, 9125384926, 9125385631, 9125387466, 9125388134, 9125388201, 9125388445, 9125388857, 9125391061, 9125391192, 9125393269, 9125393564, 9125393875, 9125394641, 9125395240, 9125395387, 9125395425, 9125395426, 9125395524, 9125399621, 9125400275, 9125400980, 9125401264, 9125401315, 9125401753, 9125403166, 9125405242, 9125405374, 9125405585, 9125405621, 9125405629, 9125406085, 9125406632, 9125406654, 9125407858, 9125408023, 9125408770, 9125408779, 9125409763, 9125431200, 9125431385, 9125431700, 9125431878, 9125432292, 9125432810, 9125433039, 9125433566, 9125434166, 9125435030, 9125435149, 9125435421, 9125435505, 9125435988, 9125437402, 9125438711, 9125438716, 9125441235, 9125441244, 9125441622, 9125442411, 9125442451, 9125442766, 9125444039, 9125446913, 9125447236, 9125447975, 9125449785, 9125450611, 9125450847, 9125451709, 9125453675, 9125454487, 9125454984, 9125456108, 9125456567, 9125458289, 9125458591, 9125462595, 9125463044, 9125463207, 9125463270, 9125466424, 9125467082, 9125467465, 9125469445, 9125469535, 9125472295, 9125472492, 9125472678, 9125473249, 9125474556, 9125475863, 9125476320, 9125479967, 9125480402, 9125481641, 9125481981, 9125485034, 9125486739, 9125487159, 9125493069, 9125494540, 9125494833, 9125495818, 9125496252, 9125496541, 9125496756, 9125496902, 9125498698, 9125499296, 9125499354, 9125499357, 9125499571, 9125499914, 9125499980, 9125500121, 9125500135, 9125500601, 9125501359, 9125502452, 9125502516, 9125502865, 9125503681, 9125503729, 9125504614, 9125504833, 9125505143, 9125505307, 9125505919, 9125506356, 9125506783, 9125506814, 9125507370, 9125508990, 9125509870, 9125540034, 9125540155, 9125540431, 9125541572, 9125541649, 9125541969, 9125542587, 9125542889, 9125543515, 9125544236, 9125544818, 9125545636, 9125545721, 9125545747, 9125545752, 9125545768, 9125545998, 9125546096, 9125546461, 9125546745, 9125547110, 9125547153, 9125547679, 9125547729, 9125548078, 9125548339, 9125548514, 9125548593, 9125548747, 9125549668, 9125549836, 9125549848, 9125549861, 9125549930, 9125570059, 9125570106, 9125570138, 9125570206, 9125570210, 9125570268, 9125570317, 9125570386, 9123957866, 9123959043, 9123962501, 9123963267, 9123963757, 9123963879, 9123963921, 9123965801, 9123965883, 9123966366, 9123967949, 9123968016, 9123968329, 9123968401, 9123968422, 9123968636, 9123969199, 9123969304, 9123969701, 9123969734, 9123970372, 9123970514, 9123970561, 9123970740, 9123971500, 9123971501, 9123971642, 9123972057, 9123972151, 9123972390, 9123972498, 9123972538, 9123972640, 9123972934, 9123972960, 9123973431, 9123973441, 9123973662, 9123973669, 9123973675, 9123973762, 9123973842, 9123973960, 9123974336, 9123974345, 9123974346, 9123974360, 9123974464, 9123974512, 9123974614, 9123974690, 9123974761, 9123974792, 9123974794, 9123974800, 9123974807, 9123974826, 9123974831, 9123974861, 9123975286, 9123975396, 9123975513, 9123975531, 9123975532, 9123975543, 9123975580, 9123976084, 9123976344, 9123976447, 9123976455, 9123976562, 9123976569, 9123976967, 9123977389, 9123977565, 9123977590, 9123978133, 9123978148, 9123978157, 9123978305, 9123978507, 9123978962, 9123979103, 9123980668, 9123981686, 9123982268, 9123982823, 9123983202, 9123983205, 9123983379, 9123983810, 9123983830, 9123986221, 9123988220, 9123988871, 9123988996, 9123990282, 9123991267, 9123991446, 9123991621, 9123991875, 9123992078, 9123992723, 9123992731, 9123992857, 9123993164, 9123993691, 9123993756, 9123993762, 9123994812, 9123995198, 9123995626, 9123995785, 9123996361, 9123996742, 9123997152, 9123997210, 9123997250, 9124000596, 9124000805, 9124000810, 9124001075, 9124010189, 9124010423, 9124010649, 9124010975, 9124018476, 9124022709, 9124023015, 9124023245, 9124023532, 9124023740, 9124024789, 9124024934, 9124025404, 9124025416, 9124025501, 9124026374, 9124026437, 9124026531, 9124026534, 9124026535, 9124026538, 9124026625, 9124026678, 9124026740, 9124026743, 9124026835, 9124026853, 9124026878, 9124026890, 9124026897, 9124026929, 9124026959, 9124026964, 9124026977, 9124027010, 9124027019, 9124027028, 9124027052, 9124027066, 9124027068, 9124027092, 9124027103, 9124027112, 9124027177, 9124027182, 9124027204, 9124027214, 9124027226, 9124027259, 9124027277, 9124027280, 9124027331, 9124027419, 9124027725, 9124027921, 9124027956, 9124028363, 9124029144, 9124029526, 9124031012, 9124031839, 9124033194, 9124033423, 9124033903, 9124033920, 9124034253, 9124036802, 9124038249, 9124038265, 9124038470, 9124038562, 9124038962, 9124040334, 9124040838, 9124042132, 9124044659, 9124046953, 9124054403, 9124057003, 9124057410, 9124058270, 9124059004, 9124062219, 9124062968, 9124063886, 9124063887, 9124065977, 9124066278, 9124066316, 9124067609, 9124068239, 9124069145, 9124069600, 9124071091, 9124071527, 9124072040, 9124072189, 9124072427, 9124072946, 9124072985, 9124073049, 9124073182, 9124073215, 9124073316, 9124073891, 9124074263, 9124074427, 9124074482, 9124074495, 9124074563, 9124074575, 9124074799, 9124074840, 9124074842, 9124074941, 9124074970, 9124074989, 9124074990, 9124075001, 9124075059, 9124075087, 9124075118, 9124075185, 9124075266, 9124075306, 9124075311, 9124075313, 9124075314, 9124075315, 9124075318, 9124075320, 9124075336, 9124075356, 9124075370, 9124075379, 9124075426, 9124075427, 9124075464, 9124075468, 9124075473, 9124075486, 9124075497, 9124075518, 9124075578, 9124075604, 9124075609, 9124075661, 9124075676, 9124075679, 9124075682, 9124075710, 9124075718, 9124075732, 9124075747, 9124075761, 9124075784, 9124075819, 9124075821, 9124075839, 9124075852, 9124075883, 9124075897, 9124075933, 9124075960, 9124075963, 9124075993, 9124076030, 9124076053, 9124076064, 9124076186, 9124076381, 9124076388, 9124076518, 9124076647, 9124076864, 9124077089, 9124077405, 9124077568, 9124077622, 9124077723, 9124077854, 9124077860, 9124078411, 9124078683, 9124078959, 9124079479, 9124079484, 9124079579, 9124079647, 9124080381, 9124081208, 9124081288, 9124081303, 9124081372, 9124081713, 9124082347, 9124082502, 9124082573, 9124083023, 9124083640, 9124083681, 9124084535, 9124084565, 9124084615, 9124084637, 9124084920, 9124084970, 9124086761, 9124087061, 9124088330, 9124088373, 9124088901, 9124089691, 9124089766, 9124089882, 9124090541, 9124091121, 9124091625, 9124091734, 9124092007, 9124092814, 9124096053, 9124096441, 9124096490, 9124096653, 9124097913, 9124099045, 9124099086, 9124099181, 9124099185, 9124099201, 9124099422, 9124099729, 9124100198, 9124101044, 9124101497, 9124101530, 9124102729, 9124103295, 9124103924, 9124104026, 9124104200, 9124105734, 9124106509, 9124108334, 9124108695, 9124108750, 9124109368, 9124109884, 9124110365, 9124111468, 9124111911, 9124112542, 9124115031, 9124117290, 9124119023, 9124119445, 9124120720, 9124121086, 9124123041, 9124124906, 9124127564, 9124127914, 9124131486, 9124132383, 9124136136, 9124137606, 9124138052, 9124139379, 9124140962, 9124141056, 9124141061, 9124141159, 9124144778, 9124148286, 9124150892, 9124151639, 9124153090, 9124155585, 9124163495, 9124167832, 9124169886, 9124174047, 9124175435, 9124177942, 9124177984, 9124180424, 9124184532, 9124186414, 9124187078, 9124187360, 9124189395, 9124192988, 9124193151, 9124193380, 9124193714, 9124194981, 9124195940, 9124199621, 9124204256, 9124207006, 9124207275, 9124207402, 9124211012, 9124213394, 9124214135, 9124214150, 9124214161, 9124214168, 9124214191, 9124215725, 9124219044, 9124219317, 9124219704, 9124221025, 9124221381, 9124222117, 9124222890, 9124223205, 9124223305, 9124223644, 9124223768, 9124223937, 9124224976, 9124226581, 9124229738, 9124231953, 9124232395, 9124235330, 9124235607, 9124240906, 9124241298, 9124241631, 9124241890, 9124241995, 9124242179, 9124242454, 9124242558, 9124242987, 9124243865, 9124244265, 9124245263, 9124245877, 9124246412, 9124246915, 9124247033, 9124248100, 9124248774, 9124251431, 9124251697, 9124252137, 9124253727, 9124255144, 9124255741, 9124261266, 9124261846, 9124262058, 9124262543, 9124262756, 9124262939, 9124263516, 9124265916, 9124265918, 9124266342, 9124266515, 9124266558, 9124266898, 9124267513, 9124267527, 9124269029, 9124269095, 9124269189, 9124269451, 9124269542, 9124269614, 9124270128, 9124271677, 9124271679, 9124271714, 9124271932, 9124272421, 9124272537, 9124272725, 9124272917, 9124272967, 9124273505, 9124273708, 9124273889, 9124274070, 9124274092, 9124274191, 9124274237, 9124274260, 9124274481, 9124274651, 9124275430, 9124275597, 9124275774, 9124276269, 9124276396, 9124276594, 9124276643, 9124276645, 9124276673, 9124277140, 9124277155, 9124277159, 9124277215, 9124277307, 9124277448, 9124277450, 9124277477, 9124277498, 9124277556, 9124277573, 9124277583, 9124277603, 9124277872, 9124277900, 9124277990, 9124278019, 9124278106, 9124278124, 9124278144, 9124278156, 9124278166, 9124278169, 9124278184, 9124278212, 9124278268, 9124278271, 9124278285, 9124278304, 9124278358, 9124278385, 9124278410, 9124278438, 9124278449, 9124278472, 9124278480, 9124278499, 9124278502, 9124278541, 9124278548, 9124278581, 9124278601, 9124278611, 9124278613, 9124278625, 9124278679, 9124278718, 9124278782, 9124278804, 9124278859, 9124278904, 9124278923, 9124278926, 9124278938, 9124278944, 9124278945, 9124278956, 9124278958, 9124278978, 9124278993, 9124279007, 9124279013, 9124279055, 9124279075, 9124279107, 9124279146, 9124279151, 9124279180, 9124279183, 9124279197, 9124279227, 9124279230, 9124279234, 9124279238, 9124279243, 9124279253, 9124279263, 9124279267, 9124279296, 9124279299, 9124279301, 9124279318, 9124279346, 9124279347, 9124279352, 9124279365, 9124279374, 9124279381, 9124279385, 9124279434, 9124279437, 9124279470, 9124279484, 9124279652, 9124279671, 9124279741, 9124279760, 9124279817, 9124279821, 9124279862, 9124290733, 9124300079, 9124300154, 9124300156, 9124300366, 9124300410, 9124300453, 9124300470, 9124300603, 9124301192, 9124301685, 9124302048, 9124302056, 9124302072, 9124302191, 9124302384, 9124303190, 9124303281, 9124303293, 9124304125, 9124304415, 9124304439, 9124304551, 9124304810, 9124304829, 9124304830, 9124304946, 9124304998, 9124305032, 9124305048, 9124305076, 9124305141, 9124305545, 9124305796, 9124305844, 9124305967, 9124305968, 9124305983, 9124307078, 9124308478, 9124308684, 9124309476, 9124309500, 9124330314, 9124332891, 9124336063, 9124336428, 9124336679, 9124337441, 9124339224, 9124339640, 9124340250, 9124341344, 9124342272, 9124342466, 9124343057, 9124343703, 9124343950, 9124344891, 9124346103, 9124346581, 9124348311, 9124350495, 9124352191, 9124352877, 9124354407, 9124355708, 9124356135, 9124356550, 9124358865, 9124358929, 9124360381, 9124360951, 9124361648, 9124361740, 9124362300, 9124363273, 9124364036, 9124364873, 9124365147, 9124365661, 9124367743, 9124368446, 9124368934, 9124370516, 9124371637, 9124372797, 9124374516, 9124374569, 9124375705, 9124377971, 9124382058, 9124383717, 9124385623, 9124387184, 9124387940, 9124388980, 9124389925, 9124390438, 9124392012, 9124393626, 9124395289, 9124395492, 9124396384, 9124396695, 9124398356, 9124400391, 9124401782, 9124402853, 9124404854, 9124405169, 9124405495, 9124407845, 9124407972, 9124408009, 9124408091, 9124408662, 9124408721, 9124409097, 9124409217, 9124430305, 9124430786, 9124432182, 9124432536, 9124432823, 9124432842, 9124433224, 9124433354, 9124433389, 9124433997, 9124434080, 9124434495, 9124434640, 9124435578, 9124436567, 9124437339, 9124437537, 9124437902, 9124438246, 9124438579, 9124440596, 9124440682, 9124440895, 9124440921, 9124441049, 9124441461, 9124441853, 9124441906, 9124441913, 9124442725, 9124442819, 9124443043, 9124443508, 9124443587, 9124443644, 9124443647, 9124443732, 9124443746, 9124443756, 9124443769, 9124443788, 9124443815, 9124443876, 9124443959, 9124444064, 9124444083, 9124444101, 9124444126, 9124444280, 9124444375, 9124444507, 9124444582, 9124444593, 9124444621, 9124444794, 9124444826, 9124444860, 9124444950, 9124444975, 9124445091, 9124445099, 9124445201, 9124445233, 9124445235, 9124445250, 9124445259, 9124445268, 9124445272, 9124445287, 9124445332, 9124445446, 9124445476, 9124445485, 9124445502, 9124445516, 9124445567, 9124445574, 9124445606, 9124445646, 9124445660, 9124445663, 9124445671, 9124445690, 9124445695, 9124445696, 9124445709, 9124445720, 9124445731, 9124445746, 9124445753, 9124445771, 9124445781, 9124445785, 9124445791, 9124445792, 9124445794, 9124445814, 9124445836, 9124445838, 9124445854, 9124445917, 9124445947, 9124445953, 9124445976, 9124445986, 9124446021, 9124446053, 9124446084, 9124446106, 9124446127, 9124446139, 9124446149, 9124446151, 9124446153, 9124446159, 9124446170, 9124446194, 9124446197, 9124446210, 9124446223, 9124446268, 9124446279, 9124446282, 9124446302, 9124446316, 9124446322, 9124446334, 9124446335, 9124446337, 9124446351, 9124446357, 9124446373, 9124446386, 9124446419, 9124446431, 9124446462, 9124446468, 9124446526, 9124446594, 9124446599, 9124446880, 9124446923, 9124447035, 9124447069, 9124447323, 9124447433, 9124447524, 9124447582, 9124447712, 9124447872, 9124448773, 9124449096, 9124449532, 9124449553, 9124449568, 9124449910, 9124450069, 9124450194, 9124450208, 9124450315, 9124450353, 9124450600, 9124451022, 9124451065, 9124451083, 9124451254, 9124451594, 9124452074, 9124452230, 9124452367, 9124452549, 9124452648, 9124452783, 9124452915, 9124452931, 9124453460, 9124453664, 9124453694, 9124454652, 9124455020, 9124456191, 9124456394, 9124456705, 9124457454, 9124457826, 9124459633, 9124459786, 9124460393, 9124460753, 9124460759, 9124461052, 9124462057, 9124462338, 9124462514, 9124463924, 9124465487, 9124471140, 9124471319, 9124472193, 9124474872, 9124476758, 9124477719, 9124480156, 9124481833, 9124481897, 9124482066, 9124484007, 9124484123, 9124486099, 9124486736, 9124487912, 9124489043, 9124489687, 9124491044, 9124493827, 9124495021, 9124495720, 9124498066, 9124500836, 9124501014, 9124501924, 9124502621, 9124502889, 9124505379, 9124507422, 9124541038, 9124542514, 9124543141, 9124543204, 9124543879, 9124544771, 9124544870, 9124545853, 9124545872, 9124546089, 9124547173, 9124547732, 9124549673, 9124570268, 9124571044, 9124571274, 9124571466, 9124571648, 9124574507, 9124574810, 9124577398, 9124579924, 9124581418, 9124586647, 9124586726, 9124586902, 9124587708, 9124588038, 9124588145, 9124588648, 9124588776, 9124589959, 9124590604, 9124590989, 9124591022, 9124591968, 9124592049, 9124592313, 9124593704, 9124593831, 9124594501, 9124594929, 9124595006, 9124595355, 9124596205, 9124596879, 9124597851, 9124598102, 9124599060, 9124599622, 9124599668, 9124599818, 9124600218, 9124609233, 9124615193, 9124655926, 9124661089, 9124667122, 9124685977, 9124700079, 9124700130, 9124700218, 9124700219, 9124700221, 9124700227, 9124700237, 9124700352, 9124700411, 9124701271, 9124701628, 9124702359, 9124702819, 9124702824, 9124702825, 9124702962, 9124703013, 9124703028, 9124703228, 9124703274, 9124703285, 9124703306, 9124703346, 9124703424, 9124703590, 9124703622, 9124703647, 9124703679, 9124703905, 9124703926, 9124703941, 9124703997, 9124704209, 9124704297, 9124704328, 9124704552, 9124704618, 9124704619, 9124704632, 9124704640, 9124704663, 9124704672, 9124704688, 9124704810, 9124704816, 9124704821, 9124704833, 9124704834, 9124704877, 9124704904, 9124704905, 9124704936, 9124704938, 9124704955, 9124704959, 9124704972, 9124704976, 9124704977, 9124704989, 9124704992, 9124705002, 9124705022, 9124705037, 9124705047, 9124705062, 9124705073, 9124705138, 9124705155, 9124705177, 9124705238, 9124705260, 9124705270, 9124705272, 9124705282, 9124705285, 9124705345, 9124705464, 9124705478, 9124705501, 9124705535, 9124705540, 9124705569, 9124705578, 9124705591, 9124705627, 9124705632, 9124705694, 9124705696, 9124705714, 9124705722, 9124705733, 9124705748, 9124705751, 9124705759, 9124705795, 9124705805, 9124705808, 9124705843, 9124705901, 9124705918, 9124705932, 9124705939, 9124705964, 9124705969, 9124705970, 9124705982, 9124705987, 9124706011, 9124706136, 9124706145, 9124706253, 9124706271, 9124706273, 9124706390, 9124706441, 9124706447, 9124706495, 9124706561, 9124706722, 9124706754, 9124706762, 9124707031, 9124707190, 9124707191, 9124707250, 9124707289, 9124707367, 9124707433, 9124707441, 9124708463, 9124708846, 9124709370, 9124709540, 9124709617, 9124709941, 9124709986, 9124710300, 9124711522, 9124711552, 9124711739, 9124711740, 9124711751, 9124711789, 9124711942, 9124711945, 9124712218, 9124712248, 9124712272, 9124712292, 9124712329, 9124712440, 9124712858, 9124712900, 9124712902, 9124712930, 9124713015, 9124713220, 9124713256, 9124713276, 9124715031, 9124715967, 9124716316, 9124717037, 9124717382, 9124717414, 9124718159, 9124718196, 9124718459, 9124718524, 9124719446, 9124720185, 9124720636, 9124721950, 9124721985, 9124722056, 9124722114, 9124722378, 9124723172, 9124723474, 9124724032, 9124725647, 9124728240, 9124750490, 9124750636, 9124750987, 9124751161, 9124751384, 9124751693, 9124751736, 9124751885, 9124753573, 9124754637, 9124754723, 9124755091, 9124755880, 9124756891, 9124757681, 9124757820, 9124759439, 9124761782, 9124764088, 9124764368, 9124764621, 9124764724, 9124765168, 9124765930, 9124767002, 9124767378, 9124767468, 9124767950, 9124768413, 9124769028, 9124770509, 9124770782, 9124770827, 9124771071, 9124772028, 9124772419, 9124773324, 9124774509, 9124774954, 9124775190, 9124775228, 9124775260, 9124775383, 9124777663, 9124779750, 9124783203, 9124783692, 9124784179, 9124787307, 9124787994, 9124795672, 9124801365, 9124801643, 9124803521, 9124803874, 9124805360, 9124806346, 9124806526, 9124807291, 9124807669, 9124808652, 9124830942, 9124833656, 9124834166, 9124835440, 9124837504, 9124837839, 9124839584, 9124840378, 9124840789, 9124841619, 9124842481, 9124842606, 9124842716, 9124845900, 9124847674, 9124848173, 9124848891, 9124850266, 9124850353, 9124850584, 9124851140, 9124852162, 9124852769, 9124852809, 9124853500, 9124853580, 9124853647, 9124854258, 9124854529, 9124854542, 9124854563, 9124854808, 9124854814, 9124854946, 9124855235, 9124855238, 9124855386, 9124855900, 9124856706, 9124857152, 9124857321, 9124857461, 9124857500, 9124857665, 9124857739, 9124857748, 9124857815, 9124857852, 9124857941, 9124857955, 9124857974, 9124857980, 9124858060, 9124858209, 9124858310, 9124858712, 9124858739, 9124858750, 9124858776, 9124858862, 9124859082, 9124859124, 9124859187, 9124859218, 9124859224, 9124859225, 9124859258, 9124859279, 9124859327, 9124859328, 9124859361, 9124859400, 9124859410, 9124859412, 9124859420, 9124859424, 9124859433, 9124859447, 9124859491, 9124859547, 9124859551, 9124859578, 9124859606, 9124859650, 9124859691, 9124859702, 9124859719, 9124859723, 9124859764, 9124859765, 9124859791, 9124859809, 9124859837, 9124859866, 9124859931, 9124859932, 9124859941, 9124859980, 9124860035, 9124860036, 9124860047, 9124860064, 9124860074, 9124860083, 9124860106, 9124860140, 9124860173, 9124860174, 9124860188, 9124860239, 9124860249, 9124860261, 9124860282, 9124860286, 9124860292, 9124860293, 9124860301, 9124860347, 9124860363, 9124860384, 9124860395, 9124860426, 9124860439, 9124860479, 9124860497, 9124860614, 9124860664, 9124860697, 9124860774, 9124860837, 9124860930, 9124860969, 9124860980, 9124861257, 9124861291, 9124861401, 9124861412, 9124861543, 9124861554, 9124861563, 9124861697, 9124861920, 9124861956, 9124861971, 9124862528, 9124863115, 9124863173, 9124863308, 9124863392, 9124863529, 9124863548, 9124863563, 9124863629, 9124863780, 9124863781, 9124863799, 9124863825, 9124863868, 9124863906, 9124863918, 9124863966, 9124864052, 9124864072, 9124864130, 9124864580, 9124864606, 9124864610, 9124864851, 9124864958, 9124865007, 9124865201, 9124865817, 9124866144, 9124866192, 9124866270, 9124866346, 9124866694, 9124867004, 9124867116, 9124867206, 9124867243, 9124867512, 9124867854, 9124869307, 9124869806, 9124871217, 9124871380, 9124871696, 9124871989, 9124872457, 9124872589, 9124874302, 9124874484, 9124874694, 9124874804, 9124875024, 9124875783, 9124876587, 9124876796, 9124878916, 9124880534, 9124882864, 9124883901, 9124884767, 9124884978, 9124885743, 9124887912, 9124887953, 9124889181, 9124889560, 9124890750, 9124891544, 9124891665, 9124892128, 9124896927, 9124896941, 9124897348, 9124897950, 9124898060, 9124898529, 9124900133, 9124900142, 9124901886, 9124901982, 9124903441, 9124903455, 9124903842, 9124904829, 9124904872, 9124905153, 9124905907, 9124906861, 9124907104, 9124907383, 9124907408, 9124907621, 9124907918, 9124909726, 9124909805, 9124909863, 9124910589, 9124914117, 9124938853, 9124945914, 9124945919, 9124947124, 9124947486, 9124950236, 9124952858, 9124954287, 9124961087, 9124968193, 9124969225, 9124970315, 9124970617, 9124970760, 9124970998, 9124971909, 9124972661, 9124973760, 9124974246, 9124974800, 9124975413, 9124975920, 9124976253, 9124976403, 9124976619, 9124976637, 9124976863, 9124977695, 9124978679, 9124978865, 9124979272, 9124979756, 9124980604, 9124980755, 9124981402, 9124982427, 9124983509, 9124984145, 9124984820, 9124984830, 9124985696, 9124985828, 9124986164, 9124986199, 9124986920, 9124987847, 9124988224, 9124988588, 9124990112, 9124990295, 9124990421, 9124990482, 9124992329, 9124992344, 9124993325, 9124993450, 9124993759, 9125000117, 9125000566, 9125001501, 9125001984, 9125002457, 9125002867, 9125002957, 9125003454, 9125004034, 9125004178, 9125004423, 9125004535, 9125004574, 9125004827, 9125004852, 9125006205, 9125006874, 9125009116, 9125010596, 9125011284, 9125012002, 9125012990, 9125013043, 9125013046, 9125015175, 9125017400, 9125019265, 9125023720, 9125026815, 9125027106, 9125028280, 9125029315, 9125030509, 9125031023, 9125032373, 9125032584, 9125035602, 9125035777, 9125036634, 9125037408, 9125037838, 9125038354, 9125038663, 9125040720, 9125040806, 9125042008, 9125042212, 9125042886, 9125043117, 9125046866, 9125047601, 9125047772, 9125048218, 9125048807, 9125049714, 9125050301, 9125050490, 9125050950, 9125051136, 9125060082, 9125060528, 9125060816, 9125060873, 9125061187, 9125062922, 9125062935, 9125063062, 9125063550, 9125063897, 9125064159, 9125064689, 9125065147, 9125065385, 9125065780, 9125066079, 9125066093, 9125066317, 9125066614, 9125066710, 9125066720, 9125067226, 9125067363, 9125067410, 9125067489, 9125067562, 9125067623, 9125067638, 9125067714, 9125067756, 9125068055, 9125068103, 9125068169, 9125068233, 9125068331, 9125068557, 9125068561, 9125068842, 9125068848, 9125068868, 9125069025, 9125069083, 9125069183, 9125069202, 9125069268, 9125069313, 9125069326, 9125069459, 9125069463, 9125069468, 9125069530, 9125069575, 9125069846, 9125069860, 9125069878, 9125069886, 9125069930, 9125069980, 9125069987, 9125070017, 9125070019, 9125070035, 9125070061, 9125070103, 9125070111, 9125070115, 9125070119, 9125070124, 9125070126, 9125070173, 9125070196, 9125070206, 9125070276, 9125070280, 9125070314, 9125070318, 9125070322, 9125070354, 9125070383, 9125070448, 9125070456, 9125070458, 9125070502, 9125070510, 9125070518, 9125070572, 9125070590, 9125070628, 9125070654, 9125070722, 9125070734, 9125070767, 9125070768, 9125070806, 9125070813, 9125070821, 9125070862, 9125070878, 9125070913, 9125071019, 9125071143, 9125071176, 9125071210, 9125071238, 9125071249, 9125071268, 9125071410, 9125071566, 9125071584, 9125071729, 9125071751, 9125071768, 9125071976, 9125072017, 9125072033, 9125072071, 9125072163, 9125072800, 9125072911, 9125072969, 9125073097, 9125073273, 9125073307, 9125073694, 9125073850, 9125073926, 9125074070, 9125074822, 9125074875, 9125075038, 9125075181, 9125075407, 9125075408, 9125075684, 9125076035, 9125076094, 9125076110, 9125076125, 9125076231, 9125076342, 9125076683, 9125076703, 9125077073, 9125077620, 9125078892, 9125078896, 9125083024, 9125083318, 9125083329, 9125083438, 9125083692, 9125086338, 9125087435, 9125087497, 9125087511, 9125088225, 9125088852, 9125090259, 9125091869, 9125092469, 9125093074, 9125094784, 9125095282, 9125095913, 9125097869, 9125099865, 9125100436, 9125101425, 9125101657, 9125102036, 9125102404, 9125102550, 9125103025, 9125103097, 9125103294, 9125104804, 9125105069, 9125105692, 9125106311, 9125106424, 9125106889, 9125107628, 9125108353, 9125108432, 9125111114, 9125112720, 9125112898, 9125112980, 9125114696, 9125115644, 9125117616, 9125119165, 9125121277, 9125123528, 9125126026, 9125126048, 9125126286, 9125131341, 9125132364, 9125133886, 9125136782, 9125136827, 9125137081, 9125137658, 9125138637, 9125139093, 9125139336, 9125139516, 9125139903, 9125140618, 9125140815, 9125141289, 9125141466, 9125141864, 9125142213, 9125143026, 9125143961, 9125144985, 9125146205, 9125148024, 9125149244, 9125149764, 9125149904, 9125151048, 9125151186, 9125152191, 9125152523, 9125156293, 9125156697, 9125157079, 9125158395, 9125158874, 9125159066, 9125159663, 9125160609, 9125160794, 9125161299, 9125162412, 9125162480, 9125162547, 9125162812, 9125163882, 9125163926, 9125164362, 9125164531, 9125164837, 9125164935, 9125165082, 9125165307, 9125165537, 9125165721, 9125166223, 9125166943, 9125167681, 9125168706, 9125169128, 9125169210, 9125169349, 9125169428, 9125169730, 9125170541, 9125170556, 9125170592, 9125171002, 9125172124, 9125172838, 9125174634, 9125174870, 9125175499, 9125176151, 9125176242, 9125177829, 9125177854, 9125178097, 9125178129, 9125178498, 9125178547, 9125178679, 9125178852, 9125179226, 9125179351, 9125179884, 9125180169, 9125180235, 9125180278, 9125180307, 9125180319, 9125180537, 9125180564, 9125180702, 9125180721, 9125180813, 9125180856, 9125180901, 9125180919, 9125181004, 9125181008, 9125181040, 9125181130, 9125181148, 9125181229, 9125181299, 9125181721, 9125181749, 9125181754, 9125181768, 9125181770, 9125181773, 9125181872, 9125181887, 9125181899, 9125181920, 9125181944, 9125181956, 9125182034, 9125182047, 9125182085, 9125182097, 9125182154, 9125182170, 9125182192, 9125182216, 9125182242, 9125182243, 9125182248, 9125182303, 9125182320, 9125182327, 9125182329, 9125182334, 9125182349, 9125182396, 9125182410, 9125182420, 9125182434, 9125182441, 9125182475, 9125182619, 9125182654, 9125182665, 9125182673, 9125182674, 9125182709, 9125182731, 9125182780, 9125182783, 9125182802, 9125182861, 9125182878, 9125182879, 9125182885, 9125182907, 9125182931, 9125182973, 9125183053, 9125183114, 9125183125, 9125183137, 9125183275, 9125183278, 9125183302, 9125183319, 9125183375, 9125183378, 9125183403, 9125183405, 9125183465, 9125183483, 9125183492, 9125183532, 9125183566, 9125183571, 9125183574, 9125183652, 9125183761, 9125183812, 9125184060, 9125184061, 9125184246, 9125184367, 9125184370, 9125184435, 9125184460, 9125184632, 9125184638, 9125184676, 9125184982, 9125185378, 9125186208, 9125186496, 9125187052, 9125187310, 9125187493, 9125187867, 9125188144, 9125188543, 9125188995, 9125189007, 9125189545, 9125189586, 9125189628, 9125189850, 9125190187, 9125190299, 9125190340, 9125190362, 9125190638, 9125190683, 9125190716, 9125190726, 9125190930, 9125191138, 9125191218, 9125191242, 9125192572, 9125192678, 9125192721, 9125194209, 9125194676, 9125194744, 9125194907, 9125195496, 9125196351, 9125196387, 9125196637, 9125196866, 9125197086, 9125197668, 9125198116, 9125198224, 9125198537, 9125198567, 9125199113, 9125200382, 9125200651, 9125201549, 9125202476, 9125204461, 9125205199, 9125206024, 9125206670, 9125206893, 9125206938, 9125207501, 9125208921, 9125209220, 9125210230, 9125210355, 9125210528, 9125210890, 9125211158, 9125211243, 9125212062, 9125212094, 9125212757, 9125214294, 9125215484, 9125217703, 9125217728, 9125217870, 9125217911, 9125218004, 9125220803, 9125223784, 9125224581, 9125224656, 9125224688, 9125225010, 9125225058, 9125225074, 9125225729, 9125225786, 9125226216, 9125226335, 9125226526, 9125226805, 9125227696, 9125227783, 9125228241, 9125228408, 9125231694, 9125232738, 9125235545, 9125237848, 9125237914, 9125238045, 9125243475, 9125244348, 9125244688, 9125248264, 9125248657, 9125249032, 9125251225, 9125254394, 9125255685, 9125256067, 9125259633, 9125262110, 9125262515, 9125263173, 9125263271, 9125264123, 9125264758, 9125265583, 9125266557, 9125266749, 9125267895, 9125268727, 9125268751, 9125268916, 9125269870, 9125270020, 9125270545, 9125270841, 9125270957, 9125271254, 9125272099, 9125273625, 9125277032, 9125282272, 9125283621, 9125288405, 9125288820, 9125289980, 9125303012, 9125303876, 9125304172, 9125305865, 9125306146, 9125307571, 9125307993, 9125330049, 9125330239, 9125330592, 9125331351, 9125332113, 9125332371, 9125333576, 9125333698, 9125334015, 9125334616, 9125334683, 9125335141, 9125336443, 9125336534, 9125336872, 9125337578, 9125338373, 9125339284, 9125339871, 9125339950, 9125340385, 9125340963, 9125343070, 9125343606, 9125344039, 9125344465, 9125346105, 9125346158, 9125346247, 9125346433, 9125346950, 9125348136, 9125348826, 9125349017, 9125349541, 9125349681, 9125350300, 9125350802, 9125351376, 9125352003, 9125352165, 9125352640, 9125352989, 9125353289, 9125353950, 9125354316, 9125354367, 9125354522, 9125354661, 9125355059, 9125355536, 9125355811, 9125355929, 9125355954, 9125356014, 9125356206, 9125356778, 9125357021, 9125357477, 9125357784, 9125357958, 9125358253, 9125358378, 9125358409, 9125358447, 9125358556, 9125358590, 9125358650, 9125358739, 9125358805, 9125358840, 9125358921, 9125359013, 9125359092, 9125359102, 9125359127, 9125359168, 9125359196, 9125359234, 9125359280, 9125359401, 9125359432, 9125359497, 9125359663, 9125359768, 9125360157, 9125360275, 9125360300, 9125360312, 9125360335, 9125360359, 9125360401, 9125360406, 9125360421, 9125360433, 9125360459, 9125360556, 9125360568, 9125360608, 9125360614, 9125360631, 9125360643, 9125360662, 9125360704, 9125360714, 9125360757, 9125360798, 9125360820, 9125360823, 9125360825, 9125360844, 9125360851, 9125360852, 9125360857, 9125360858, 9125360868, 9125360921, 9125361039, 9125361050, 9125361051, 9125361063, 9125361068, 9125361069, 9125361091, 9125361093, 9125361120, 9125361130, 9125361137, 9125361157, 9125361189, 9125361190, 9125361210, 9125361223, 9125361291, 9125361297, 9125361321, 9125361388, 9125361393, 9125361401, 9125361410, 9125361422, 9125361452, 9125361456, 9125361469, 9125361471, 9125361475, 9125361481, 9125361566, 9125361690, 9125361701, 9125361805, 9125361856, 9125361882, 9125361923, 9125361973, 9125361994, 9125362042, 9125362069, 9125362165, 9125362282, 9102002530, 9102002548, 9102002582, 9102002674, 9102002859, 9102002883, 9102002892, 9102002898, 9102002905, 9102002907, 9102002923, 9102002938, 9102002949, 9102002950, 9102002951, 9102002976, 9102003430, 9102003431, 9102003826, 9102003843, 9102003845, 9102003924, 9102003925, 9102004950, 9102004952, 9102004962, 9102004963, 9102005920, 9102005921, 9102006279, 9102006280, 9102008414, 9102008415, 9102008416, 9102008710, 9102100779, 9102102075, 9102103864, 9102107270, 9102108059, 9102109592, 9102109613, 9102109657, 9102109722, 9102109803, 9102109862, 9102109863, 9102109869, 9102113186, 9102113206, 9102113276, 9102113277, 9102113278, 9102113279, 9102113283, 9102113284, 9102113285, 9102113286, 9102113288, 9102113735, 9102113739, 9102114792, 9102114793, 9102115405, 9102115679, 9102115680, 9102117140, 9102117154, 9102117163, 9102119013, 9102119199, 9102119212, 9102119452, 9102119459, 9102120542, 9102120616, 9102120826, 9102120957, 9102121200, 9102121201, 9102121799, 9102121806, 9102122298, 9102122358, 9102122419, 9102122609, 9102123700, 9121000437, 9121001637, 9121002658, 9121002873, 9121003239, 9121003880, 9121004551, 9121004845, 9121005069, 9121006998, 9121007103, 9121007789, 9121009406, 9121010627, 9121010849, 9121011100, 9121011979, 9121012024, 9121012034, 9121012079, 9121013413, 9121013731, 9121013842, 9121013845, 9121014284, 9121014401, 9121014519, 9121014847, 9121015070, 9121015084, 9121015245, 9121015339, 9121015394, 9121015820, 9121016860, 9121017084, 9121017221, 9121017413, 9121018058, 9121018105, 9121018192, 9121018645, 9121018649, 9121018650, 9121019672, 9121019814, 9121020063, 9121020617, 9121021069, 9121021151, 9121021571, 9121022029, 9121023473, 9121023516, 9121023783, 9121023854, 9121023882, 9121024030, 9121024629, 9121024902, 9121025397, 9121026356, 9121026387, 9121026643, 9121027356, 9121029099, 9121029456, 9121031185, 9121032551, 9121032895, 9121033033, 9121033313, 9121033315, 9121033665, 9121034545, 9121034854, 9121035087, 9121035109, 9121035217, 9121035244, 9121036915, 9121037027, 9121037869, 9121038109, 9121038376, 9121039612, 9121040326, 9121041061, 9121042047, 9121042245, 9121042903, 9121043386, 9121043938, 9121044027, 9121044453, 9121044577, 9121045095, 9121046002, 9121050075, 9121050397, 9121051369, 9121051989, 9121052639, 9121053373, 9121053725, 9121055000, 9121055070, 9121055168, 9121055448, 9121055692, 9121057022, 9121057634, 9121058160, 9121058581, 9121058673, 9121060025, 9121060446, 9121061131, 9121061152, 9121061162, 9121061247, 9121061348, 9121061942, 9121062934, 9121063127, 9121063407, 9121063611, 9121065143, 9121065150, 9121065344, 9121066134, 9121066581, 9121066754, 9121067019, 9121067314, 9121067646, 9121068556, 9121068612, 9121068670, 9121069018, 9121069124, 9121069162, 9121069318, 9121069547, 9121069804, 9121069861, 9121070008, 9121071104, 9121071450, 9121071821, 9121072307, 9121073085, 9121073125, 9121073184, 9121073215, 9121073228, 9121073604, 9121075286, 9121076045, 9121077265, 9121077843, 9121078186, 9121078416, 9121078434, 9121078612, 9121080188, 9121081378, 9121081926, 9121082806, 9121084382, 9121084624, 9121084952, 9121085324, 9121086756, 9121086846, 9121086910, 9121087015, 9121087262, 9121087428, 9121087460, 9121087939, 9121087962, 9121088020, 9121088562, 9121088756, 9121089140, 9121090770, 9121091387, 9121091488, 9121091647, 9121091934, 9121092558, 9121093245, 9121093308, 9121093470, 9121094120, 9121094287, 9121095009, 9121096386, 9121096836, 9121099724, 9121104126, 9121104141, 9121104340, 9121104477, 9121104834, 9121106231, 9121106569, 9121106631, 9121111690, 9121111826, 9121112934, 9121115538, 9121116059, 9121116629, 9121117585, 9121118688, 9121119624, 9121798350, 9121798588, 9121799345, 9121799820, 9121799869, 9121830263, 9121831535, 9121831677, 9121831691, 9121831868, 9121832194, 9121832562, 9121832943, 9121833649, 9121835407, 9121836323, 9121836397, 9121836422, 9121837180, 9121838771, 9121839077, 9121839228, 9121839271, 9121839872, 9121851162, 9121851738, 9121852176, 9121853224, 9121853678, 9121854418, 9121854590, 9121854743, 9121854754, 9121855107, 9121855317, 9121855503, 9121856366, 9121857061, 9121857386, 9121857498, 9121858526, 9121858571, 9121859024, 9121859739, 9121860693, 9121861224, 9121862064, 9121862136, 9121864536, 9121865920, 9121866455, 9121866891, 9121867086, 9121868350, 9121868629, 9121869698, 9121870107, 9121870260, 9121871631, 9121871906, 9121872543, 9121873234, 9121873261, 9121874428, 9121875272, 9121876071, 9121877073, 9121877205, 9121877731, 9121877745, 9121877790, 9121877805, 9121878034, 9121878213, 9121878341, 9121878645, 9121879166, 9121879629, 9121879735, 9121880645, 9121881403, 9121881405, 9121881411, 9121881561, 9121881625, 9121881894, 9121881967, 9121882160, 9121882176, 9121882413, 9121882512, 9121882796, 9121883106, 9121883410, 9121883793, 9121884115, 9121884576, 9121884742, 9121885326, 9121885494, 9121885815, 9121886138, 9121886579, 9121886692, 9121887412, 9121888116, 9121888137, 9121889506, 9121889556, 9121889615, 9121889691, 9121889973, 9121890987, 9121891000, 9121891099, 9121891161, 9121891217, 9121892867, 9121892951, 9121893054, 9121894028, 9121894320, 9121895367, 9121895382, 9121895746, 9121895804, 9121897569, 9121897996, 9121898500, 9121898749, 9121899020, 9121899185, 9121900320, 9121902498, 9121903301, 9121903471, 9121903495, 9121903551, 9121903655, 9121903729, 9121903812, 9121903821, 9121905664, 9121905722, 9121905953, 9121907803, 9121907995, 9121909756, 9121910248, 9121910476, 9121930151, 9121930837, 9121930922, 9121930951, 9121931266, 9121931336, 9121931660, 9121931803, 9121932148, 9121932832, 9121933932, 9121935307, 9121935473, 9121937865, 9121938714, 9121938750, 9121938764, 9121938902, 9121939143, 9121939369, 9121940377, 9121940658, 9121941332, 9121941475, 9121941500, 9121942136, 9121942145, 9121942372, 9121943282, 9121943729, 9121944590, 9121944592, 9121944897, 9121945629, 9121945638, 9121946042, 9121946169, 9121946229, 9121946586, 9121946628, 9121946846, 9121946885, 9121946966, 9121947072, 9121947163, 9121949108, 9121949207, 9121950310, 9121950816, 9121952023, 9121952286, 9121953181, 9121953358, 9121953408, 9121954171, 9121954553, 9121954917, 9121954922, 9121954928, 9121954955, 9121955057, 9121955197, 9121955223, 9121955341, 9121956631, 9121956918, 9121957223, 9121957418, 9121957727, 9121957794, 9121957823, 9121957842, 9121958468, 9121958952, 9121960394, 9121961977, 9121962597, 9121962783, 9121963044, 9121963423, 9121963914, 9121964971, 9121966675, 9121967110, 9121967573, 9121967983, 9121968683, 9121968975, 9121969068, 9121969453, 9121969987, 9121970240, 9121972002, 9121972043, 9121972394, 9121972400, 9121972455, 9121972577, 9121973526, 9121973965, 9121974893, 9121974911, 9121975054, 9121975950, 9121976366, 9121976652, 9121976701, 9121977320, 9121977491, 9121977504, 9121977518, 9121977548, 9121977622, 9121977629, 9121977751, 9121977757, 9121977981, 9121978017, 9121978035, 9121978054, 9121978453, 9121979165, 9121982835, 9121983191, 9121985327, 9121985644, 9121986058, 9121986859, 9121987132, 9121987178, 9121987193, 9121987208, 9121987242, 9121987394, 9121987402, 9121987448, 9121987718, 9121987994, 9121988034, 9121988043, 9121989177, 9121991894, 9121993139, 9121994604, 9121994611, 9121994771, 9121994902, 9121994963, 9121995409, 9121995439, 9121995866, 9121995974, 9121996871, 9121997310, 9121997390, 9121998253, 9121999441, 9121999523, 9121999870, 9122002286, 9122002753, 9122003145, 9122004687, 9122005245, 9122007486, 9122008752, 9122009294, 9122009321, 9122009510, 9122009536, 9122009562, 9122009584, 9122009607, 9122009638, 9122009683, 9122009706, 9122009710, 9122009803, 9122009808, 9122009820, 9122009824, 9122009843, 9122009872, 9122010600, 9122010628, 9122010959, 9122011686, 9122013188, 9122013755, 9122013868, 9122014497, 9122014553, 9122014632, 9122014960, 9122015000, 9122015076, 9122015569, 9122015918, 9122015921, 9122015922, 9122016256, 9122016329, 9122016436, 9122016623, 9122017005, 9122017006, 9122017177, 9122018112, 9122019006, 9122019427, 9122019698, 9122020641, 9122021446, 9122021986, 9122022114, 9122022179, 9122023128, 9122023276, 9122023354, 9122024106, 9122024424, 9122025031, 9122025338, 9122025400, 9122025493, 9122025628, 9122025674, 9122028122, 9122028187, 9122029014, 9122029310, 9122029710, 9122030245, 9122030840, 9122032616, 9122033204, 9122033343, 9122033679, 9122033720, 9122033721, 9122033893, 9122033898, 9122033920, 9122033925, 9122033990, 9122033994, 9122033998, 9122034044, 9122034078, 9122034132, 9122034165, 9122034174, 9122034211, 9122034221, 9122034309, 9122034611, 9122035118, 9122035364, 9122035414, 9122035531, 9122035740, 9122035960, 9122036671, 9122036856, 9122036906, 9122037566, 9122037606, 9122039301, 9122039373, 9122039398, 9122039841, 9122039909, 9122040264, 9122040712, 9122041396, 9122042145, 9122042849, 9122042972, 9122043003, 9122043214, 9122043492, 9122043711, 9122043799, 9122043832, 9122044077, 9122044398, 9122045789, 9122046029, 9122046610, 9122046661, 9122046701, 9122046719, 9122046845, 9122049571, 9122050331, 9122054147, 9122056164, 9122057095, 9122058448, 9122058990, 9122061236, 9122061345, 9122062269, 9122063173, 9122063422, 9122064953, 9122066898, 9122067381, 9122067784, 9122068730, 9122069539, 9122069950, 9122070252, 9122070290, 9122070342, 9122070379, 9122070471, 9122070597, 9122070616, 9122070633, 9122070635, 9122070646, 9122070703, 9122070713, 9122070715, 9122070733, 9122070741, 9122070758, 9122070796, 9122070797, 9122070799, 9122070843, 9122070994, 9122070999, 9122071005, 9122071108, 9122071134, 9122071141, 9122071662, 9122071669, 9122071996, 9122072435, 9122072451, 9122072536, 9122072729, 9122073173, 9122073796, 9122073942, 9122074569, 9122074584, 9122074832, 9122074954, 9122075214, 9122075915, 9122075938, 9122076093, 9122076095, 9122076105, 9122076382, 9122076454, 9122078092, 9122079226, 9122079270, 9122080046, 9122080662, 9122080717, 9122080989, 9122081679, 9122082846, 9122083007, 9122084043, 9122084171, 9122084202, 9122084378, 9122085098, 9122085166, 9122085180, 9122085394, 9122085787, 9122085938, 9122086042, 9122086071, 9122086631, 9122088104, 9122089505, 9122089731, 9122090369, 9122090837, 9122091130, 9122091333, 9122091405, 9122092567, 9122092601, 9122092678, 9122093711, 9122093976, 9122094164, 9122095015, 9122095223, 9122095225, 9122095710, 9122096309, 9122097102, 9122101364, 9122101424, 9122102083, 9122102535, 9122103260, 9122103654, 9122104480, 9122104481, 9122105184, 9122106727, 9122107430, 9122108362, 9122108423, 9122108459, 9122108614, 9122108721, 9122108896, 9122108946, 9122108954, 9122108962, 9122109017, 9122109027, 9122109127, 9122109131, 9122109141, 9122109145, 9122109163, 9122109194, 9122109211, 9122109246, 9122109290, 9122109299, 9122109310, 9122109443, 9122109450, 9122109482, 9122109497, 9122109545, 9122109574, 9122109751, 9122109768, 9122109814, 9122110069, 9122111041, 9122111351, 9122111450, 9122111577, 9122112510, 9122114819, 9122115683, 9122116002, 9122116670, 9122117850, 9122118086, 9122118323, 9122118359, 9122118530, 9122118598, 9122118603, 9122119642, 9122119657, 9122119685, 9122119716, 9122119812, 9122122018, 9122122033, 9122122268, 9122122499, 9122122990, 9122123997, 9122124336, 9122125182, 9122125357, 9122125579, 9122125629, 9122125746, 9122126381, 9122127265, 9122128905, 9122129480, 9122130012, 9122130204, 9122131810, 9122133205, 9122133577, 9122133685, 9122133784, 9122134620, 9122134857, 9122135434, 9122135896, 9122136604, 9122137040, 9122140546, 9122140669, 9122141062, 9122141248, 9122142332, 9122142804, 9122144772, 9122145064, 9122145132, 9122145225, 9122146803, 9122146804, 9122147004, 9122148137, 9122148353, 9122149221, 9122152109, 9122152444, 9122152668, 9122153613, 9122153873, 9122153984, 9122154090, 9122155769, 9122155870, 9122156078, 9122156205, 9122156598, 9122157873, 9122158360, 9122159038, 9122159046, 9122159063, 9122159124, 9122159253, 9122159461, 9122160391, 9122160392, 9122160410, 9122160490, 9122160790, 9122160964, 9122160966, 9122161039, 9122161088, 9122161104, 9122161207, 9122161610, 9122161650, 9122161664, 9122161749, 9122161799, 9122161806, 9122161813, 9122161821, 9122161893, 9122161909, 9122161928, 9122161948, 9122161972, 9122162039, 9122162052, 9122162115, 9122162142, 9122162166, 9122162170, 9122162194, 9122162231, 9122162237, 9122162279, 9122162329, 9122162466, 9122162475, 9122162506, 9122162638, 9122162653, 9122162685, 9122162721, 9122163036, 9122163044, 9122163072, 9122163108, 9122163747, 9122164067, 9122164597, 9122164793, 9122164835, 9122164962, 9122164992, 9122165877, 9122167191, 9122167630, 9122167683, 9122167780, 9122167867, 9122167960, 9122168114, 9122168249, 9122168324, 9122169130, 9122169510, 9122169588, 9122170952, 9122172679, 9122172713, 9122172931, 9122175169, 9122175431, 9122175767, 9122175885, 9122176936, 9122177383, 9122177480, 9122178121, 9122179094, 9122179665, 9122180851, 9122181454, 9122182180, 9122182544, 9122182773, 9122184984, 9122185590, 9122186779, 9122188123, 9122189657, 9122190070, 9122190188, 9122190280, 9122190287, 9122191125, 9122192068, 9122193096, 9122194309, 9122194467, 9122194504, 9122194737, 9122195369, 9122195610, 9122197529, 9122199281, 9122199699, 9122199741, 9122199860, 9122199930, 9122200754, 9122200991, 9122201231, 9122201483, 9122201862, 9122201939, 9122202314, 9122202329, 9122202390, 9122202801, 9122203005, 9122203179, 9122203909, 9122204015, 9122204176, 9122204557, 9122204705, 9122204978, 9122206107, 9122206521, 9122206588, 9122206836, 9122206960, 9122206979, 9122207674, 9122208044, 9122208046, 9122208207, 9122208629, 9122209821, 9122210245, 9122210734, 9122210993, 9122211049, 9122211783, 9122212588, 9122212687, 9122212708, 9122214936, 9122215415, 9122215597, 9122215609, 9122215615, 9122216270, 9122216624, 9122216708, 9122216731, 9122217038, 9122217168, 9122217685, 9122217827, 9122218538, 9122218620, 9122218660, 9122218698, 9122218970, 9122219050, 9122219186, 9122219421, 9122219757, 9122219975, 9122232796, 9122232824, 9122233680, 9122234259, 9122234261, 9122235035, 9122237230, 9122237837, 9122237944, 9122239045, 9122239166, 9122239200, 9122240140, 9122240385, 9122241320, 9122241990, 9122243217, 9122243786, 9122243987, 9122244401, 9122244751, 9122247301, 9122249802, 9122252755, 9122252837, 9122254714, 9122255132, 9122256166, 9122258928, 9122259092, 9122259364, 9122259403, 9122259483, 9122259945, 9122260927, 9122261598, 9122263004, 9122263943, 9122264013, 9122264087, 9122264113, 9122264339, 9122266962, 9122267622, 9122268487, 9122271225, 9122272090, 9122273148, 9122273251, 9122275322, 9122276136, 9122277368, 9122277925, 9122278136, 9122279282, 9122280365, 9122280500, 9122281075, 9122282355, 9122300014, 9122300478, 9122300788, 9122302669, 9122302788, 9122303383, 9122303595, 9122303927, 9122304074, 9122304089, 9122304124, 9122304927, 9122304986, 9122306219, 9122306323, 9122306641, 9122307108, 9122307116, 9122307496, 9122307610, 9122307901, 9122308186, 9122308192, 9122308219, 9122308225, 9122308239, 9122308250, 9122308321, 9122308328, 9122308336, 9122308339, 9122308357, 9122308498, 9122308578, 9122308723, 9122308763, 9122309142, 9122309340, 9122309358, 9122309411, 9122309414, 9122309431, 9122309448, 9122309458, 9122309530, 9122309533, 9122309545, 9122309565, 9122309609, 9122309619, 9122309641, 9122309749, 9122309758, 9122309787, 9122309864, 9122309868, 9122309878, 9122309932, 9122309945, 9122309948, 9122309952, 9122309968, 9122309981, 9122330030, 9122330038, 9122330091, 9122330092, 9122330338, 9122330420, 9122330537, 9122330598, 9122330752, 9122330855, 9122330936, 9122330974, 9122331022, 9122331071, 9122331151, 9122331152, 9122331246, 9122331266, 9122331268, 9122331294, 9122331371, 9122331442, 9122331957, 9122332268, 9122332391, 9122332546, 9122332547, 9122332598, 9122332685, 9122332853, 9122332965, 9122333677, 9122333818, 9122333863, 9122333871, 9122333882, 9122333887, 9122333953, 9122334055, 9122334210, 9122334253, 9122334393, 9122334622, 9122334794, 9122334889, 9122334900, 9122334902, 9122334905, 9122335113, 9122335183, 9122335237, 9122335427, 9122335431, 9122335490, 9122335528, 9122335902, 9122336297, 9122337195, 9122337573, 9122337653, 9122338430, 9122339101, 9122340149, 9122340574, 9122340915, 9122340970, 9122341148, 9122341330, 9122341450, 9122341610, 9122343684, 9122343922, 9122345434, 9122345496, 9122347678, 9122348639, 9122350128, 9122350525, 9122351427, 9122356100, 9122356944, 9122360684, 9122360750, 9122362057, 9122362083, 9122362380, 9122362448, 9122363303, 9122363398, 9122363692, 9122363930, 9122364058, 9122364149, 9122364265, 9122364294, 9122364620, 9122364692, 9122365330, 9122365373, 9122365630, 9122366247, 9122366401, 9122366582, 9122367904, 9122368050, 9122368574, 9122369703, 9122369979, 9122372438, 9122372606, 9122372695, 9122373605, 9122373791, 9122373897, 9122375269, 9122375578, 9122375914, 9122378492, 9122380551, 9122380922, 9122382614, 9122383010, 9122383504, 9122383798, 9122383842, 9122384535, 9122384902, 9122384981, 9122387032, 9122388060, 9122390666, 9122391272, 9122392937, 9122393129, 9122393544, 9122394398, 9122394881, 9122399039, 9122399177, 9122399481, 9122400280, 9122400451, 9122400794, 9122401647, 9122403021, 9122403779, 9122404112, 9122404852, 9122405185, 9122405264, 9122405357, 9122405469, 9122405623, 9122405743, 9122405936, 9122406201, 9122406305, 9122406409, 9122407319, 9122407329, 9122407496, 9122407972, 9122408908, 9122408982, 9122409029, 9122409455, 9122430072, 9122430410, 9122430426, 9122430563, 9122430921, 9122430934, 9122431012, 9122431157, 9122431245, 9122431247, 9122431417, 9122431938, 9122432075, 9122432165, 9122432481, 9122432690, 9122432740, 9122432824, 9122433026, 9122433074, 9122433227, 9122433256, 9122433360, 9122433371, 9122433423, 9122433514, 9122433603, 9122433662, 9122433871, 9122433876, 9122433889, 9122433901, 9122433918, 9122433946, 9122434018, 9122434052, 9122434054, 9122434100, 9122434107, 9122434113, 9122434115, 9122434133, 9122434182, 9122434185, 9122434200, 9122434212, 9122434260, 9122434303, 9122434330, 9122434348, 9122434354, 9122434364, 9122434376, 9122434397, 9122434403, 9122434424, 9122434434, 9122434487, 9122434528, 9122434582, 9122434591, 9122434638, 9122434650, 9122434679, 9122434684, 9122434716, 9122434839, 9122434850, 9122434859, 9122434961, 9122434975, 9122435107, 9122435236, 9122435272, 9122435395, 9122435410, 9122435458, 9122435545, 9122435571, 9122435614, 9122435677, 9122435737, 9122435742, 9122435816, 9122435817, 9122436204, 9122436535, 9122436629, 9122436733, 9122437002, 9122437010, 9122437011, 9122437467, 9122437554, 9122437582, 9122437656, 9122438360, 9122438524, 9122438738, 9122438849, 9122438852, 9122439142, 9122439280, 9122439406, 9122439423, 9122439441, 9122439517, 9122439525, 9122439547, 9122439548, 9122439706, 9122439782, 9122439810, 9122439850, 9122439975, 9122440042, 9122440317, 9122440366, 9122440524, 9122440856, 9122441581, 9122441775, 9122442947, 9122442960, 9122443173, 9122443896, 9122444021, 9122445049, 9122445904, 9122446209, 9122446304, 9122448665, 9122449721, 9122450691, 9122450939, 9122451004, 9122451609, 9122451989, 9122452632, 9122452921, 9122453076, 9122453201, 9122453319, 9122453349, 9122453409, 9122453709, 9122453804, 9122453844, 9122454787, 9122454858, 9122454950, 9122459277, 9122459278, 9122460140, 9122460396, 9122460655, 9122460762, 9122462196, 9122463033, 9122463252, 9122463413, 9122463451, 9122463549, 9122463808, 9122463988, 9122464014, 9122464525, 9122464659, 9122465194, 9122465334, 9122466174, 9122466538, 9122466572, 9122466592, 9122466609, 9122467269, 9122467781, 9122467794, 9122468169, 9122468751, 9122470275, 9122473002, 9122473506, 9122473600, 9122473712, 9122474154, 9122475707, 9122477178, 9122477957, 9122478271, 9122478379, 9122479521, 9122479568, 9122479919, 9122481629, 9122486738, 9122488073, 9122489421, 9122489680, 9122490323, 9122490747, 9122492162, 9122492271, 9122492700, 9122493184, 9122493395, 9122494279, 9122494586, 9122494624, 9122495242, 9122495578, 9122496305, 9122496376, 9122497216, 9122497376, 9122498987, 9122499360, 9122500364, 9122500612, 9122501231, 9122501540, 9122504197, 9122505316, 9122505706, 9122506076, 9122506092, 9122506546, 9122506718, 9122506913, 9122540075, 9122541635, 9122541785, 9122542205, 9122542252, 9122543446, 9122543781, 9122544628, 9122545055, 9122545536, 9122546713, 9122546863, 9122546904, 9122547012, 9122547367, 9122547513, 9122549213, 9122549330, 9122549479, 9122549754, 9122571017, 9122571987, 9122572145, 9122572317, 9122572611, 9122573146, 9122573359, 9122573460, 9122573734, 9122574034, 9122574845, 9122575039, 9122575981, 9122576144, 9122576596, 9122576942, 9122577010, 9122577291, 9122577820, 9122578316, 9122578628, 9122578644, 9122579597, 9122580145, 9122580332, 9122580359, 9122580392, 9122580556, 9122580684, 9122580951, 9122580982, 9122581045, 9122581068, 9122581184, 9122581207, 9122581256, 9122581287, 9122581398, 9122581449, 9122581462, 9122581627, 9122581645, 9122581729, 9122581786, 9122581909, 9122581921, 9122581941, 9122581949, 9122581974, 9122582001, 9122582202, 9122582291, 9122582309, 9122582339, 9122582366, 9122582388, 9122582413, 9122582438, 9122582491, 9122582509, 9122582537, 9122582540, 9122582548, 9122582550, 9122582554, 9122582560, 9122582581, 9122582608, 9122582616, 9122582629, 9122582639, 9122582665, 9122582675, 9122582698, 9122582707, 9122582719, 9122582755, 9122582762, 9122582776, 9122582785, 9122582798, 9122582801, 9122582826, 9122582830, 9122582831, 9122582838, 9122582918, 9122582936, 9122582944, 9122582948, 9122582966, 9122582979, 9122582996, 9122582997, 9122583004, 9122583044, 9122583046, 9122583071, 9122583085, 9122583090, 9122583141, 9122583154, 9122583169, 9122583207, 9122583227, 9122583307, 9122583308, 9122583596, 9122583619, 9122583642, 9122583668, 9122583707, 9122583726, 9122583735, 9122583743, 9122583761, 9122583771, 9122583828, 9122584057, 9122584086, 9122584159, 9122584184, 9122584204, 9122584207, 9122584247, 9122584249, 9122584252, 9122584259, 9122584374, 9122584520, 9122584541, 9122584550, 9122584700, 9122584756, 9122584784, 9122584879, 9122585243, 9122585514, 9122586014, 9122586349, 9122586470, 9122586589, 9122586956, 9122587211, 9122587221, 9122587392, 9122587426, 9122587478, 9122587585, 9122587592, 9122587727, 9122587857, 9122588323, 9122589296, 9122589460, 9122589550, 9122589588, 9122589726, 9122589770, 9122589787, 9122589883, 9122589894, 9122589919, 9122589934, 9122590399, 9122590434, 9122590516, 9122590569, 9122590581, 9122590584, 9122590637, 9122591445, 9122592093, 9122593057, 9122593548, 9122593601, 9122593676, 9122593797, 9122594631, 9122594682, 9122595362, 9122595699, 9122596038, 9122596054, 9122597059, 9122598223, 9122598340, 9122598604, 9122599083, 9122599099, 9122599419, 9122619965, 9122634572, 9122700297, 9122701943, 9122702197, 9122702936, 9122704212, 9122704427, 9122705084, 9122706483, 9122707443, 9122707862, 9122708340, 9122708385, 9122709694, 9122710026, 9122710959, 9122711028, 9122712283, 9122713351, 9122713538, 9122714022, 9122715948, 9122716347, 9122716630, 9122717200, 9122717400, 9122717943, 9122719795, 9122719801, 9122719882, 9122720321, 9122721131, 9122721844, 9122721856, 9122722275, 9122722474, 9122722820, 9122722855, 9122723626, 9122723761, 9122724974, 9122724993, 9122725106, 9122725942, 9122727600, 9122727909, 9122728141, 9122728154, 9122728204, 9122750312, 9122750348, 9122752091, 9122752496, 9122752665, 9122760277, 9122760471, 9122760885, 9122761421, 9122761614, 9122763303, 9122764075, 9122765643, 9122765935, 9122765966, 9122767399, 9122767851, 9122768597, 9122768609, 9122768810, 9122768958, 9122770921, 9122771420, 9122772611, 9122772766, 9122777664, 9122779230, 9122780062, 9122780966, 9122781939, 9122783162, 9122783950, 9122784501, 9122784597, 9122784960, 9122785082, 9122785449, 9122786059, 9122786694, 9122787415, 9122787642, 9122787797, 9122787835, 9122788036, 9122788973, 9122789159, 9122789327, 9122789930, 9122790612, 9122790744, 9122791134, 9122791320, 9122791602, 9122792126, 9122792176, 9122792269, 9122792371, 9122792840, 9122792853, 9122793404, 9122793929, 9122794147, 9122794327, 9122794391, 9122794603, 9122794937, 9122795004, 9122795063, 9122795468, 9122795541, 9122795571, 9122795604, 9122795629, 9122795633, 9122795644, 9122795676, 9122795707, 9122795732, 9122795752, 9122795790, 9122795792, 9122795793, 9122795846, 9122795865, 9122795987, 9122796425, 9122796475, 9122796510, 9122796525, 9122796529, 9122796537, 9122796553, 9122796559, 9122796560, 9122796569, 9122796572, 9122796594, 9122796606, 9122796614, 9122796626, 9122796673, 9122796674, 9122796739, 9122796780, 9122796796, 9122796841, 9122796863, 9122796885, 9122796893, 9122797051, 9122797067, 9122797101, 9122797110, 9122797118, 9122797181, 9122797197, 9122797223, 9122797224, 9122797250, 9122797262, 9122797264, 9122797307, 9122797367, 9122797448, 9122797484, 9122797560, 9122797603, 9122797708, 9122797910, 9122797968, 9122798045, 9122798079, 9122798128, 9122798183, 9122798218, 9122798405, 9122798462, 9122798479, 9122798646, 9122798681, 9122798708, 9122799313, 9122800045, 9122800213, 9122800237, 9122800476, 9122800520, 9122800722, 9122800752, 9122800956, 9122800962, 9122800979, 9122800982, 9122801084, 9122801143, 9122801364, 9122801659, 9122802016, 9122802141, 9122802362, 9122802373, 9122802402, 9122802409, 9122802413, 9122802428, 9122802433, 9122802483, 9122802622, 9122802661, 9122802725, 9122802769, 9122802973, 9122803089, 9122803095, 9122803143, 9122803326, 9122803529, 9122803859, 9122804328, 9122804387, 9122804700, 9122805330, 9122805413, 9122805991, 9122806227, 9122808208, 9122808389, 9122809388, 9122830142, 9122831794, 9122831823, 9122832439, 9122833511, 9122833679, 9122834198, 9122834357, 9122834552, 9122834907, 9122835140, 9122835437, 9122837432, 9122837905, 9122838426, 9122838656, 9122838756, 9122840540, 9122841305, 9122841434, 9122841892, 9122842091, 9122842280, 9122842313, 9122842398, 9122842796, 9122843861, 9122843988, 9122844010, 9122844162, 9122844346, 9122844930, 9122845879, 9122845998, 9122846314, 9122846381, 9122846554, 9122846691, 9122847843, 9122847923, 9122848214, 9122848339, 9122848913, 9122850767, 9122852581, 9122853688, 9122854330, 9122854804, 9122855490, 9122857642, 9122858373, 9122858433, 9122860217, 9122862372, 9122863655, 9122864889, 9122868506, 9122870384, 9122873276, 9122874129, 9122874753, 9122875402, 9122875878, 9122875988, 9122877267, 9122877360, 9122879591, 9122880427, 9122880962, 9122881279, 9122882034, 9122882767, 9122884500, 9122884636, 9122886367, 9122886438, 9122887041, 9122887905, 9122890454, 9122892750, 9122892855, 9122893326, 9122894055, 9122894063, 9122894311, 9122894661, 9122894775, 9122895091, 9122896802, 9122897285, 9122897426, 9122898192, 9122898405, 9122898831, 9122899815, 9122900371, 9122900465, 9122900829, 9122901044, 9122902351, 9122902783, 9122903356, 9122903796, 9122904263, 9122905654, 9122905681, 9122905818, 9122905842, 9122905972, 9122906399, 9122906476, 9122906510, 9122907347, 9122907669, 9122909340, 9122909385, 9122909584, 9122910574, 9122910659, 9122913124, 9122930067, 9122930599, 9122930891, 9122931036, 9122931181, 9122931186, 9122931278, 9122931297, 9122931343, 9122931381, 9122931386, 9122931498, 9122931745, 9122931803, 9122931804, 9122931834, 9122931868, 9122931879, 9122931927, 9122931971, 9122932059, 9122932145, 9122932402, 9122932433, 9122932435, 9122932491, 9122932501, 9122932563, 9122932623, 9122932692, 9122932735, 9122932774, 9122932884, 9122932947, 9122932965, 9122932977, 9122932984, 9122932994, 9122933011, 9122933042, 9122933049, 9122933065, 9122933077, 9122933090, 9122933095, 9122933104, 9122933105, 9122933142, 9122933189, 9122933192, 9122933202, 9122933213, 9122933229, 9122933237, 9122933253, 9122933278, 9122933289, 9122933299, 9122933316, 9122933320, 9122933359, 9122933362, 9122933392, 9122933415, 9122933416, 9122933418, 9122933449, 9122933468, 9122933484, 9122933485, 9122933564, 9122933572, 9122933584, 9122933648, 9122933732, 9122933749, 9122933772, 9122933789, 9122933845, 9122933948, 9122934080, 9122934087, 9122934153, 9122934327, 9122934375, 9122934434, 9122934509, 9122934560, 9122934583, 9122934692, 9122934838, 9122934850, 9122934857, 9122934866, 9122934968, 9122935091, 9122935166, 9122935850, 9122936221, 9122936296, 9122936520, 9122936617, 9122936630, 9122936690, 9122936901, 9122936923, 9122936929, 9122936983, 9122937229, 9122937297, 9122937338, 9122937459, 9122937647, 9122937660, 9122937694, 9122937957, 9122938229, 9122938552, 9122938649, 9122938929, 9122939031, 9122939033, 9122939477, 9122939497, 9122939530, 9122939537, 9122939591, 9122940013, 9122940029, 9122940057, 9122941168, 9122941866, 9122941905, 9122942134, 9122942584, 9122942747, 9122942919, 9122942936, 9122943186, 9122943216, 9122943495, 9122944827, 9122945667, 9122946075, 9122946510, 9122946816, 9122947177, 9122947486, 9122948183, 9122948956, 9122950235, 9122951967, 9122952973, 9122953117, 9122953256, 9122953580, 9122954190, 9122954380, 9122955305, 9122955564, 9122956086, 9122958128, 9122958511, 9122958716, 9122962146, 9122964308, 9122964826, 9122964832, 9122965097, 9122965184, 9122965236, 9122965523, 9122965765, 9122965810, 9122966036, 9122966041, 9122966086, 9122966159, 9122967174, 9122967701, 9122970389, 9122971003, 9122971816, 9122971836, 9122971837, 9122971929, 9122972464, 9122972621, 9122973056, 9122973468, 9122973668, 9122973958, 9122974025, 9122974031, 9122974254, 9122975430, 9122975830, 9122976103, 9122976187, 9122976533, 9122977020, 9122977505, 9122977717, 9122978330, 9122979647, 9122980899, 9122981029, 9122981287, 9122981468, 9122982342, 9122982486, 9122982889, 9122983314, 9122983591, 9122983631, 9122983651, 9122983904, 9122983988, 9122984377, 9122984602, 9122984842, 9122985836, 9122986911, 9122986987, 9122987137, 9122987233, 9122987248, 9122987290, 9122987317, 9122987500, 9122987599, 9122987886, 9122987927, 9122988189, 9122988233, 9122988243, 9122988318, 9122988541, 9122988605, 9122988672, 9122988674, 9122988694, 9122988718, 9122988782, 9122988798, 9122988821, 9122988895, 9122988954, 9122988959, 9122989030, 9122989312, 9122989325, 9122989423, 9122989446, 9122989453, 9122989488, 9122989508, 9122989844, 9122989847, 9122989923, 9122989989, 9122990772, 9122990849, 9122990889, 9122990995, 9122991438, 9122992621, 9122992686, 9122992848, 9122993704, 9122993757, 9122993803, 9122994793, 9122997078, 9122997624, 9122998071, 9122998073, 9122998075, 9122998089, 9122998114, 9122998124, 9122998183, 9122998254, 9122998255, 9122998264, 9122998394, 9122998403, 9122998431, 9122998477, 9122998481, 9122998553, 9122998568, 9122998597, 9122998606, 9122998643, 9122998647, 9122998702, 9122998740, 9122998744, 9122998759, 9122998762, 9122998769, 9122998772, 9122998779, 9122998850, 9122998857, 9122998868, 9122998937, 9122998987, 9122999027, 9122999072, 9122999079, 9122999084, 9122999088, 9122999089, 9122999129, 9122999157, 9122999186, 9122999212, 9122999277, 9122999280, 9122999302, 9122999303, 9122999400, 9122999506, 9122999529, 9122999608, 9122999612, 9122999622, 9122999634, 9122999644, 9122999648, 9122999681, 9122999825, 9122999879, 9122999890, 9122999925, 9122999951, 9123000050, 9123001509, 9123001674, 9123002716, 9123002790, 9123004254, 9123004840, 9123004929, 9123005416, 9123005461, 9123006480, 9123006986, 9123007620, 9123008251, 9123009149, 9123009722, 9123009887, 9123010128, 9123010314, 9123010510, 9123010979, 9123012236, 9123012336, 9123012379, 9123013049, 9123013879, 9123014320, 9123014830, 9123015219, 9123015294, 9123015731, 9123015806, 9123015827, 9123016980, 9123017083, 9123018088, 9123018396, 9123018956, 9123019630, 9123019681, 9123019707, 9123019782, 9123019805, 9123020217, 9123020349, 9123020812, 9123020820, 9123022868, 9123023506, 9123024913, 9123025116, 9123025344, 9123026939, 9123027013, 9123027296, 9123027347, 9123027458, 9123027680, 9123027922, 9123028076, 9123028161, 9123028808, 9123029619, 9123030432, 9123030665, 9123031684, 9123031974, 9123032637, 9123032719, 9123033398, 9123033436, 9123033729, 9123033980, 9123034231, 9123034273, 9123034540, 9123034549, 9123034781, 9123035134, 9123035333, 9123037810, 9123037829, 9123038015, 9123038189, 9123040423, 9123041490, 9123041802, 9123041938, 9123042129, 9123042130, 9123042263, 9123042677, 9123042822, 9123043394, 9123043811, 9123043871, 9123043924, 9123044897, 9123045414, 9123045564, 9123045801, 9123046748, 9123047005, 9123047099, 9123047811, 9123047833, 9123048279, 9123048303, 9123048605, 9123049275, 9123049296, 9123049329, 9123049649, 9123051250, 9123051354, 9123051386, 9123051402, 9123051790, 9123053062, 9123053963, 9123054051, 9123055597, 9123055701, 9123056224, 9123056450, 9123056742, 9123056805, 9123056898, 9123057088, 9123057122, 9123057124, 9123057248, 9123057728, 9123058259, 9123058803, 9123059199, 9123059227, 9123059316, 9123060223, 9123060623, 9123061183, 9123062135, 9123062870, 9123063125, 9123064110, 9123064144, 9123064603, 9123064607, 9123064629, 9123064787, 9123065191, 9123065493, 9123065891, 9123066196, 9123067129, 9123068142, 9123068598, 9123070268, 9123070813, 9123070903, 9123071490, 9123071541, 9123071871, 9123071890, 9123071937, 9123072119, 9123072697, 9123072976, 9123074563, 9123074782, 9123075085, 9123075193, 9123076880, 9123078690, 9123078978, 9123078993, 9123079312, 9123079350, 9123080237, 9123080316, 9123080586, 9123080644, 9123082300, 9123084431, 9123084509, 9123084576, 9123085156, 9123085334, 9123086486, 9123086705, 9123087156, 9123088152, 9123088330, 9123089309, 9123089379, 9123089579, 9123089605, 9123090051, 9123090256, 9123091802, 9123092674, 9123093150, 9123093819, 9123094085, 9123094170, 9123094298, 9123094547, 9123094887, 9123095340, 9123095388, 9123097153, 9123097259, 9123097834, 9123100116, 9123100255, 9123101082, 9123101091, 9123101266, 9123101872, 9123102676, 9123102712, 9123103176, 9123105045, 9123105839, 9123105986, 9123106596, 9123106636, 9123107113, 9123107149, 9123107538, 9123108423, 9123108545, 9123108568, 9123108583, 9123108651, 9123108719, 9123108843, 9123109065, 9123109228, 9123111236, 9123111508, 9123113982, 9123114420, 9123114547, 9123114719, 9123114989, 9123114996, 9123115216, 9123115355, 9123115685, 9123115930, 9123116385, 9123117567, 9123117725, 9123118012, 9123118146, 9123118774, 9123120087, 9123120905, 9123122321, 9123123307, 9123124340, 9123124676, 9123124929, 9123125631, 9123126034, 9123126181, 9123127092, 9123127139, 9123128945, 9123130128, 9123130244, 9123131542, 9123131563, 9123131903, 9123132089, 9123133165, 9123133264, 9123133655, 9123133872, 9123134083, 9123134337, 9123135321, 9123135426, 9123135475, 9123135659, 9123136602, 9123136805, 9123136855, 9123137438, 9123137812, 9123138016, 9123138113, 9123138473, 9123138510, 9123138553, 9123139156, 9123139806, 9123140204, 9123140422, 9123140721, 9123140776, 9123140779, 9123141229, 9123142657, 9123142711, 9123143889, 9123143894, 9123145623, 9123145856, 9123145873, 9123147131, 9123147709, 9123148551, 9123148842, 9123148849, 9123149676, 9123149823, 9123150046, 9123150337, 9123150570, 9123151711, 9123152823, 9123153846, 9123154240, 9123154582, 9123154763, 9123154875, 9123155212, 9123155405, 9123155427, 9123155434, 9123155672, 9123156012, 9123156290, 9123156807, 9123156860, 9123157153, 9123159334, 9123159843, 9123160374, 9123161173, 9123161964, 9123162621, 9123162990, 9123163108, 9123163271, 9123164007, 9123164194, 9123164549, 9123165014, 9123165561, 9123165828, 9123166068, 9123166672, 9123167537, 9123168781, 9123169675, 9123169792, 9123170485, 9123170517, 9123170839, 9123171008, 9123171084, 9123171595, 9123171684, 9123172880, 9123175460, 9123177367, 9123178007, 9123178690, 9123178846, 9123180735, 9123182344, 9123182865, 9123182916, 9123183181, 9123183658, 9123184066, 9123184761, 9123184906, 9123185083, 9123185212, 9123185329, 9123185365, 9123185370, 9123186439, 9123186659, 9123186845, 9123187284, 9123188427, 9123189719, 9123190162, 9123191915, 9123192044, 9123192094, 9123192208, 9123192869, 9123192958, 9123192959, 9123192975, 9123193213, 9123193484, 9123193669, 9123194339, 9123194568, 9123195274, 9123195378, 9123195718, 9123195903, 9123196430, 9123196809, 9123197275, 9123197415, 9123197745, 9123198339, 9123198789, 9123199362, 9123199973, 9123200485, 9123200523, 9123200548, 9123201097, 9123201583, 9123203394, 9123203631, 9123204066, 9123204517, 9123206785, 9123206844, 9123207279, 9123207412, 9123207592, 9123207875, 9123207884, 9123208341, 9123209370, 9123209470, 9123209934, 9123210127, 9123210191, 9123210239, 9123211316, 9123211692, 9123212289, 9123213775, 9123214188, 9123214340, 9123215410, 9123216727, 9123217278, 9123217489, 9123218727, 9123219057, 9123219273, 9123220667, 9123220775, 9123221204, 9123221336, 9123221420, 9123221636, 9123221852, 9123221892, 9123221928, 9123221996, 9123222326, 9123222703, 9123223617, 9123223853, 9123224244, 9123226043, 9123226615, 9123226963, 9123227758, 9123228031, 9123228593, 9123228662, 9123228669, 9123228864, 9123229050, 9123229123, 9123229147, 9123229158, 9123229169, 9123229430, 9123230376, 9123231185, 9123231867, 9123232140, 9123232365, 9123233109, 9123233370, 9123233376, 9123234724, 9123234885, 9123235137, 9123235305, 9123235337, 9123235338, 9123235773, 9123235833, 9123235939, 9123235961, 9123235973, 9123236011, 9123236189, 9123236756, 9123236770, 9123238035, 9123238044, 9123238154, 9123238691, 9123240373, 9123241154, 9123241472, 9123243150, 9123243215, 9123243561, 9123243631, 9123243638, 9123243724, 9123244196, 9123245278, 9123245391, 9123246722, 9123247164, 9123248126, 9123248359, 9123248597, 9123249532, 9123250481, 9123250654, 9123250726, 9123250958, 9123251620, 9123252113, 9123253480, 9123253850, 9123253857, 9123254296, 9123254432, 9123255201, 9123255506, 9123256237, 9123257443, 9123258159, 9123258858, 9123259286, 9123259347, 9123259932, 9123259960, 9123260918, 9123261688, 9123261877, 9123262342, 9123262654, 9123263047, 9123265323, 9123266029, 9123266196, 9123266205, 9123266287, 9123266404, 9123266788, 9123266909, 9123267107, 9123267229, 9123267343, 9123267487, 9123268312, 9123268385, 9123269439, 9123269460, 9123270234, 9123270239, 9123270254, 9123270542, 9123270786, 9123270978, 9123271091, 9123271408, 9123271795, 9123272568, 9123272592, 9123272637, 9123272966, 9123273146, 9123273277, 9123273812, 9123273934, 9123273942, 9123274319, 9123274401, 9123274423, 9123274540, 9123274859, 9123276965, 9123277233, 9123277603, 9123278134, 9123278757, 9123279069, 9123279136, 9123279649, 9123300701, 9123301218, 9123301659, 9123302708, 9123304825, 9123304919, 9123307100, 9123307291, 9123307320, 9123307521, 9123307891, 9123308034, 9123308106, 9123308168, 9123308299, 9123308402, 9123330017, 9123331149, 9123331220, 9123332040, 9123332056, 9123332069, 9123332098, 9123332191, 9123332451, 9123332452, 9123332610, 9123332756, 9123333041, 9123333218, 9123334047, 9123334198, 9123334294, 9123334460, 9123335088, 9123335240, 9123337639, 9123338386, 9123338664, 9123339709, 9123339748, 9123340126, 9123340383, 9123340910, 9123341288, 9123343305, 9123344186, 9123344718, 9123345309, 9123345461, 9123345563, 9123346114, 9123346461, 9123346478, 9123346591, 9123346596, 9123346695, 9123346975, 9123347276, 9123347294, 9123348110, 9123348141, 9123348713, 9123348912, 9123349203, 9123350250, 9123350424, 9123350694, 9123350970, 9123351577, 9123352543, 9123353216, 9123353529, 9123353595, 9123353606, 9123353670, 9123353709, 9123353873, 9123354003, 9123354117, 9123354280, 9123354318, 9123354973, 9123355143, 9123355322, 9123356247, 9123357409, 9123357620, 9123359116, 9123359963, 9123360783, 9123361261, 9123363089, 9123363291, 9123363309, 9123365592, 9123365604, 9123367732, 9123367819, 9123367949, 9123368251, 9123368311, 9123368462, 9123368555, 9123369167, 9123370473, 9123370563, 9123370677, 9123370830, 9123370944, 9123371040, 9123371274, 9123372293, 9123373873, 9123374269, 9123374460, 9123374534, 9123374642, 9123375119, 9123375136, 9123375159, 9123375477, 9123375694, 9123375950, 9123376019, 9123376678, 9123377005, 9123377481, 9123377615, 9123378066, 9123379461, 9123379734, 9123380577, 9123381484, 9123381765, 9123382179, 9123382235, 9123382443, 9123382759, 9123383648, 9123383997, 9123384287, 9123384332, 9123385296, 9123385847, 9123386880, 9123387145, 9123387306, 9123387633, 9123388914, 9123389308, 9123389809, 9123389960, 9123390075, 9123390232, 9123390257, 9123392217, 9123392617, 9123393216, 9123394523, 9123394975, 9123396646, 9123396973, 9123397237, 9123397281, 9123397330, 9123397871, 9123399515, 9123400034, 9123400883, 9123401621, 9123401858, 9123403382, 9123403406, 9123404662, 9123404936, 9123405525, 9123405581, 9123406201, 9123406635, 9123407188, 9123408705, 9123430391, 9123430803, 9123431571, 9123431613, 9123431629, 9123431654, 9123431996, 9123432114, 9123432259, 9123432573, 9123432723, 9123433100, 9123433145, 9123434377, 9123434425, 9123435191, 9123437760, 9123437818, 9123438139, 9123438249, 9123438296, 9123438299, 9123438578, 9123438581, 9123438864, 9123438879, 9123438959, 9123439743, 9123440795, 9123441713, 9123442730, 9123443053, 9123443498, 9123443691, 9123443863, 9123444628, 9123445034, 9123445296, 9123445471, 9123445573, 9123446298, 9123446573, 9123446591, 9123446944, 9123447145, 9123447156, 9123447963, 9123447987, 9123448033, 9123448126, 9123448160, 9123448628, 9123449064, 9123450418, 9123451167, 9123452154, 9123452573, 9123452862, 9123453085, 9123453514, 9123453684, 9123454115, 9123454822, 9123455317, 9123456640, 9123457336, 9123457346, 9123457590, 9123457898, 9123458722, 9123458749, 9123458951, 9123459297, 9123459345, 9123459411, 9123459582, 9123459795, 9123459875, 9123460151, 9123460156, 9123460166, 9123460214, 9123460295, 9123460828, 9123461370, 9123462319, 9123464270, 9123465174, 9123465300, 9123465309, 9123465402, 9123465649, 9123466181, 9123466188, 9123466191, 9123466394, 9123466696, 9123467166, 9123467591, 9123467871, 9123469574, 9123472469, 9123472586, 9123472798, 9123473269, 9123473423, 9123473466, 9123473509, 9123474814, 9123474876, 9123475056, 9123477844, 9123478203, 9123478409, 9123478500, 9123478975, 9123479645, 9123479654, 9123479842, 9123480093, 9123480311, 9123480362, 9123481480, 9123482050, 9123483140, 9123483213, 9123484168, 9123484296, 9123485613, 9123485739, 9123486487, 9123486893, 9123487112, 9123487189, 9123487736, 9123487780, 9123489050, 9123489720, 9123489828, 9123489864, 9123489866, 9123490093, 9123491300, 9123493728, 9123493739, 9123493901, 9123493941, 9123494393, 9123494690, 9123495166, 9123495198, 9123495291, 9123495448, 9123495691, 9123497340, 9123497349, 9123498077, 9123498203, 9123498776, 9123499423, 9123499784, 9123499975, 9123500228, 9123500581, 9123500596, 9123500872, 9123501076, 9123501246, 9123501746, 9123501799, 9123503589, 9123504225, 9123504458, 9123507028, 9123507415, 9123507460, 9123507518, 9123507758, 9123508044, 9123508123, 9123509000, 9123509967, 9123540219, 9123540992, 9123541381, 9123541960, 9123542362, 9123543154, 9123543620, 9123544022, 9123544181, 9123544207, 9123544319, 9123544530, 9123545360, 9123545706, 9123547320, 9123547572, 9123547853, 9123547901, 9123548400, 9123549182, 9123570853, 9123570855, 9123570947, 9123570983, 9123571190, 9123571223, 9123571354, 9123571482, 9123571664, 9123571780, 9123572368, 9123573225, 9123573970, 9123574045, 9123575727, 9123576399, 9123576659, 9123577031, 9123577204, 9123577205, 9123577508, 9123577536, 9123577540, 9123577699, 9123578470, 9123578561, 9123578679, 9123579095, 9123579158, 9123579463, 9123579588, 9123579601, 9123580541, 9123580564, 9123580736, 9123583216, 9123583268, 9123583454, 9123583623, 9123584407, 9123584763, 9123584764, 9123584890, 9123584975, 9123586343, 9123586673, 9123587129, 9123587192, 9123587318, 9123588200, 9123590752, 9123590868, 9123591252, 9123591483, 9123591638, 9123591653, 9123591686, 9123593877, 9123594101, 9123594371, 9123595237, 9123595826, 9123596569, 9123597334, 9123597904, 9123598047, 9123598354, 9123598385, 9123599016, 9123599230, 9123622609, 9123635527, 9123644690, 9123650435, 9123668699, 9123687806, 9123690328, 9123690377, 9123701691, 9123701948, 9123702371, 9123702544, 9123702759, 9123702971, 9123703960, 9123704352, 9123704474, 9123704478, 9123704688, 9123704722, 9123705139, 9123705181, 9123705278, 9123706527, 9123706741, 9123707216, 9123708669, 9123709262, 9123709845, 9123710168, 9123710942, 9123710959, 9123711196, 9123711297, 9123711542, 9123711632, 9123711961, 9123712646, 9123712684, 9123712813, 9123712822, 9123713156, 9123713680, 9123715743, 9123716439, 9123716918, 9123717610, 9123717826, 9123717835, 9123718073, 9123718150, 9123718365, 9123719026, 9123719434, 9123719591, 9123719618, 9123722804, 9123723674, 9123724396, 9123724668, 9123724798, 9123724803, 9123724812, 9123725178, 9123728357, 9123728991, 9123750244, 9123750458, 9123751002, 9123751033, 9123751327, 9123751565, 9123752450, 9123752573, 9123752671, 9123753200, 9123753814, 9123754290, 9123754311, 9123754405, 9123755772, 9123756550, 9123757248, 9123757562, 9123758051, 9123758251, 9123758434, 9123759219, 9123760524, 9123763544, 9123763906, 9123764045, 9123764105, 9123764420, 9123764429, 9123765195, 9123765922, 9123766731, 9123767213, 9123767220, 9123768341, 9123769187, 9123769621, 9123770716, 9123770851, 9123771539, 9123772377, 9123773006, 9123773416, 9123774137, 9123774787, 9123776005, 9123776734, 9123776856, 9123776893, 9123776925, 9123777360, 9123777393, 9123777417, 9123777422, 9123777458, 9123777694, 9123777805, 9123777853, 9123777907, 9123778142, 9123778511, 9123778752, 9123779019, 9123779464, 9123780446, 9123781169, 9123781192, 9123781446, 9123781731, 9123783006, 9123783787, 9123783950, 9123784325, 9123784485, 9123784635, 9123784745, 9123784795, 9123785715, 9123786636, 9123786870, 9123787522, 9123788009, 9123788354, 9123788645, 9123789031, 9123789835, 9123790171, 9123790239, 9123790466, 9123791340, 9123791868, 9123792485, 9123792588, 9123792831, 9123793467, 9123793757, 9123795274, 9123795560, 9123795582, 9123796294, 9123796649, 9123796936, 9123797506, 9123797707, 9123798620, 9123798925, 9123799943, 9123801846, 9123802055, 9123802842, 9123803289, 9123803482, 9123803486, 9123803689, 9123803832, 9123803923, 9123804181, 9123804255, 9123806219, 9123807334, 9123807524, 9123807696, 9123807854, 9123808195, 9123809648, 9123809774, 9123809924, 9123830178, 9123831363, 9123831492, 9123831645, 9123833052, 9123833065, 9123833570, 9123834157, 9123834627, 9123834648, 9123835406, 9123836303, 9123836991, 9123837036, 9123837527, 9123838570, 9123838669, 9123838719, 9123840583, 9123841487, 9123841576, 9123843802, 9123843873, 9123843892, 9123844079, 9123844332, 9123844956, 9123845781, 9123846152, 9123847511, 9123847869, 9123848138, 9123848225, 9123849648, 9123849659, 9123851757, 9123851773, 9123851796, 9123851845, 9123852808, 9123853340, 9123853848, 9123854044, 9123854374, 9123854909, 9123855805, 9123856561, 9123857245, 9123857435, 9123857634, 9123857661, 9123859104, 9123859187, 9123859188, 9123859211, 9123859240, 9123859612, 9123859642, 9123859712, 9123859831, 9123860261, 9123861427, 9123861580, 9123861675, 9123862509, 9123862747, 9123863672, 9123863855, 9123864084, 9123864101, 9123864270, 9123864359, 9123864504, 9123864843, 9123865223, 9123865414, 9123865603, 9123866258, 9123866353, 9123866358, 9123866467, 9123866552, 9123867288, 9123868715, 9123868717, 9123868991, 9123870746, 9123871315, 9123871324, 9123871580, 9123871600, 9123873977, 9123876947, 9123877116, 9123878213, 9123878216, 9123878245, 9123878438, 9123880074, 9123880165, 9123880196, 9123880305, 9123880395, 9123880487, 9123880494, 9123880499, 9123880520, 9123880524, 9123880527, 9123880620, 9123880663, 9123881176, 9123881178, 9123882458, 9123882765, 9123882773, 9123882787, 9123882806, 9123882823, 9123884285, 9123884806, 9123885136, 9123885221, 9123885330, 9123886550, 9123887093, 9123887163, 9123887359, 9123888204, 9123888208, 9123888359, 9123889675, 9123889687, 9123889691, 9123889879, 9123890073, 9123891492, 9123891791, 9123891908, 9123892366, 9123893537, 9123894358, 9123895185, 9123895673, 9123896638, 9123897024, 9123897400, 9123897466, 9123897580, 9123898506, 9123899074, 9123900035, 9123900181, 9123900199, 9123900247, 9123900350, 9123900361, 9123900362, 9123900416, 9123900424, 9123900455, 9123900689, 9123901042, 9123901173, 9123901181, 9123901852, 9123903142, 9123903617, 9123904714, 9123904878, 9123905108, 9123906413, 9123907269, 9123907519, 9123909892, 9123910061, 9123910624, 9123930156, 9123930213, 9123930869, 9123931132, 9123933426, 9123933514, 9123934978, 9123935726, 9123936055, 9123937069, 9123937132, 9123937293, 9123937346, 9123937793, 9123937804, 9123938421, 9123938663, 9123938699, 9123938914, 9123938919, 9123938934, 9123938944, 9123938986, 9123939013, 9123939162, 9123939270, 9123940128, 9123940200, 9123940224, 9123940614, 9123941557, 9123941867, 9123942089, 9123942803, 9123944051, 9123944150, 9123944880, 9123945456, 9123945904, 9123947328, 9123947456, 9123948425, 9123949584, 9123949901, 9123950449, 9123951283, 9123951745, 9123952089, 9123954808, 9123954911, 9123955024, 9123955365, 9123956562, 9123957064-->
<!---->
<!--    ];-->
<!--    $messagesPerBatch = 250;-->
<!--    $toBatches = array_chunk($to, $messagesPerBatch);-->
<!--    foreach ($toBatches as $batch) {-->
<!---->
<!--    $string = [];-->
<!--    foreach ($batch as $item => $value) {-->
<!--    $string[$item] = '0' . (string)$value;-->
<!--    }-->
<!---->
<!--    $options = [-->
<!--    //                "username" => "0060845007",-->
<!--    "username" => "atighechi",-->
<!--    //                "password" => "J@a5007",-->
<!--    "password" => "atighechi",-->
<!--    //                "originator" => "50004323",//خط-->
<!--    "originator" => "98210002196869986",//خط-->
<!--    "destination" => $string,-->
<!--    "content" => "لبنیات لیقوانی بی همتا فرهنگ سابق خ 196 بین میدان پروین و مظفری بالاترین کیفیت ۲۵٪ تخفیف تا ۲۰آبان 09144095489 77745488 لغو 11",-->
<!--    ];-->
<!---->
<!--    $client = new SoapClient('http://95.142.235.136:8080/core/MessageRelayService?wsdl');-->
<!--    // ابتدا تعداد پیام‌ها را در هر ثانیه محاسبه کنید-->
<!--    $totalMessages = count($to);-->
<!--    $secondsNeeded = ceil($totalMessages / $messagesPerSecond);-->
<!---->
<!--    // اطلاعاتی که باید به لاگ اضافه شود-->
<!--    $logInfo = "Total Messages: $totalMessages, Messages Per Second: $messagesPerSecond, Seconds Needed: $secondsNeeded";-->
<!---->
<!--    try {-->
<!--    $result = $client->sendMessageOneToMany($options);-->
<!--    if ($result->return->error->errorCode) {-->
<!--    info("ارسال گروهی ارمغان انجام نشد به دلیل ارور" . $result->return->error->errorCode);-->
<!--    //                return ['status'=> false , 'error'=> $result->return->error->errorCode, 'result'=>''];-->
<!--    return "true1";-->
<!---->
<!--    }-->
<!--    info("ارسال گروهی ارمغان انجام شد" . json_encode($options));-->
<!--    info(json_encode($logInfo));-->
<!--    return redirect(route('program.index'))->with('message', 'عملیات با موفقیت انجام شد.');-->
<!---->
<!--    return "true2";-->
<!--    //            return ['status'=> true , 'error'=> $result->return->error->errorCode, 'result'=>$result->return->references];-->
<!---->
<!--    } catch (Exception $ex) {-->
<!--    info(" ارمغان پیام گروهی را ارسال نکرد به دلیل ارتباط نداشتن با سرور ارمغان" . $ex);-->
<!--    info(json_encode($logInfo));-->
<!--    return "false";-->
<!---->
<!--    //            return ['status'=> false , 'error'=> $ex, 'result'=>''];-->
<!--    }-->
<!--    }-->
<!--    }-->
<!---->
<!--    /////////////////////////////////////////////////////-->
<!--    $to =$sends->pluck('to')->toArray();-->
<!---->
<!--    ////////////////////////////////////////////// sms armaghan-->
<!--    public function update(Program $program)-->
<!--    {-->
<!--    // soap options-->
<!--    $messagesPerSecond = 1; // شما می‌توانید این مقدار را تغییر دهید-->
<!--    $to = [-->
<!---->
<!--    ];-->
<!--    $string = [];-->
<!--    foreach ($to as $item => $value) {-->
<!--    $string[$item] = '0' . (string)$value;-->
<!--    }-->
<!--    //        dd($string);-->
<!--    $options = [-->
<!--    "username" => "0060845007",-->
<!--    "password" => "J@a5007",-->
<!--    "originator" => "50004323",//خط-->
<!--    "destination" => $string,-->
<!--    "content" => "اولین پنل پیامکی در ایران 02196869999 سال1388",-->
<!--    ];-->
<!---->
<!--    $client = new SoapClient('http://95.142.235.136:8080/core/MessageRelayService?wsdl');-->
<!--    // ابتدا تعداد پیام‌ها را در هر ثانیه محاسبه کنید-->
<!--    $totalMessages = count($to);-->
<!--    $secondsNeeded = ceil($totalMessages / $messagesPerSecond);-->
<!---->
<!--    // اطلاعاتی که باید به لاگ اضافه شود-->
<!--    $logInfo = "Total Messages: $totalMessages, Messages Per Second: $messagesPerSecond, Seconds Needed: $secondsNeeded";-->
<!---->
<!--    try {-->
<!--    $result = $client->sendMessageOneToMany($options);-->
<!--    if ($result->return->error->errorCode) {-->
<!--    info("ارسال گروهی ارمغان انجام نشد به دلیل ارور" . $result->return->error->errorCode);-->
<!--    //                return ['status'=> false , 'error'=> $result->return->error->errorCode, 'result'=>''];-->
<!--    return "true1";-->
<!---->
<!--    }-->
<!--    info("ارسال گروهی ارمغان انجام شد" . json_encode($options));-->
<!--    info(json_encode($logInfo));-->
<!--    return "true2";-->
<!--    //            return ['status'=> true , 'error'=> $result->return->error->errorCode, 'result'=>$result->return->references];-->
<!---->
<!--    } catch (Exception $ex) {-->
<!--    info(" ارمغان پیام گروهی را ارسال نکرد به دلیل ارتباط نداشتن با سرور ارمغان" . $ex);-->
<!--    info(json_encode($logInfo));-->
<!--    return "false";-->
<!---->
<!--    //            return ['status'=> false , 'error'=> $ex, 'result'=>''];-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!---->
<!--    ///////////////////////////////////////// mongo-->
<!--    use MongoDB\Client;-->
<!---->
<!--    // ایجاد اتصال به MongoDB-->
<!--    $client = new Client("mongodb://localhost:27017");-->
<!---->
<!--    // انتخاب دیتابیس مورد نظر-->
<!--    $database = $client->selectDatabase('your_database_name');-->
<!---->
<!--    // انتخاب کلکشن (معادل جدول در پایگاه داده رابطه‌ای)-->
<!--    $collection = $database->selectCollection('posts');-->
<!---->
<!--    // جستجوی پست‌های مرتبط با یک کاربر خاص-->
<!--    $posts = $collection->find(['user_id' => $user_id]);-->
<!---->
<!--    // نمایش نتایج-->
<!--    foreach ($posts as $post) {-->
<!--    echo $post['title'] . '<br>';-->
<!--    echo $post['content'] . '<br>';-->
<!--    }-->
<!---->
<!---->
<!--    ////////////////////////////////////////// TEST SMS-->
<!--    public function sendOneToMany(array $to, string $message) {-->
<!--    // ...-->
<!---->
<!--    $messagesPerSecond = 1;-->
<!---->
<!--    $options = [-->
<!--    "username" => $this->username,-->
<!--    "password" => $this->password,-->
<!--    "originator" => $this->send_number,-->
<!--    "destination" => [], // آرایه خالی برای افزودن شماره‌ها-->
<!--    "content" => $message,-->
<!--    ];-->
<!---->
<!--    $totalMessages = count($to);-->
<!--    $secondsNeeded = ceil($totalMessages / $messagesPerSecond);-->
<!---->
<!--    $logInfo = "Total Messages: $totalMessages, Messages Per Second: $messagesPerSecond, Seconds Needed: $secondsNeeded";-->
<!---->
<!--    $client = new SoapClient($this->url);-->
<!---->
<!--    for ($i = 0; $i < 1000; $i++) {-->
<!--    // ایجاد 1000 شماره تلفن مثالی-->
<!--    $phoneNumber = '09165089950';-->
<!--    $options['destination'][] = $phoneNumber;-->
<!--    }-->
<!---->
<!--    try {-->
<!--    $result = $client->sendMessageOneToMany($options);-->
<!--    if ($result->return->error->errorCode) {-->
<!--    // ...-->
<!--    }-->
<!--    // ...-->
<!--    } catch (Exception $ex) {-->
<!--    // ...-->
<!--    }-->
<!--    }-->
<!---->
<!---->
<!---->
<!---->
<!--    //////////////////////////////////////////////////// verta-->
<!--    میخوام تاریخ میلادی را بصورت شمسی نمایش بده-->
<!--    return DataTables::eloquent($programs)-->
<!--    ->addColumn('dater', function ($sup) {-->
<!--    return verta($sup->created_at)->format('%d %B %Y ') . strval($sup->created_at->format('H:i:s'));-->
<!--    })-->
<!---->
<!--    ////////////////////////////////////////////////////// set config-->
<!--    میخوام در کلاس متدی باشد اول یکسری دیتا را اول ست کند-->
<!--    $config = $line->toArray();-->
<!--    $message = Message::setService($line->master_line->name);-->
<!--    $message->setConfig($config);-->
<!--    //-->
<!--    public function setConfig($basic_data) {-->
<!--    // exp basic url : 'http://95.142.225.104:8080'-->
<!--    $this->url = $basic_data['url'] . '/core/MessageRelayService?wsdl';-->
<!--    $this->username = $basic_data['username'];-->
<!--    $this->password = $basic_data['password'];-->
<!--    $this->send_number = $basic_data['send_number'];-->
<!--    }-->
<!--    ////////////////////////////////////////////////////////////////////////-->
<!--    --><?php
//    public function sendSMS()
//    {
//        // تابع برای ارسال پیامک
//        function sendSMS($message) {
//            // ارسال پیامک
//            // اینجا می‌توانید کد ارسال پیامک خود را اضافه کنید
//            // مثلاً از یک API خارجی برای ارسال پیامک استفاده کنید
//            // و پیامک مورد نظر را ارسال کنید
//        }
//
//        // لیست پیامک‌ها
//        $messages = ["Message 1", "Message 2", "Message 3", ..., "Message 100"];
//
//        // تعداد نخ‌های موازی
//        $numThreads = 5;
//
//        // ایجاد نخ‌ها و ارسال پیامک‌ها به صورت موازی
//        $threads = [];
//        for ($i = 0; $i < $numThreads; $i++) {
//            $start = $i * (count($messages) / $numThreads);
//            $end = ($i + 1) * (count($messages) / $numThreads);
//            $thread = new Thread(function () use ($start, $end, $messages) {
//                sendSMS(array_slice($messages, $start, $end - $start));
//            });
//            $threads[] = $thread;
//        }
//
//        // شروع نخ‌ها
//        foreach ($threads as $thread) {
//            $thread->start();
//        }
//
//        // انتظار برای پایان تمامی نخ‌ها
//        foreach ($threads as $thread) {
//            $thread->join();
//        }
//
//        return "All SMS sent.";
//    }
//}
//
//
/////////////////////////////////////////////// delete 30 min
//public function __construct(array $attributes = [])
//{
//    parent::__construct($attributes);
//
//    SessionApi::where('created_at','<',date('Y-m-d H:i:s',strtotime('- 30 minute')))->delete();
//}
//
/////////////////////////////////////////////////////////////// soap fill Jalalian
//public function putPersonalInfo(PutPersonalInfoRequest $request)
//{
//    try {
//        $client = new SoapClient("http://vesal.armaghan.net?wsdl");
//        $requestData = $request->all();
//        $client->putPersonalInfo($requestData);
//
//        $putPersonalInfo = new PutPersonalInfo($requestData);
//        // تبدیل تاریخ‌های میلادی به تاریخ‌های جلالی
//        $startDate = Jalalian::fromFormat('Y-m-d', $requestData['startDate'])->toCarbon();
//        $expireDate = Jalalian::fromFormat('Y-m-d', $requestData['expireDate'])->toCarbon();
//        $birthDate = Jalalian::fromFormat('Y-m-d', $requestData['birthDate'])->toCarbon();
//
//        // جایگزینی تاریخ‌های جلالی با تاریخ‌های میلادی در آرایه مقداردهی اولیه
//        $requestData['startDate'] = $startDate;
//        $requestData['expireDate'] = $expireDate;
//        $requestData['birthDate'] = $birthDate;
//        $putPersonalInfo->save();
//        return back()->with('success', 'اطلاعات با موفقیت ثبت شد.');
//    } catch (SoapFault $e) {
//        return back()->with('error', 'خطا در ارتباط با وب سرویس: ' . $e->getMessage());
//    } catch (Exception $e) {
//        return back()->with('error', 'خطا: ' . $e->getMessage());
//    }
//}
//
//////////////////////////////////////////////////////////////// add table sql ubuntu
//CREATE TABLE register_numbers (
//    id INT AUTO_INCREMENT PRIMARY KEY,
//    Username VARCHAR(255) COMMENT 'نام کاربری',
//    Password VARCHAR(255) COMMENT 'رمز عبور',
//    number VARCHAR(255) COMMENT 'شماره',
//    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
//    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//);
//
//
/////////////////////////////////////////////////////////////////// postman
// {
//     "_id": "604a3774ee6b45c41fc3c62d",
//    "index": 0,
//    "name": "Melisa Edwards",
//    "friends": [
//      {
//          "id": 0,
//        "name": "Traci Brennan"
//      },
//      {
//          "id": 1,
//        "name": "Solomon Hayes"
//      },
//      {
//          "id": 2,
//        "name": "Simpson Santiago"
//      }
//    ],
//    "greeting": "Hello, Melisa Edwards! You have 8 unread messages."
//  }
//
/////////////////////////////////////////////////////////////////////////// ??
//private function getTo($program)
//{
//    return $program->sms->sends->pluck('to')->first() ?? json_decode($program->data)->to ?? '-';
//}
//
///////////////////////////////////////////////////////////////////////// cors nuxt
//https://dev.to/arielmejiadev/nuxtjs-laravel-solving-cors-issue-hh3
/////////////////////////////////////////////////////////////////////////////  status order
//enum StatusOrder: string
//{
//    case awaiting = 'انتظار';
//    case preparing = 'آماده سازی';
//    case ready = 'آماده';
//    case delivered = 'تحویل داده شده';
//}
////////////////////////////////////////////////////////// request array rule
//public function rules()
//{
//    return [
//        'options' => 'required|array',
//        'options.*.name' => 'required|string|max:255',
//        'options.*.price' => 'required|numeric',
//    ];
//}
//
//
////////////////////////////////////////////////////////////// postman array
//{
//    "user_id": 1,
//    "total_amount": 100.00,
//    "status": "pending",
//    "items": [
//        {
//            "product_id": 1,
//            "option_id": 2,
//            "quantity": 3
//        },
//        {
//            "product_id": 2,
//            "option_id": 1,
//            "quantity": 2
//        }
//    ]
//}
///////////////////////////////////////////////////////////////////////////// has role
//اگر یک رول بود چک کن اگر ارایه بود ارایه حلقه بزن
//   public function hasRole($role)
//{
//    if (is_string($role)) {
//        return $this->roles->contains('name', $role);
//    }
////
//    foreach ($role as $r) {
//        if ($this->hasRole($r->name)) {
//            return true;
//        }
//
//    }
//    return false;
//
//
//    //return $role->intersect($this->roles)->count();
//}
//
///////////////////////////////////////////////////////////////////////////// ??
//اگر پیدا کرد بده اگر نه دکود کن فیلد جیسان to  را اگر نه - بزار
//private function getTo($program)
//{
//    return $program->sms->sends->pluck('to')->first() ?? json_decode($program->data)->to ?? '-';
//}
//
/////////////////////////////////////////////////////////////////////////////
//class RedisLogger { public function handle($request, Closure $next) {
//    // در اینجا Redis subscribe کنید و پیام‌ها را لاگ کنید
//    Redis::subscribe(['channel-name'], function ($message) {
//// لاگ کردن پیام در اینجا \Log::info('Received Redis message: ' . $message); });
//        return $next($request); } }
/////////////////////////////////////////////////////////////////////////////277 faregh
///////////////////////////////////////////////////////////////////////////// linux ubuntu
//// delete
//sudo rm -r /var/www/mytetasms/database/resources/*
///////////////////////////////////////////////////////////////////////////// payاamak
//اکشن هایی که برابر یک هستند را صفر کن
//اکشن یک یعنی در حال ارسال
//اکشن صفر یعنی دیگه نداره ارسال کنه پس پلی نمایش میده
//return Program::query()->where("user_id",31)->where("action",1)->update([
//  "action"=>0
//]);
//
///////////////////////////////////////////////////////////////////////////// whereIn update
//به ازای ایدی هایی که پیدا میکند وضعیت تغییر کند
//Send::whereIn('id', $this->send_number)->update(['status' => 20]);
//
/////////////////////////////////////////////////////////////////////////////
//public function delete_11(){
//   $check = ReceiveSms::query()->where('message', "11")->get();
//   return response()->json($check);
//}
//
///////////////////////////////////////////////////////////////////////////// delete
//میخوام هر کاربر که برنامه دارد فقط ۱۰ تا داشته باشد بیشتر از اون پاک کند
//$users = User::all();
//
//foreach ($users as $user) {
//   $excessPrograms = Program
//       ::where('user_id', $user->id)
//       ->where('is_deleted', 0)
//       ->where(function ($query) {
//           $query->where('total_count', '>', 1)
//               ->orWhereNotNull('schedule');
//       })
//       ->whereHas('sms')
//       ->latest()
//       ->skip(10)
//       ->take(PHP_INT_MAX) // برای بازیابی تمام رکوردها بعد از عبور از skip(10)
//       ->get();
//
//   foreach ($excessPrograms as $program) {
//       $program->delete();
//   }
//}
//
//return "done";
//
///////////////////////////////////////////////////////////////////////////// time query
//مدت زمان اجرا کویری
//$startTime = microtime(true);
//DB::enableQueryLog();
//
////////////////////////////////////////////////////////////////////////////////////// log
//use Illuminate\Support\Facades\Log;
//info();
//
///////////////////////////////////////////////////////////////////////////////////////////// whereRelation
//کامنت پست هایی رو بده که یک ساعت از زمان حال گذشته باشد
//$posts = Post::whereRelation(
//'comments', 'created_at', '>=', now()->subHour()
//)->get();
//
////////////////////////////////////////////////////////////////////////////// call job artisan
//use Illuminate\Support\Facades\Artisan;
//
//Route::get('/run-job', function () {
//    // اجرای جاب
//    Artisan::call('queue:work', [
//        '--queue' => 'default', // نام صفی که جاب در آن قرار دارد
//        '--tries' => 1, // تعداد تلاش‌ها برای اجرای جاب
//    ]);
//
//    return 'Job is running...';
//});
//
//
//////////////////////////////////////////////////////// now()->subDay()
//تا یک روز قبل از تاریخ فعلی
//$notice = Notice::where([
//   ['type', '=', 'verify_code'],
//   ['request', 'LIKE', '%' . $mobile . '%'],
//   ['created_at','>=',DB::raw('CURDATE() - INTERVAL 1 DAY ')]
//])->orderBy('notice_id', 'DESC')->get();
//
//$notice = Notice::where('type', 'verify_code')
//   ->where('request', 'LIKE', '%' . $mobile . '%')
//   ->where('created_at', '>=', now()->subDay())
//   ->orderBy('notice_id', 'DESC')
//   ->get();
//
//////////////////////////////////////////////////////// check property in field
//if(($role->intersect(['citizen'])->isNotEmpty()) && ($action=='cancelled'))
//{
//   $order->state='customer';
//}
//or
//if (in_array('citizen', $role) && $action === 'cancelled') {
//    $order->state = 'customer';
//}
//or
//$order->state = (in_array('citizen', $role) && $action === 'cancelled') ? 'customer' : $order->state;
//or
//function isCitizenCancelled($role, $action) {
//    return in_array('citizen', $role) && $action === 'cancelled';
//}
//
//if (isCitizenCancelled($role, $action)) {
//    $order->state = 'customer';
//} else {
//    // دستورات دیگری که در صورت عدم برقراری شرط اجرا می‌شوند.
//}
//
//
///////////////////////////////////////////////////////////////////// lumen serve
//
//php -S localhost:8000 -t public/
//
///////////////////////////////////////////////////////////////////// search filter
//class ProductController
//{
//   public function index(Request $request)
//   {
//       $products = \Cache::remember('products', 60 * 30, function () use ($request) {
//           return Product::all();
//       });
//
//       if ($s = $request->input('s')) {
//           $products = $products->filter(function (Product $product) use ($s) {
//               return Str::contains($product->title, $s) || Str::contains($product->description, $s);
//           });
//       }
//
//       return ProductResource::collection($products);
//   }
//}
//
/////////////////////////////////////////////////////////////////////
//interface StateInterface
//{
//   public function value(): string;
//}
//
/////PaymentState
//enum PaymentState: string implements StateInterface
//{
//    case Created    = 'created';
//    case Processing = 'processing';
//    case Completed  = 'completed';
//    case Failed     = 'failed';
//    case Canceled   = 'canceled';
//    case Refunded   = 'refunded';
//
//    public function value(): string
//    {
//        return $this->value;
//    }
//}
////// controller
//OrderState::Refunded->value()
//
/////////////////////////////////////////////////////////////////////
//قواعد نگارشی
//[] براکت {} بریس ; سیمیکالن : کالن
/////////////////////////////////////////////////////////////////////
//جنسیت رو بره از cast بخونه و اگر شماره شناسنامه نداشت یا برابر صفر بود  بره کد ملی جایگزینش کنه
//public function insert_customer($nationalCode, array $headers)
//{
//   $url = config("fanavaran.lookup.insert-customer");
//   $method = 'post';
//
//$identityCustomer = IdentityCustomer::where('nin', $nationalCode)->first();
//$data = [
//   "name" => $identityCustomer->name,
//   "gender_id" => $identityCustomer->gender == 0 ? GenderEnum::MALE->value : GenderEnum::FEMALE->value,
//
//   "identity_no" => ($identityCustomer->shenasname_no == null || $identityCustomer->shenasname_no == 0) ? $identityCustomer->nin : (string)$identityCustomer->shenasname_no
//];
//$response = $this->sendHttp($method, $url, $data, $headers);
//if ($response->OK()) {
//   $get_core_id = json_decode($response->body(), true);
//   return $get_core_id['core_id'];
//}
//
//protected function sendHttp($method, $url, $data, $headers)
//{
//   try {
//   $response = Http::withHeaders(
//       $headers
//   )->withOptions(["verify" => false])
//       ->$method($url, $data );
//
//       return $response;
//
//   } catch (\Exception $exception) {
//       return response()->json(["success" => "false", "message" => $exception->getMessage(), "data" => false]);
//   }
//}
//
///////////////////////////////////////////////////////////////////// convert date by substr
//$date = (string)$identityCustomer->birth_date;//1996/03/05
//$data = [
//   "birth_year" => substr($date, 0, 4),//چهار رقم اول
//   "birth_month" => substr($date, 4, 2),//دو رقم بعدی
//   "birth_day" => substr($date, 6, 2),//دو رقم بعدی
//]
/////////////////////////////////////////////////////////// convert date to strtotime
//
//'updated_at' => strtotime(now())
//
///////////////////////////////////////////////////////////////////// with
//order->order_info->detail
//میخوام اخرین مقدار ریلیشن را بگیرم بهمراه ریلیشنی که داره و از اخر نمایش بدم در صفحه
//   function index()
//   {
//       $get_orders = Order::where("insurance_line_id", 4)
//       ->whereHas('order_info')->with(['order_info' => function ($o) {
//           $o->latest()->first();
//           $o->with('detail');
//       }])->orderBy('id_order', 'desc')->get();
//
//       if (!$get_orders) {
//           return response()->json(["success" => "false", "message" => Response::HTTP_INTERNAL_SERVER_ERROR, "data" => false]);
//       }
//
////        dd($get_orders->toArray());
//
//       return view("dashboardadmin::orders.list", compact("get_orders"));
//
//   }
//
///////////////////////////////////////////////////////////////////////////////////// property null
//می تونه پراپرتی نال باشه
///**
//* @var null|int
//*/
//    public ?int $AgentId;
//
/////////////////////////////////////////////////////////////////////////////////////// dto
//// class dto
//namespace App\DTO;
//
//class UserDTO
//{
//    public string $name;
//    public string $email;
//    public string $password;
//
//    public function __construct(string $name, string $email, string $password)
//    {
//        $this->name = $name;
//        $this->email = $email;
//        $this->password = $password;
//    }
//}
//// controller
//class UserService
//{
//    public function createUser(UserDTO $userDTO): User
//    {
//        $user = new User();
//        $user->name = $userDTO->name;
//        $user->email = $userDTO->email;
//        $user->password = $userDTO->password;
//        $user->save();
//
//        return $user;
//    }
//}
////service
//class UserService
//{
//    public function createUser(UserDTO $userDTO): User
//    {
//        $user = new User();
//        $user->name = $userDTO->name;
//        $user->email = $userDTO->email;
//        $user->password = $userDTO->password;
//        $user->save();
//
//        return $user;
//    }
//}
/////////////////////////////////////////////////////////////// Through
//میخوایم از مدل a به b و از b به c برسیم
////
//mechanics
//id - integer
//name - string
//
//cars
//id - integer
//model - string
//mechanic_id - integer
//
//owners
//id - integer
//name - string
//car_id - integer
////Mechanic
//class Mechanic extends Model
//{
//    /**
//     * Get the car's owner.
//     */
//    public function carOwner(): HasOneThrough
//    {
//        return $this->hasOneThrough(Owner::class, Car::class);
//    }
//}
//
//
////or
//class Mechanic extends Model
//{
//    /**
//     * Get the car's owner.
//     */
//    public function carOwner(): HasOneThrough
//    {
//        return $this->hasOneThrough(
//            Owner::class,
//            Car::class,
//            'mechanic_id', // Foreign key on the cars table...
//            'car_id', // Foreign key on the owners table...
//            'id', // Local key on the mechanics table...
//            'id' // Local key on the cars table...
//        );
//    }
//}
//// controller
//return $this->through('cars')->has('owner');
///////////////////////////////////////////////////////////
//projects
//id - integer
//name - string
//
//environments
//id - integer
//project_id - integer
//name - string
//
//deployments
//id - integer
//environment_id - integer
//commit_hash - string
//// Project
//class Project extends Model
//{
//    /**
//     * Get all of the deployments for the project.
//     */
//    public function deployments(): HasManyThrough
//    {
//        return $this->hasManyThrough(Deployment::class, Environment::class);
//    }
//}
////or
//class Project extends Model
//{
//    public function deployments(): HasManyThrough
//    {
//        return $this->hasManyThrough(
//            Deployment::class,
//            Environment::class,
//            'project_id', // Foreign key on the environments table...
//            'environment_id', // Foreign key on the deployments table...
//            'id', // Local key on the projects table...
//            'id' // Local key on the environments table...
//        );
//    }
//}
//
//
//// controller
//return $this->through('environments')->has('deployments');
//
//
/////////////////////////////////////////////////////////////////////////////////////////
//اگر بخواهیم کویری ها را ببینیم
////PostController
//public function __invoke()
//{
//    ray()->queries();
//    $posts=Post::with(‘comments’)->get();
//    return PostResource::collection($posts);
//}
////CommentResource
//public function toArray($request)
//{
//    return [
//        ‘name’=>$this->name,
//        ‘comment_text=>$this->comment_text
//    ];
//}
////PostResource
//public function toArray($request)
//{
//    return [
//        ‘id’=>$this->id,
//        ‘title’=>$this->title,
//        ‘comments’=>CommentResource::collection($this->whenLoaded(‘comments’)),
//    ]
//}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//sisu
////////////////////////////////////////////
////shows
//https://www.youtube.com/watch?v=wOnv-BMPv-w
/////////////////////////////////////////////////////////////// alias
//نحوه تعریف alias در powershell:
//function pa { php artisan $args }
//
//حالا میتوان بجای دستور «php artisan» از دستور «pa» استفاده کرد مثلا:
//pa serve
//
/////////////////////////////////////////////////////////////// isPurchased
//چک کردن خرید کاربر
//class Book extends Model
//public function isPurchased()
//{
//    return BookPurchase::where('user_id', Auth::id())->where('book_id', $this->id)->exists();
//}
//
//////////////////////////////////////////////////////////////// callback
//public function payment_order($id_order,$api = false,$apiV = 1,$robot = null) {
//    $order = Orders::where('id',$id_order)->where('id_user',Auth::user()->id)->whereNull('payment')->first();
//    if($api == true)
//        $CallbackURL = asset('api/v'.$apiV)."/order/$order->id/callback";
//    elseif(isset($robot))
//        $CallbackURL = asset('')."telegram/$robot/order/$order->id/callback";
//    else{
//        $cryptocurrency = \App\Cryptocurrency::all()->pluck('name')->toArray();
//        if(in_array($order->orders_model,$cryptocurrency))
//            $CallbackURL = asset('')."crypto/"."$order->orders_model/$order->type/$order->id/callback";
//        else
//            $CallbackURL = asset('')."$order->orders_model/$order->type/$order->id/callback";
//    }
//}
//
///////////////////////////////////////////////////////////////// url session
//
//public static function createLink($var){
//    //dd(session('active_tanent'));
//    if(session('active_tanent')){
//        return url("client/".session('active_tanent')."/admin/".$var);
//    }
//    return null ;
//}
//////////////////////////////////////////////////////// acid beginTransaction
//use Illuminate\Support\Facades\DB;
//
//DB::beginTransaction();
//
//try {
//    // انجام عملیات‌های مورد نیاز
//
//    // مثال: ایجاد یک رکورد جدید
//    DB::table('users')->insert([
//        'name' => 'John Doe',
//        'email' => 'johndoe@example.com',
//        'password' => bcrypt('secret'),
//    ]);
//
//    // مثال: به‌روزرسانی یک رکورد
//    DB::table('products')
//        ->where('price', '>', 100)
//        ->update(['discounted' => true]);
//
//    // Commit تراکنش
//    DB::commit();
//} catch (\Exception $e) {
//    // در صورت بروز خطا، Rollback تراکنش
//    DB::rollback();
//    throw $e;
//}
//
//
//////////////////////////////////////////////////// job schedule notification
//public function registerUser(Request $request){
//    // ثبت کاربر
//    $user = User::create([
//        'name' => $request->input('name'),
//        'email' => $request->input('email'),
//        // سایر فیلدهای کاربر
//    ]);
//
//    // انجام عملیات دیگر برای ثبت کاربر
//
//    // ایجاد کار در ردیس
//    $jobData = ['userId' => $user->id];
//    $jobId = Str::random(16); // یک شناسه تصادفی برای شناسایی کار
//    Redis::setex($jobId, 120, json_encode($jobData)); // ذخیره کار در ردیس برای 2 دقیقه
//    dispatch(new SendNotification($user->id))->delay(now()->addMinutes(2)); // قرار دادن کار در صف لاراول برای اجرا
//
//    // ارسال پاسخ به کاربر یا انتقال به صفحه دیگر
//    return redirect()->route('home')->with('success', 'ثبت نام با موفقیت انجام شد.');
//}
//////////////////UserRegisteredNotification
//class UserRegisteredNotification extends Notification {
//    use Queueable;
//    protected $user;
//    public function __construct($user) {
//        $this->user = $user; }
//    public function via($notifiable) {
//        return ['mail', 'database'];
//// روش‌های ارسال نوتیفیکیشن، مانند ایمیل و ذخیره در پایگاه داده
//    }
//    public function toMail($notifiable) {
//        return (new MailMessage)
//            ->subject('ثبت نام موفقیت‌آمیز')
//            ->greeting('سلام ' . $this->user->name)
//            ->line('ثبت نام شما با موفقیت انجام شد.')
//            ->line('از شما بابت عضویت تشکر می‌کنیم.')
//            ->action('ورود به سایت', url('/'))
//            ->line('با تشکر از شما!'); }
//    public function toArray($notifiable) {
//        return [
//            'message' => 'ثبت نام شما با موفقیت انجام شد.'
//        ]; } }
//
//////////////////////////////////////////////////// wallet sharge
//اگر مقدار ولت کوچکتر یا برابر  صفر بود مقدار صفر را ست کنید برگردان در غیر اینصورت مبلغ را به عنوان مبلغ ولت ست کن
//// Discount
//protected const DECIMAL_CONVERTER = 0.01; // Example: 9% discount: 1000 * (9 * 0.01) = 90
//protected Invoice $invoice;
//protected int $percent;
//
//protected function toDecimal(int $computable): float|int
//{
//    return $computable * self::DECIMAL_CONVERTER;
//}
//
//public function apply(): Invoice
//{
//    if ($this->percent <= 0) {
//        $this->invoice->setDiscountAmount(0);
//        return $this->invoice;
//    }
//    $amount = $this->amount();
//    $this->invoice->setDiscountAmount($amount);
//    // Since tax must be applied to the final price
//    // we will reduce the discount from the final price.
//    $this->invoice->setTotal(
//        $this->invoice->getTotal() - $amount
//    );
//    return $this->invoice;
//}
//
//public function amount(): int|float
//{
//    return $this->invoice->getSubtotal() * $this->toDecimal($this->percent);
//}
//
//public function getSubtotal(): int
//{
//    return $this->subtotal;
//}
//
////////////////////////////////////////////////////// check array int
//اگر این اعداد اینتیجر در ارایه باشد برگردان
/////PaymentVerifyController
//public function __invoke(Request $request)
//{
//    if ($request->isNotFilled('Authority')) {
//        return back();
//    }
//    $pay = Pay::byAuthority($request->input('Authority'))->firstOrFail();
//    $pay->verify();
////todo اینجا پرداخت موفق
//    if ($pay->successful()) {
//        $pay->update(['status' => 'پرداخت موفق']);
//    }
//}
////////////Pay
//public function successful(): bool
//{
//    return in_array((int)$this->code, [
//        100,
//        101,
//    ]);
//}
//public function scopeByAuthority(Builder $query, string $authority): Builder
//{
//    return $query->where('authority', $authority);
//}
////////////////////////////////////////////////////////////////////////////////////// successfulOnce
//اگر مقدار پراپرتی مدل برابر عدد ۱۰۰ بود افزایش پیدا کند
////Pay
//public function successfulOnce(): bool
//{
//    return 100 === $this->code;
//}
////PayController
// public function __invoke(Request $request)
//{
//    $pay = Pay::where('authority', $request->input('Authority'))->first();
//
//اگر authority برابر ۱۰۰ مبلغ افزایش پیدا کند
//    if ($pay->successfulOnce()) {
//        user()->deposit($pay->amount);
//    }
///////////////////////////////////////////////////check  set property
//اگر پراپرتی is_paid  ست شده بود
//public function isPaid(): bool
//{
//return isset($this->is_paid);
//}
//
//public function isForward(): bool
//{
//return filled($this->is_paid);
//}
//
///////////////////////////////////////////////////// soketi realtime posts
//npm install --save laravel-echo socket.io-client
////config/broadcasting
//'default' => env('BROADCAST_DRIVER', 'socketio'),
////
//php artisan make:event PostUpdated
//
//php artisan make:event PostUpdated
//// event PostUpdated
//class PostUpdated implements ShouldBroadcast {
//use Dispatchable, InteractsWithSockets, SerializesModels;
//public $post;
//public function __construct(Post $post) {
//$this->post = $post;
//}
//public function broadcastOn() {
//return new Channel('posts');
//} }
////
//php artisan make:listener PostUpdatedListener --event=PostUpdated
//
////listener PostUpdatedListener
//class PostUpdatedListener { /
//public function handle(PostUpdated $event) { // ارسال رویداد به کلاینت‌ها broadcast($event);
//} }
////blade
//<div id="app">
// <ul>
//     <li v-for="post in posts" :key="post.id">
//         <img :src="post.image" alt="Post Image">
//         <h3>@{{ post.name }}</h3>
//         <p>@{{ post.date }}</p>
//     </li>
// </ul>
//</div>
//
//<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
//<script src="https://cdn.socket.io/3.1.3/socket.io.min.js"></script>
//<script>
// import Echo from 'laravel-echo';
//
// window.io = require('socket.io-client');
//
// window.Echo = new Echo({
//     broadcaster: 'socket.io',
//     host: window.location.hostname + ':6001',
//     auth: {
//         headers: {
//             'Authorization': 'Bearer ' + '{{ auth()->user()->api_token }}'
//         }
//     }
// });
//
// new Vue({
//     el: '#app',
//     data: {
//         posts: []
//     },
//     mounted() {
//         this.fetchPosts();
//
//         window.Echo.channel('posts')
//             .listen('.post.updated', (event) => {
//                 this.fetchPosts();
//             });
//     },
//     methods: {
//         fetchPosts() {
//             axios.get('/get-posts')
//                 .then(response => {
//                     this.posts = response.data;
//                 })
//                 .catch(error => {
//                     console.log(error);
//                 });
//         }
//     }
// });
//</script>
//
////controller
//public function update(Post $post) {
//event(new PostUpdated($post));
//}
//////////////////////////////////////////////////// schedule delete
//پاک کردن استوری همه کاربران در ساعت فعلی ادمین
//
//class Kernel extends ConsoleKernel
//{
///**
// * Define the application's command schedule.
// *
// * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
// * @return void
// */
//protected function schedule(Schedule $schedule)
//{
//     $schedule->command('inspire')->hourly();
//    $schedule->call(function () {
//        $storyRepo = new StoryRepository();
//        $stories = $storyRepo->all();
//        foreach ($stories as $story){
//            if(  Carbon::now()->hour == $story->created_at->hour)
//                $storyRepo->delete($story->id);
//        }
//    })->hourly();
//}
//
///////////////////////////////////////////count comment post
//public function commentsCount($post):int
//{
//return count($post->comments()->get());
//}
////////////////////////////////////// policy
//class StoryRepository extends BaseRepository implements \App\Repositories\Contracts\IStory
//{
//اگر دیتا image , text نداشت اوکیه اگر دیتا نداشت اوکیه
//public function check($data): bool
//{
//if(!array_key_exists('image',$data) && array_key_exists('text',$data))
//    return true;
//if($data==null)
//    return true;
//return false;
//}
////StoryController
//public function create(StoryRequest $request): \Illuminate\Http\Response
//{
//$user = auth()->user();
//$data = $request->all();
//if($this->story->check($data)){
//    return self::failure('check your data',400);
//}
//if(array_key_exists('image',$data)){
//    $data['image'] = self::uploadImages($data['image'],(string)auth()->user()->id,"stories");
//}
//$data['user_id'] = $user->id;
//$story = $this->story->create($data);
//
//return self::returnData('story',new StoryResource($story),' story created successfully',200);
//}
//
////////////////////////////////////////// policy validate check data
//class StoryRepository extends BaseRepository implements \App\Repositories\Contracts\IStory
//{
//کاربر فقط بتونه کامنت دیگران را تایید کنه
//public function isVisitor($id): bool
//{
//$comment = $this->find($id);
//if($comment->user_id == auth()->user()->id)
//    return false;
//return true;
//}
///// resource
//public function toArray($request)
//{
//$user = new UserRepository();
//$user = $user->find($this->user_id);
//$story = new StoryRepository();
//return [
//    'id'=>$this->id,
//    'is_visitor'=> $story->isVisitor($this),
//    'text'=>$this->text,
//    'image_url'=>$this->image,
//    'user'=>$user,
//];
//}
//
////////////////////////////////////////////////// while http
//میخوام از ایدی ۱ تا ایدی n به سرور بزنه تا زمانیکه جوابش غیر از not found  باشد
//
//public function plans(Request $request)
//
//{
//    $getBearerToken = resolve(FanavaranAuthController::class)->fanavaran()->getData();
//
//    $headers = [
//        'authenticationToken' => $getBearerToken,
////            config("fanavaran.headers")
//        'CorpId' => '1438',//شناسه ي شرکت
//        'ContractId' => '2',//شماره ي قرارداد
//        'Content-Type' => 'application/json',
//        'Location' => '1'//کد شعبه
//    ];
//
//    $PolicyId = 10000;
//    $url = config("fanavaran.lookup.vehicle-hull-policies") . "/" . $PolicyId . "/plans";
//    $method = "get";
//    $response = self::sendHttpRequest($method, $url, $headers);
//
//    $responseArray = json_decode($response, true);
//
//    while ($responseArray['Message'] !== "کد پیگیری خطا: 613697\r\n1402/03/2816:39:18:797\r\nکد پیگیری خطا : 373329519 بیمه نامه بدنه یافت نشد ./") {
//        $PolicyId++;
//        $url = config("fanavaran.lookup.vehicle-hull-policies") . "/" . $PolicyId . "/plans";
//        $response = self::sendHttpRequest($method, $url, $headers);
//        $responseArray = json_decode($response, true);
//    }
//
//    return response()->json(['data' => $response], Response::HTTP_OK);
//
//
//}
//
////////////////////////////////////////////////// XssSanitizer
//namespace App\Http\Middleware;
//use Closure;
//class XssSanitizer
//{
//
//public function handle(\Illuminate\Http\Request $request, Closure $next)
//{
//    if (!in_array(strtolower($request->method()), ['put', 'post'])) {
//        return $next($request);
//    }
//    $input = $request->all();
//    array_walk_recursive($input, function(&$input,$key) {
//        if(isset($input) && $input!=null && $key !='TextPopup')
//            $input = strip_tags($input);
//    });
//    $request->merge($input);
//    return $next($request);
//}
//}
//
///////////////////////////////////////////////// VerifyCsrfToken
//وقتی داری از فرانت به روت ارسال میکنی و خطای csrf میدهد
//class VerifyCsrfToken extends Middleware
//{
///**
// * The URIs that should be excluded from CSRF verification.
// *
// * @var array
// */
//protected $except = [
//    'perfectmoney/sell/*',
//    'wallets/callback/*',
//    '*/buy/*/callback',
//
//
//    'api/*/order/*/callback',
//    'api/*/wallets/increase/callback/*',
//    'api/*/perfectmoney/sell/*',
//
//    'telegram/*'
//];
//}
//
//////////////////////////////////////////////// ip iran
//$user = Auth::user();
//$ip = $request->ip();
//$IP_Access = \App\Settings::where('name','IP_Access')->first()['value'];
//$IP_Iran = \App\Settings::where('name','IP_Iran')->first()['value'];
//
//if($IP_Iran == 'on'){
//$ipinfo = \Location::get($ip);
//if($ipinfo != false && $ipinfo->countryCode != 'IR'){
//    return \Response::view('errors.IpIran');
//}
//}
//
//////////////////////////////////////////////// add validate
//برای اینکه بتوانیم ولیدیت جدید به لاراول اضافه کنیم باید در پروایدر ثبت کنیم
//class AppServiceProvider extends ServiceProvider
//
//public function boot()
//{
//Validator::extend('mobile', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    if(substr( $inputs[$attribute],0,2) == '09')
//        return true;
//    else
//        return false;
//});
//
//Validator::extend('farsi', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    $farsi_Char="/^[a-zA-Z0-9]+$/";
//    if(preg_match($farsi_Char,$inputs[$attribute]) | preg_match($farsi_Char,$inputs[$attribute]))
//        return false;
//    else
//        return true;
//});
//Validator::extend('phone', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    if(substr( $inputs[$attribute],0,2) != '09')
//        return true;
//    else
//        return false;
//});
//}
////CryptoController
//function addCrypto(Request $request){
//$validator = \Validator::make($request->all(), [
//'name_fa' => 'required|farsi',
//]);
//
////////////////////////////////////////////////////////////////////////////before curl convert param
//قبل از اینکه دیتا کرل شود ابتدا در متد کانورت حروف فارسی به عربی تبدیل می شود سپس ارسال می شود
//
//public function sendRequest() {
//$client = new Client(); $url = 'آدرس API';
//API $data = [ 'text' =>' ' ];
//$convertedText = $this->convertToArabic($data['text']);
//$data['text'] = $convertedText;
//cURL $response = $client->post($url, [ 'json' => $data ]);
//$result = json_decode($response->getBody(), true); return $result;
//}
//public function convertToArabic($text) {
//$search = ['ی', 'ک'];
//$replace = ['ي', 'ك'];
//$convertedText = str_replace($search, $replace, $text);
//return $convertedText;
//}
////////////////////////////////////////////////////////////////////////////////  json array_search array_column
//فایل جیسون داریم ابتدا دکود میکنیم تا آرایه بشه بعد   جدول Cryptocurrency لیست میکنیم بعد name این جدول را با name جیسان موجود چک میکنیم اگر همچین نامی در جیسان بود ولی price نداشت اون ردیف لحاظ نشه
//// storage/app/PriceForUser/Price.json
//{"name":"dogecoin","fee_buy":"88","fee_sell":"88","price":"88","stock":29398.8,"min_buy":3298.6,"transfer_fee":"1"},
//
////
//$path = 'PriceForUser/Price.json';
//$coin_info = json_decode(file_get_contents(storage_path('app/' . $path)));
//$cryptos = \App\Cryptocurrency::select('id', 'name', 'name_fa')->get()->toArray();
//foreach ($cryptos as $key => $crypto) {
//$indexArrayFind = array_search($crypto['name'], array_column($coin_info, 'name'));
//if (!isset($coin_info[$indexArrayFind]->price)) {
//unset($cryptos[$key]);
//continue;
//}
//
//////////////////////////////////////////////////////////////////////////// sum payment
//$result = (object)array();
//$result->SumWithdrawCryptoDay = TransactionCrypto::where('id_user', Auth::user()->id)->where('created_at', '<', date('Y-m-d H:i:s'))
//->where('created_at', '>', date('Y-m-d H:i:s', strtotime("-1 days")))->where('type', 'withdraw')->whereNotIn('id', $ids_fail)
//->whereIn('status', ['success', 'pending'])->sum('amount_toman');
//
//////////////////////////////////////////////////////////////// get data for ip
//گرفتن دیتا برای ip خاص
//function getCountUser(Request $request){
//$ipArray = array('195.201.71.232');
//if (in_array($request->ip(), $ipArray) || 1 == 1):
//    $result = [];
//    $result['users'] = User::count();
//    return response()->json((object)$result);
//else:
//    abort(404);
//endif;
//}
//
/////////////////////////////////////////////////////////// json
////این تابع به فایل JSON با نام "dashboard.json" در مسیر "storage/app/PriceForUser/" دسترسی دارد. اگر فایل وجود داشته باشد، اطلاعات آن را می‌خواند و به صورت یک شیء از نوع stdClass تبدیل می‌کند. سپس زمان آخرین بروزرسانی فایل را دریافت می‌کند. اگر زمان آخرین بروزرسانی به همراه مقدار time_json_update از زمان فعلی کمتر یا مساوی باشد، نتیجه را به صورت JSON برمی‌گرداند.
//
//// route
//Route::post('/stock', 'DashboardController@check_stock');
//// DashboardController
//public $time_json_update=600;
//
//public function check_stock()
//{
//  $path = storage_path('app/PriceForUser/dashboard.json');
//  if (file_exists($path)) {
//      $result = (object)json_decode(file_get_contents($path));
//      $lastUpdate = filemtime($path);
//      if ( ($lastUpdate + $this->time_json_update) >= time())
//          return response()->json((object)$result);
//  }
//}
//
////////////////////////////////////////////////////////////////// __construct  middleware
////PostController.php
//public function __construct()
//{
//$this->middleware(function ($request, $next) {
//    if(Auth::user()->access_notification ==1 || Auth::user()->role == 'admin')
//        return $next($request);
//    else
//        abort(404);
//});
//}
//////////////////////////////////////////////////////////////////// …
//اگر تعدادی پارامتر به متد پاس بدیم
//public function syncRoles(...$roles)
//{
//$this->roles()->detach();
//return $this->assignRole($roles);
//}
/////////////////////////////////////////////////////////// send param to get
//ارسال پارامتر در متد get
//x.com?token=302|rEcFIKyyH2j4iOyFy7R0Nn0T9dHuNVvaFdEyjta8
///////////////////////////////////////////////////////// havingRaw groupBy
//از جدول سفارشات کل مبلغ دپارتمان را در total_sales بریز
//$orders = DB::table('orders')
//->select('department', DB::raw('SUM(price) as total_sales'))
//->groupBy('department')
//->havingRaw('SUM(price) > ?', [2500])
//->get();
//
////////////////////////////////////////////////////////////////////// delete automatic record
//به صورت خودکار رکورد های بیشتر از ۳۰ دقیقه قبل را پاک میکند
//class SessionApi extends Model
//{
//
//public function __construct(array $attributes = [])
//{
//parent::__construct($attributes);
//
//SessionApi::where('created_at','<',date('Y-m-d H:i:s',strtotime('- 30 minute')))->delete();
//}
//
//////////////////////////////////curl
//function Curl($url,$params =[], $authorization = null,$method = 'POST'){
//$ch = curl_init();
//curl_setopt($ch,CURLOPT_URL,$url);
//
//$headers = array(
//    'Accept: application/json',
//    'charset: utf-8',
//    'Content-Type: application/json',
//    $authorization
//);
//
//curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_POST, true);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($params));
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//$response = (object) json_decode( curl_exec($ch) );
//$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//$response->statusCodeHttp = $httpcode??404;
////array_push($response,$httpcode);
//curl_close($ch);
//
//return $response;
//}
//
////////////////////////////////////////////////////////////// middleware check token microservice
//public function handle(Request $request, Closure $next): Response
//{
//
//    $token = $request->header('Authorization');
//    $response = Http::withHeaders([
//        'Authorization' => 'Bearer ' . $token,
////            'Authorization' => 'Bearer ' . "159|TdfYUTBrVNlp1GFNIQduR2eT3qIPaJyh5QiY1MlS",
//
//    ])->post('https://gateway.yarhis.ir/api/authservice/check'); // آدرس API کاربر در پروژه ۱
//
//    $obj=json_decode($response->body());
//        if(!is_object($obj))
//        {
//            return response()->json(['error' => 'Forbidden'], Response::HTTP_FORBIDDEN);
//
//        }
//
//
//    return $next($request);
//}
//
////////////////////////////////////////////////////////// check user
//$user = Auth::user();
//     $roles = $user->roles()->pluck('name');
//     $permissions = $user->permissions()->pluck('name');
//
//     $data=[];
//
//     if ($roles->count() > 1) {
//
//         $data['role'] = implode(', ', $roles->toArray());
//
//     } else {
//
//         $data['role'] = $roles->first();
//     }
//
//     if ($permissions->count() > 1) {
//
//         $data['permission'] = implode(', ', $permissions->toArray());
//
//     } else {
//
//         $data['permission'] = $permissions->first();
//     }
//     if ($user) {
//         return response()->json($data);
//     }
//     return response()->json('You are not logged in')->isForbidden();
////////////////////////////////////////////////////////// insert sql
//INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES ('1', 'Modules\\AuthService\\Entities\\AuthUser', '7'), ('2', 'Modules\\AuthService\\Entities\\AuthUser', '7');
//
//////////////////////////////////////////////////////////////////////////////// search DB
//public function searchpos() {
//     $searchObj = DB::table('dependants')
//                     ->join('policies', 'dependants.policy_id', '=', 'policies.id')
//                     ->select('policies.*', 'dependants.*')
//                     ->where('policies.policy_no', 'like', '%' . $this->request->policy_no . '%')
//                     ->where('dependants.affiliate_no', 'like', '%' . $this->request->affiliate_no . '%')
//                     ->where('dependants.name', 'like', '%' . $this->request->name . '%')
//                     ->where('dependants.surname', 'like', '%' . $this->request->surname . '%')
//                     //->whereDate('policies.policy_end_date', '>=', date('Y-m-d'))
//                     ->where('dependants.status', '=', 1)
//                     ->get()->toArray();
//     if (isset($searchObj) && !empty($searchObj)) {
//         return Response::json(['success' => true, 'res' => $searchObj]);
//     } else {
//         return Response::json(['success' => false, 'res' => 'No Match Found']);
//     }
// }
////
//public function editmovement($id) {
//     $movement = $point_of_sales = DB::table('point_of_sales')
//             ->join('policies', 'policies.id', '=', 'point_of_sales.pos_policy_id')
//             ->join('dependants', 'dependants.id', '=', 'point_of_sales.pos_dependant_id')
//             ->join('users', function ($join) {
//                 $join->on('users.id', '=', 'point_of_sales.user_id');
//             })->select('point_of_sales.*', 'policies.*', 'dependants.*', 'users.name as username')
//             ->where('point_of_sales.id', $id)
//             ->where('dependants.status', '=', 1)
//             ->first();
//     return View::make('crm.accounting.editmovement', compact('movement'));
// }
//
/////////////////////////////////////////////////////////////////// middlewar in file
//UserController
//public function __construct()
//{
//$this->middleware(function ($request, $next) {
//    if(Auth::user()->access_settings ==1 || Auth::user()->role == 'admin')
//        return $next($request);
//    else
//        abort(404);
//});
//}
///////////////////////////////////////////////////////////////// validation custom
//class AppServiceProvider extends ServiceProvider
//{
//public function boot()
//{
//Validator::extend('mobile', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    if(substr( $inputs[$attribute],0,2) == '09')
//        return true;
//    else
//        return false;
//});
//
//Validator::extend('farsi', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    $farsi_Char="/^[a-zA-Z0-9]+$/";
//    if(preg_match($farsi_Char,$inputs[$attribute]) | preg_match($farsi_Char,$inputs[$attribute]))
//        return false;
//    else
//        return true;
//});
//Validator::extend('phone', function ($attribute, $value, $parameters, $validator) {
//    $inputs = $validator->getData();
//    if(substr( $inputs[$attribute],0,2) != '09')
//        return true;
//    else
//        return false;
//});
//
//}
//
////////////////////////////////////////////////////////////////////// captcha localhost
//Site key: 6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI
//Secret key: 6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe
////////////////////////////////////////////////////////// Strip_tags
//Strip_tags() تابعی است که به شما امکان می دهد تمام تگ های HTML و PHP را از یک رشته مشخص (پارامتر یک) حذف کنید، با این حال می توانید از پارامتر دو نیز برای تعیین لیستی از تگ های HTML مورد نظر خود استفاده کنید. این عملکرد می تواند بسیار مفید باشد اگر شما ورودی های کاربر را در سایت خود نمایش دهید.
//public function handle(\Illuminate\Http\Request $request, Closure $next)
//{
//if (!in_array(strtolower($request->method()), ['put', 'post'])) {
//    return $next($request);
//}
//$input = $request->all();
//array_walk_recursive($input, function(&$input,$key) {
//    if(isset($input) && $input!=null && $key !='TextPopup')
//        $input = strip_tags($input);
//});
//$request->merge($input);
//
//return $next($request);
//
//}
//
///////////////////////////////////////////////////////// array_walk_recursive
//<?php
//function myfunction($value,$key)
//{
//echo "The key $key has the value $value<br>";
//}
//$a1=array("a"=>"red","b"=>"green");
//$a2=array($a1,"1"=>"blue","2"=>"yellow");
//array_walk_recursive($a2,"myfunction");
//?>
<!--//-->
<!--The key a has the value red-->
<!--The key b has the value green-->
<!--The key 1 has the value blue-->
<!--The key 2 has the value yellow-->
<!--/////////////////////////////////////////////////////// exchange -->
<!--Route::get('a',function (\Illuminate\Http\Request $request){-->
<!---->
<!--$data=["trade_id"=>25];-->
<!--$publicKey="UERFSKMXTKX0FRU1DAQZDTWUDG2MTYOQMLCEBWA1XXMROUUCROA1VXTXEFAV87DP";-->
<!--$privateKey="gfq8hujauv61b9ywpxdzx7cfjbv6glsbajcc8kznyl9gb1ynvg8z9kz7jb4pxxo8";-->
<!--$postData = http_build_query($data);-->
<!---->
<!--$sign = hash_hmac('sha512', $postData, $privateKey);-->
<!--$headers = array("Key: $publicKey", "Sign: $sign");-->
<!--$response = Http::withHeaders([-->
<!--    $headers,-->
<!--    'Accept' => 'application/json',-->
<!--    'Content-Type' => 'application/json',-->
<!---->
<!--//        ])->post("http://127.0.0.1:8000/api". $url, [-->
<!--])->post("https://exchange.fastex.com//api/v1/trade/list", [-->
<!--    $postData-->
<!--]);-->
<!--try {-->
<!---->
<!--    return json_decode($response);-->
<!--} catch (\Exception $exception) {-->
<!---->
<!--    return response()->json(["success" => "false", "message" => $exception->getMessage(), "data" => false]);-->
<!---->
<!--}-->
<!--});-->
<!---->
<!--/////////////////////////////////////////////////////// http to request-->
<!--$req = new Request();-->
<!--$data = [-->
<!--"receptor" => $receptor,-->
<!--'message' => $message,-->
<!--"token" => $codeOtp-->
<!--];-->
<!--$req->headers->set('uuid', $uuid);-->
<!--$data = $req->merge($data);-->
<!--resolve(AHandleRequestController::class)->handleRequest($data);-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////// flatten تبدیل کالکشن به آرایه-->
<!--$collection = collect([-->
<!--'Apple' => [-->
<!--    [-->
<!--        'name' => 'iPhone 6S',-->
<!--        'brand' => 'Apple'-->
<!--    ],-->
<!--],-->
<!--'Samsung' => [-->
<!--    [-->
<!--        'name' => 'Galaxy S7',-->
<!--        'brand' => 'Samsung'-->
<!--    ],-->
<!--],-->
<!--]);-->
<!---->
<!--$newCollection = $collection->flatMap(function ($item, $key) {-->
<!--return collect($item)->map(function ($nestedItem) use ($key) {-->
<!--    return [-->
<!--        $key . '-name' => $nestedItem['name'],-->
<!--        $key . '-brand' => $nestedItem['brand'],-->
<!--    ];-->
<!--});-->
<!--})->all();-->
<!---->
<!--dd($newCollection);-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////// supervisor proxy-->
<!--supervisor:-->
<!--    build:-->
<!--        context: .-->
<!--        dockerfile: ./docker/php/supervisor/Dockerfile-->
<!--        args:-->
<!--          HTTP_PROXY: "http://data:data@31.7.66.89:8083"-->
<!--          HTTPS_PROXY: "http://data:data@31.7.66.89:8083"-->
<!--          NO_PROXY: "localhost,127.0.0.1"-->
<!--    container_name: gateway-supervisor-->
<!--    volumes:-->
<!--        - ./:/var/www-->
<!--    networks:-->
<!--        - gateway-->
<!---->
<!--///////////////////////////////////////////////////////// curl verify-->
<!--curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);-->
<!--     curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);-->
<!---->
<!--//////////////////////////////////////////////////////// curl-->
<!--public static function agents($pagesize, $pageNumber)-->
<!--{-->
<!--$curl = curl_init();-->
<!--curl_setopt_array($curl, array(-->
<!--    CURLOPT_URL => Helpers::env("dayGateWay") . "agents/list?pagenumber=$pageNumber&pagesize=$pagesize",-->
<!--    CURLOPT_RETURNTRANSFER => true,-->
<!--    CURLOPT_ENCODING => '',-->
<!--    CURLOPT_MAXREDIRS => 10,-->
<!--    CURLOPT_TIMEOUT => 0,-->
<!--    CURLOPT_FOLLOWLOCATION => true,-->
<!--    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--    CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--    CURLOPT_HTTPHEADER => array(-->
<!--        'Authorization: Bearer ' . Helpers::dayAPIGetToken(),-->
<!--        'Content-Type: application/json',-->
<!--        'Content-Length: 0'-->
<!--    ),-->
<!--));-->
<!---->
<!--$response = curl_exec($curl);-->
<!--curl_close($curl);-->
<!--$response = json_decode($response);-->
<!--if ($response->resultCode === 30)-->
<!--    return json_encode([-->
<!--        "status" => true,-->
<!--        "list" => $response->result-->
<!--    ]);-->
<!--else-->
<!--    return json_encode([-->
<!--        "status" => false,-->
<!--        "result" => $response-->
<!--    ]);-->
<!--}-->
<!---->
<!---->
<!--private static function dayAPIGetToken()-->
<!--{-->
<!--$curl = curl_init();-->
<!---->
<!--curl_setopt_array($curl, array(-->
<!--    CURLOPT_URL => Helpers::env("dayGateWay") . 'token',-->
<!--    CURLOPT_RETURNTRANSFER => true,-->
<!--    CURLOPT_ENCODING => '',-->
<!--    CURLOPT_MAXREDIRS => 10,-->
<!--    CURLOPT_TIMEOUT => 0,-->
<!--    CURLOPT_FOLLOWLOCATION => true,-->
<!--    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--    CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--    CURLOPT_POSTFIELDS => '{"userName":"' . Helpers::env("didarAPIUser") . '","password":"' . Helpers::env("didarAPIGatewayPss") . '"}',-->
<!--    CURLOPT_HTTPHEADER => array(-->
<!--        'Content-Type: application/json'-->
<!--    ),-->
<!--));-->
<!---->
<!--$response = curl_exec($curl);-->
<!---->
<!--curl_close($curl);-->
<!--return json_decode($response)->result->content;-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////// setter getter-->
<!--private string $appToken;-->
<!---->
<!--public function getAppToken(): string-->
<!--{-->
<!--return $this->appToken;-->
<!--}-->
<!---->
<!--public function setAppToken(string $appToken)-->
<!--{-->
<!--$this->appToken = $appToken;-->
<!--return $this;-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////// response-->
<!--return response()->json(['success'=>"false","message"=>Response::HTTP_INTERNAL_SERVER_ERROR,"data"=>false]);-->
<!---->
<!--//////////////////////////////////////////////////////// job client-->
<!--public function store(Request $request)-->
<!--{-->
<!--// ابتدا درخواست را به سرور ارسال کنیم با استفاده از Guzzle HTTP-->
<!--try {-->
<!--    $client = new Client();-->
<!--    $response = $client->request('POST', 'https://example.com', [-->
<!--        'form_params' => [-->
<!--            'title' => $request->title,-->
<!--            'body' => $request->body,-->
<!--            'user_id' => $request->user_id-->
<!--        ]-->
<!--    ]);-->
<!--} catch (RequestException $e) {-->
<!--    // در صورتی که به سرور دسترسی نداشته باشیم، پیامی به کاربر نشان بدهیم-->
<!--    return back()->with('error', 'خطا در ارسال اطلاعات به سرور');-->
<!--}-->
<!---->
<!--// سپس برای پیگیری درخواست، وضعیت response را چک می‌کنیم-->
<!--$status = $response->getStatusCode();-->
<!--if ($status != 200 && $status != 201 && $status != 202) {-->
<!--    // در صورتی که وضعیت برنامه ۵۰۶ باشد، جوابی به کاربر نداده و دوباره اقدام به ارسال درخواست می‌کنیم-->
<!--    if ($status == 506) {-->
<!--        sleep(900);-->
<!--        $this->store($request);-->
<!--    } else {-->
<!--        // در صورتی که وضعیت برنامه نامطلوب باشد، پیامی به کاربر نشان داده‌شود-->
<!--        return back()->with('error', 'خطا در ارسال اطلاعات به سرور');-->
<!--    }-->
<!--} else {-->
<!--    return back()->with('success', 'با موفقیت ارسال شد');-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////-->
<!--public function a(Request $request)-->
<!--{-->
<!--$response = Http::post('http://gateway.yarhis.ir/api/authservice/b', [-->
<!--    'code' => $request->input('code'),-->
<!--]);-->
<!--public function a(Request $request)-->
<!--{-->
<!--$code = $request->input('code');-->
<!---->
<!--$response = Http::withHeaders(['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'])->post('http://gateway.yarhis.ir/api/authservice/b', [-->
<!--    'code' => $code,-->
<!--]);-->
<!--$data = json_decode($response->getBody(), true);-->
<!--return response()->json($data, 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],-->
<!--    JSON_UNESCAPED_UNICODE);-->
<!--}-->
<!---->
<!--}-->
<!--public function b(Request $request)-->
<!--{-->
<!--//        return ['data' => 'تایید شده'];-->
<!--    DB::table('tests')->insert([-->
<!--        'code'=>$request->input('code')-->
<!--    ]);-->
<!--    return response()->json(['data' => 'تایید شده']);-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////// captcha-->
<!--&& docker-php-ext-configure gd --with-freetype --with-jpeg \-->
<!--&& docker-php-ext-install gd-->
<!---->
<!--////////////////////////////////////////////////////////-->
<!--Php artisan queue:work-->
<!--Php artisan make:job Procces-->
<!--Procces:dispatch-->
<!--//////////////////////////////////////////////////////// event Listeners-->
<!---->
<!--فرض کنید ما کلاسی داریم که میخوایم ریلیشن به کلاس دیگر بزند-->
<!---->
<!--ما میخوایم از طریق ایونت به لیستینر به موبایل کاربر متعلق به کمپین پیام ارسال کنیم-->
<!---->
<!--class CampaignFinished-->
<!--{-->
<!--use Dispatchable;-->
<!--use SerializesModels;-->
<!--use InteractsWithSockets;-->
<!---->
<!--public function __construct(public Campaign $campaign)-->
<!--{}-->
<!--}-->
<!--//lestiner-->
<!--class SendCampaignFinishedNotifications-->
<!--{-->
<!--public function __construct(-->
<!--    protected Sms $sms-->
<!--)-->
<!--{-->
<!--}-->
<!---->
<!--public function handle(CampaignFinished $event)-->
<!--{-->
<!--    Log::info('SendCampaignFinishedNotifications 6');-->
<!---->
<!--    $this->sms->send('کمپین شما با موفقیت به اتمام رسید.', $event->campaign->user->mobile);-->
<!--}-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////// factory seed-->
<!--* @property-read \App\Models\User $user-->
<!--* @method static Builder|Campaign executable()-->
<!--* @mixin \Eloquent-->
<!--* @property string|null $is_paid-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////  send sms-->
<!--use Kavenegar\Laravel\Facades\Kavenegar;-->
<!--$users = User::whereIn('id', [1, 2, 3])->get();-->
<!--foreach ($users as $user) {-->
<!-- Kavenegar::send($user->phone_number, 'Hello, ' . $user->name . '! This is a test message from Kavenegar.');-->
<!--}-->
<!--//////////////////////////////////////////////////////// password-->
<!--به بزرگی و کوچکی و حداقل یه حرف داشته باشد مثلا-->
<!--'password' => ['required', Password::min(8)->mixedCase()->letters()->uncompromised()],-->
<!---->
<!--//////////////////////////////////////////////////////// where-->
<!--$wish=WishList::query()->where([‘user_id’=>Auth::user()->id])-->
<!--////////////////////////////////////////////////////////-->
<!--//controller-->
<!--public function saveUser(Request $request, $id = null)-->
<!--{-->
<!--$collection = $request->except(['_token','_method']);-->
<!---->
<!--if( ! is_null( $id ) )-->
<!--{-->
<!--    $this->user->createOrUpdate($id, $collection);-->
<!--}-->
<!--else-->
<!--{-->
<!--    $this->user->createOrUpdate($id = null, $collection);-->
<!--}-->
<!---->
<!--return redirect()->route('user.list');-->
<!--}-->
<!---->
<!---->
<!--//service-->
<!--public function createOrUpdate( $id = null, $collection = [] )-->
<!--{-->
<!--if(is_null($id)) {-->
<!--    $user = new User;-->
<!--    $user->name = $collection['name'];-->
<!--    $user->email = $collection['email'];-->
<!--    $user->password = Hash::make('password');-->
<!--    return $user->save();-->
<!--}-->
<!--$user = User::find($id);-->
<!--$user->name = $collection['name'];-->
<!--$user->email = $collection['email'];-->
<!--return $user->save();-->
<!--}-->
<!---->
<!--//////////////////////////////////////////// time hidden-->
<!--بعد از دو ثانیه باکس مخفی شه-->
<!--setInterval(function(){-->
<!--$('#my_div').load('/path/to/server/source'); }, 2000) /* time in milliseconds (ie 2 seconds)*/-->
<!--/////////////////////////////////// sh-->
<!--chmod +x initlocal.sh-->
<!--```-->
<!--```-->
<!--./initlocal.sh-->
<!---->
<!--/////////////////////////////////// composer-->
<!--composer install --ignore-platform-reqs-->
<!--/////////////////////////////////// port 80-->
<!--Netstat -aon | findstr 80-->
<!--Taskkill /f /pid 7777-->
<!--Or-->
<!--Kill $(lsof -t -i :80)-->
<!--/////////////////// open port 80-->
<!--netsh http add iplisten ipaddress=::-->
<!--///////////////////////////////////-->
<!---->
<!--<div-->
<!--class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">-->
<!---->
<!---->
<!--<input type="color" id="colorPicker">-->
<!---->
<!--</div>-->
<!---->
<!--<script src="{{ asset('js/app.js') }}"></script>-->
<!--<script>-->
<!--let colorPicker = document.getElementById('colorPicker');-->
<!--colorPicker.addEventListener('input', async function() {-->
<!---->
<!--axios.post("{{route('fire.public.event')}}", {-->
<!--    color: colorPicker.value-->
<!--}, {-->
<!--    headers: {-->
<!--        'Content-Type': 'application/json;charset=utf-8',-->
<!--        'X-CSRF-TOKEN': "{{csrf_token()}}"-->
<!--    }-->
<!--})-->
<!---->
<!--});-->
<!--</script>-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////// pusher soketi echo-->
<!--PUSHER_APP_ID=1061681-->
<!--PUSHER_APP_KEY=d3bc51e04454967318f4-->
<!--PUSHER_APP_SECRET=65ed3ba0e0b32b86f9b6-->
<!--PUSHER_APP_CLUSTER=eu-->
<!---->
<!---->
<!--Soketi start-->
<!--laravel-echo-server start-->
<!--php artisan websockets:serve-->
<!---->
<!--//////////////////////////////////////////////// implod sms kavenegar-->
<!--public function Send($sender, $receptor, $message, $date = null, $type = null, $localid = null)-->
<!-- {-->
<!--     if (is_array($receptor)) {-->
<!--         $receptor = implode(",", $receptor);-->
<!--     }-->
<!--     if (is_array($localid)) {-->
<!--         $localid = implode(",", $localid);-->
<!--     }-->
<!--     $path   = $this->get_path("send");-->
<!--     $params = array(-->
<!--         "receptor" => $receptor,-->
<!--         "sender" => $sender,-->
<!--         "message" => $message,-->
<!--         "date" => $date,-->
<!--         "type" => $type,-->
<!--         "localid" => $localid-->
<!--     );-->
<!--     return $this->execute($path, $params);-->
<!-- }-->
<!-- -->
<!---->
<!--//-->
<!--protected function execute($url, $data = null)-->
<!-- {        -->
<!--     $headers       = array(-->
<!--         'Accept: application/json',-->
<!--         'Content-Type: application/x-www-form-urlencoded',-->
<!--         'charset: utf-8'-->
<!--     );-->
<!--     $fields_string = "";-->
<!--     if (!is_null($data)) {-->
<!--         $fields_string = http_build_query($data);-->
<!--     }-->
<!--     $handle = curl_init();-->
<!--     curl_setopt($handle, CURLOPT_URL, $url);-->
<!--     curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);-->
<!--     curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);-->
<!--     curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);-->
<!--     curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);-->
<!--     curl_setopt($handle, CURLOPT_POST, true);-->
<!--     curl_setopt($handle, CURLOPT_POSTFIELDS, $fields_string);-->
<!--     -->
<!--     $response     = curl_exec($handle);-->
<!--     $code         = curl_getinfo($handle, CURLINFO_HTTP_CODE);-->
<!--     $content_type = curl_getinfo($handle, CURLINFO_CONTENT_TYPE);-->
<!--     $curl_errno   = curl_errno($handle);-->
<!--     $curl_error   = curl_error($handle);-->
<!--     if ($curl_errno) {-->
<!--         throw new HttpException($curl_error, $curl_errno);-->
<!--     }-->
<!--     $json_response = json_decode($response);-->
<!--     if ($code != 200 && is_null($json_response)) {-->
<!--         throw new HttpException("Request have errors", $code);-->
<!--     } else {-->
<!--         $json_return = $json_response->return;-->
<!--         if ($json_return->status != 200) {-->
<!--             throw new ApiException($json_return->message, $json_return->status);-->
<!--         }-->
<!--         return $json_response->entries;-->
<!--     }-->
<!---->
<!--//////////////////////////////////////////////// composer i error-->
<!---->
<!--composer install --ignore-platform-reqs-->
<!--//////////////////////////////////////////////// unread notification-->
<!--public function __invoke(Request $request)-->
<!--{-->
<!--$request->user()->unreadNotifications()->update(['read_at' => now()]);-->
<!---->
<!--return to_route('notifications');-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////// policy-->
<!---->
<!--///////////////////////////////////// load-->
<!--پست با کاربر کاربری که کامنت کرده-->
<!---->
<!--public function show(Post $post)-->
<!--{-->
<!--$post->load('comments.user');-->
<!---->
<!--return view('posts.show', compact('post'));-->
<!--}-->
<!---->
<!--////////////////////////////////////////// one to many-->
<!--کاربر با زیر مجموعش لیست کن-->
<!--public function followings(User $user)-->
<!--{-->
<!--$users = $user->followings()->paginate(User::PAGINATE_COUNT);-->
<!---->
<!--return view('users.followings', compact('users'));-->
<!--}-->
<!--//-->
<!--از طریق زیر مجموعش میخوات به جدول دیگه لیست کنه-->
<!--'messages' => Room::where('name', $room)->first()->messages()->with('user')->get()-->
<!--//-->
<!--$user=auth()->user();-->
<!--$friends=$user->profile->users;-->
<!---->
<!--////////////////////////////////////// many to many  attach detach منی-->
<!--public function join($user)-->
<!--{-->
<!--return $this->users()->attach($user);-->
<!--}-->
<!---->
<!--public function detach($user)-->
<!--{-->
<!--return $this->users()->detach($user);-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////-->
<!--PUSHER_APP_ID=laravel-websockets-->
<!--PUSHER_APP_KEY=VsnVX2ttQ7I0JzGr1j-->
<!--PUSHER_APP_SECRET=xfkrtMUwfnlEymBZv3OHY1uM1zXl1FsYEER34oAdsf-->
<!--PUSHER_APP_CLUSTER=mt1-->
<!---->
<!--//////////////////////////////// email docker-->
<!---->
<!--mailhog:-->
<!-- image: mailhog/mailhog:latest-->
<!-- container_name: mailhog-->
<!-- ports:-->
<!--     - "8003:1025"-->
<!--     - "8100:8025"-->
<!-- networks:-->
<!--     - nome-da-minha-aplicacao-->
<!--//-->
<!--MAIL_MAILER=smtp-->
<!--       - MAIL_HOST=mailhog-->
<!--       - MAIL_PORT=1025-->
<!--       - MAIL_USERNAME=null-->
<!--       - MAIL_PASSWORD=null-->
<!--       - MAIL_ENCRYPTION=null-->
<!--       - MAIL_FROM_ADDRES=my-email@example.com-->
<!--       - MAIL_FROM_NAME=wesllycode-->
<!---->
<!--///////////////////////////////////////////////////////////////////// route react-->
<!--Route::view('/{path?}', 'index')->where('path', '.*');-->
<!--///////////////////////////////////////////////////////// has user-->
<!--کاربر از قبل روم دارد-->
<!--public function hasJoined($roomId)-->
<!--{-->
<!--$room = $this->rooms->where('id', $roomId)->first();-->
<!---->
<!--return $room ? true : false;-->
<!--}-->
<!---->
<!---->
<!---->
<!--////////////////////////////////////////////// kavenegar gateway-->
<!--{"return":{"status":200,"message":"تایید شد"},"entries":[{"messageid":1831393702,"message":"message that want to-->
<!--send","status":1,"statustext":"در صف-->
<!--ارسال","sender":"1000900900300","receptor":"09034325329","date":1680114291,"cost":1100}]}-->
<!---->
<!---->
<!---->
<!--////////////////////////////////// undo ctrl z-->
<!--برگشت-->
<!--Ctrl u-->
<!--////////////////////////////////// kavenegar-->
<!--public function sendMessage($sender='1000900900300')-->
<!-- {-->
<!--     $curl = curl_init();-->
<!---->
<!--     $api_key = '6E4C7A305767633742586C5343786C6D77464637474A326D34482B437072717A5370522F596237456C67413D';-->
<!--     $message="message that want to send";-->
<!--     $phone_number = "09034325329";-->
<!---->
<!--     curl_setopt_array($curl, array(-->
<!--         CURLOPT_URL => 'http://api.kavenegar.com/v1/'. $api_key .'/sms/send.json?'.'sender=' . $sender,-->
<!--         CURLOPT_RETURNTRANSFER => true,-->
<!--         CURLOPT_ENCODING => '',-->
<!--         CURLOPT_MAXREDIRS => 10,-->
<!--         CURLOPT_TIMEOUT => 0,-->
<!--         CURLOPT_FOLLOWLOCATION => true,-->
<!--         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--         CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--         CURLOPT_POSTFIELDS => 'receptor='. $phone_number .'&message=' . $message,-->
<!--         CURLOPT_HTTPHEADER => array(-->
<!--             'Content-Type: application/x-www-form-urlencoded'-->
<!--         ),-->
<!--     ));-->
<!---->
<!--     $response = curl_exec($curl);-->
<!---->
<!--     curl_close($curl);-->
<!--     echo $response;-->
<!-- }-->
<!--///////////////////////////////////////////////////////////// xampp linux-->
<!--mohsen@mohsen-HP-ProDesk-600-G1-SFF:/opt/lampp$ sudo /opt/lampp/./manager-linux-x64.run-->
<!--///////////////////////////////////////////////////////////////// ssh production-->
<!--ssh mohsen@gateway.yarhis.ir -p 2222-->
<!--/////////////////////////////////////////////////////// ubuntu-->
<!--sudo rm -rf .idea/-->
<!--////////////////////////////////////////////////////////// storage-->
<!--public function update(Request $request, Post $post)-->
<!-- {-->
<!--     if ($post->user_id === Auth::user()->id) {-->
<!--         $request->validate([FF-->
<!--             'image' => 'file|image',-->
<!--             'description' => 'nullable|string|max:150',-->
<!--         ]);-->
<!---->
<!--         if (isset($request->image)) {-->
<!--             $path = Storage::putFile('public/posts', $request->file('image'));-->
<!--             $post->image = Storage::url($path);-->
<!--         }-->
<!---->
<!--         $post->description = $request->description; /* ?? $post->description; */-->
<!---->
<!--         $post->save();-->
<!---->
<!--         return response()->json($post);-->
<!--     }-->
<!---->
<!--     return response()->json(['message' => 'Unauthorized'], 401);-->
<!-- }-->
<!--////////////////////////////////////// ip-->
<!--172.19.0.1-->
<!--988127cb-bf33-4461-bf33-4c3ea0502721-->
<!--////////////////////////////////////// save redis-->
<!--private function save()-->
<!--{-->
<!--Redis::set($this->sessionID, json_encode([-->
<!--    "IP" => $this->IP,-->
<!--    "captcha" => $this->captcha,-->
<!--    "mobile" => $this->mobile,-->
<!--    "registered" => $this->registered,-->
<!--    "OTP" => $this->OTP,-->
<!--    "person" => $this->person,-->
<!--    "passwordTry" => $this->passwordTry,-->
<!--    "resetPassword" => $this->resetPassword,-->
<!--]));-->
<!--Redis::expire($this->sessionID, timeout);-->
<!--return true;-->
<!--}-->
<!---->
<!--if (Redis::exists($data['rand'])) {-->
<!--return Redis::get($data['rand']);-->
<!--}-->
<!--Redis::set($this->data['rand'],$response);-->
<!--Redis::expire($this->data['rand'], 10080);-->
<!---->
<!--//////////////////////////////////////-->
<!--https://dev.to/shanisingh03/how-to-login-with-otp-in-laravel-9--3mmp-->
<!--//////////////////////////////////////-->
<!---->
<!---->
<!--<div class="mb-3">-->
<!--                 <label for="description" class="form-label">Description</label>-->
<!--                 <input value="{{ $post->description }}" -->
<!--                     type="text" -->
<!--                     class="form-control" -->
<!--                     name="description" -->
<!--                     placeholder="Description" required>-->
<!---->
<!--                 @if ($errors->has('description'))-->
<!--                     <span class="text-danger text-left">{{ $errors->first('description') }}</span>-->
<!--                 @endif-->
<!--             </div>-->
<!--////////////////////////////////////// permission role blade-->
<!--3,App\Models\User,2-->
<!---->
<!--@can('role-edit')-->
<!--            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>-->
<!--        @endcan-->
<!---->
<!--@auth-->
<!--       @role('Admin')-->
<!--       <li><a href="{{ route('users.index') }}" class="nav-link px-2 text-white">Users</a></li>-->
<!--       <li><a href="{{ route('roles.index') }}" class="nav-link px-2 text-white">Roles</a></li>-->
<!--       @endrole-->
<!--       <li><a href="{{ route('posts.index') }}" class="nav-link px-2 text-white">Posts</a></li>-->
<!--     @endauth-->
<!--////////////////////////////////////// ubuntu-->
<!--remove-->
<!--sudo rm -rf folderName-->
<!---->
<!---->
<!--////////////////////////////////////// can-->
<!--@foreach ($roles as $key => $role)-->
<!--<tr>-->
<!--    <td>{{ ++$i }}</td>-->
<!--    <td>{{ $role->name }}</td>-->
<!--    <td>-->
<!--        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>-->
<!--@can('role-edit')-->
<!--        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>-->
<!--@endcan-->
<!--        @can('role-delete')-->
<!--        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}-->
<!--        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}-->
<!--        {!! Form::close() !!}-->
<!--        @endcan-->
<!--        </td>-->
<!--</tr>-->
<!--@endforeach-->
<!---->
<!--////////////////////////////////////// &quot-->
<!--var api = "{{ $getApi }}";-->
<!--var data = api.replaceAll("&quot;", '"');-->
<!--console.log(data)-->
<!--arr = $.parseJSON(data);-->
<!---->
<!--//////////////////////////////////////-->
<!--'<option value="' + result[3][0] + '">' + result[3][1] + '</option>' +-->
<!---->
<!--for (var n=0; n < Object.keys(result).length; n++)-->
<!--{-->
<!--'<option value="' + result[0][0] + '">' + result[0][1] + '</option>'+-->
<!--}-->
<!---->
<!--//////////////////////////////////////-->
<!--$.each(arr, (v,k) => $('<option>').val(k).text(v))+-->
<!--'<option value="'+result[0][0]+'">'+result[0][1]+'</option>'-->
<!---->
<!--//////////////////////////////////////-->
<!--public function index()-->
<!--{-->
<!--$myStudents = [-->
<!--    ['id'=>1, 'name'=>'Hardik', 'mark' => 80],-->
<!--    ['id'=>2, 'name'=>'Paresh', 'mark' => 20],-->
<!--    ['id'=>3, 'name'=>'Akash', 'mark' => 34],-->
<!--    ['id'=>4, 'name'=>'Sagar', 'mark' => 45],-->
<!--];-->
<!-- $myStudents = collect($myStudents);-->
<!---->
<!--$passedstudents = $myStudents->filter(function ($value, $key) {-->
<!--    return data_get($value, 'mark') > 34;-->
<!--});-->
<!---->
<!--$passedstudents = $passedstudents->all();-->
<!---->
<!--dd($passedstudents);-->
<!--}-->
<!---->
<!--////////////////////////////////////// local-->
<!--http://host.docker.internal-->
<!--//-->
<!--sudo chmod 666 /var/run/docker.sock-->
<!--//////////////////////////////////////-->
<!---->
<!--protected function redirectTo($request)-->
<!---->
<!---->
<!---->
<!---->
<!--{-->
<!---->
<!---->
<!--    if ($request->is('api/*')) {-->
<!---->
<!---->
<!--        throw new HttpResponseException(-->
<!---->
<!---->
<!--            response()->json([-->
<!---->
<!---->
<!--                'message' => \App\Lib\Message::AUTH_KO-->
<!---->
<!---->
<!--            ], 401)-->
<!---->
<!---->
<!--        );-->
<!---->
<!---->
<!--    }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    if (!$request->expectsJson()) {-->
<!---->
<!---->
<!--        return route('login');-->
<!---->
<!---->
<!--    }-->
<!---->
<!---->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////// has relation-->
<!--//User-->
<!--Public function hasPost(){-->
<!--Return $this->posts()->exist();-->
<!--}-->
<!--///-->
<!--if($user->relationLoaded(‘posts’)){-->
<!--}-->
<!--//////////////////////////////////////////////// route-->
<!--فقط ایدی وارد کنه که در دیتابیس موجود باشه-->
<!--Route::get('/users/{user}/posts/{post:slug}', function (User $user, Post $post) {-->
<!--return $post;-->
<!--});-->
<!---->
<!--//////////////////////////////////////////////// route-->
<!--اگر ایدی وارد نکرد اوکی باشه-->
<!--Route::get('/form/{id?}', 'FormController@index')->name('form');-->
<!---->
<!--//-->
<!--public function index($id = null)-->
<!--{-->
<!-- $data = $id ? YourModel::find($id) : new YourModel();-->
<!-- return view('your-view', compact('data'));-->
<!--}-->
<!--//-->
<!--<form method="POST" action="{{ $data->id ? route('update', $data->id) : route('store') }}">-->
<!-- @csrf-->
<!-- @if($data->id)-->
<!--     @method('PUT')-->
<!-- @endif-->
<!---->
<!-- <!-- Your form fields go here -->-->
<!---->
<!-- <button type="submit">{{ $data->id ? 'Update' : 'Create' }}</button>-->
<!--</form>-->
<!---->
<!--//-->
<!--public function store(Request $request)-->
<!--{-->
<!-- YourModel::create($request->all());-->
<!-- return redirect()->route('form');-->
<!--}-->
<!---->
<!--public function update(Request $request, $id)-->
<!--{-->
<!-- $data = YourModel::find($id);-->
<!-- $data->update($request->all());-->
<!-- return redirect()->route('form');-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////-->
<!--Btn-xs-->
<!---->
<!---->
<!-- <td class="text-center">-->
<!---->
<!---->
<!---->
<!---->
<!--                                              <a class="btn btn-default  btn-xs" href="{{ route('user.show', $user->id) }}" title="See {{ $user->name }}"><i class="fa fa-eye">   </i></a>-->
<!---->
<!---->
<!--                                              <a class="btn btn-primary  btn-xs" href="{{ route('user.edit.password', $user->id) }}" title="Change Password {{ $user->name }}"><i class="fa fa-key"></i></a>-->
<!---->
<!---->
<!--                                              <a class="btn btn-warning  btn-xs" href="{{ route('user.edit', $user->id) }}" title="Edit {{ $user->name }}"><i class="fa fa-pencil"></i></a>-->
<!---->
<!---->
<!--                                              <a class="btn btn-danger  btn-xs" href="#" title="Delete {{ $user->name}}" data-toggle="modal" data-target="#modal-delete-{{ $user->id }}"><i class="fa fa-trash"></i></a>-->
<!---->
<!---->
<!--                                         </td>-->
<!---->
<!---->
<!--////////////////////////////////////////////////-->
<!--<div class="form-group mb-3">-->
<!--                             <input type="text" placeholder="Name" id="name" class="form-control" name="name"-->
<!--                                 required autofocus>-->
<!--                             @if ($errors->has('name'))-->
<!--                             <span class="text-danger">{{ $errors->first('name') }}</span>-->
<!--                             @endif-->
<!--                         </div>-->
<!---->
<!--////////////////////////////////////////////////-->
<!--https://github.com/rappasoft/laravel-authentication-log-->
<!--composer require rappasoft/laravel-authentication-log-->
<!---->
<!---->
<!--//////////////////////////////////////////////// form blade-->
<!--<form action="{{ route('categories.store') }}" method="POST" class="padding-30">-->
<!--@csrf-->
<!--<input type="text" name="name" placeholder="نام دسته بندی" class="text">-->
<!--@error('name')-->
<!--  <p class="error">{{ $message }}</p>-->
<!--@enderror-->
<!---->
<!--<select class="select" name="category_id" id="category_id">-->
<!--    <option value="">ندارد</option>-->
<!--    @foreach($parentCategories as $category)-->
<!--      <option value="{{ $category->id }}">{{ $category->name }}</option>-->
<!--    @endforeach-->
<!--</select>-->
<!--@error('category_id')-->
<!--  <p class="error">{{ $message }}</p>-->
<!--@enderror-->
<!---->
<!--<button class="btn btn-webamooz_net">اضافه کردن</button>-->
<!--</form>-->
<!---->
<!--////////////////////////////////////////////////-->
<!---->
<!--// head-->
<!--{{ $scripts ?? '' }}-->
<!---->
<!--//index-->
<!--<x-slot name="scripts">-->
<!--<script>-->
<!--function destroyCategory(event, id) {-->
<!--  event.preventDefault();-->
<!--  document.getElementById('destroy-category-' + id).submit();-->
<!--}-->
<!--</script>-->
<!--</x-slot>-->
<!---->
<!--//////////////////////////////////////////////// active sidebar-->
<!--<li class="item-li i-users @if(request()->is('panel/users') || request()->is('panel/users/*')) is-active @endif"><a href="{{ route('users.index') }}"> کاربران</a></li>-->
<!---->
<!--//////////////////////////////////////////////// blade x-slot section-->
<!--//app-->
<!--@yield(script)-->
<!--//index-->
<!--@section(script)-->
<!--<script></script>-->
<!--@endsection-->
<!--//////////////////////////-->
<!--//app-->
<!--{{ $slot }}-->
<!--//foot-->
<!--//-->
<!--<x-panel-layout>-->
<!--<x-slot name="title">-->
<!--- مدیریت دسته بندی ها-->
<!--</x-slot>-->
<!--<x-slot name="styles">-->
<!--<link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">-->
<!--</x-slot>-->
<!--<div class="breadcrumb">-->
<!--    <ul>-->
<!--        <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>-->
<!--        <li><a href="{{ route('categories.index') }}" class="is-active">دسته بندی ها</a></li>-->
<!--    </ul>-->
<!--</div>-->
<!--<div class="main-content padding-0 categories">-->
<!--…-->
<!--</div>-->
<!--<x-slot name="scripts">-->
<!--<script>-->
<!--function destroyCategory(event, id) {-->
<!--  event.preventDefault();-->
<!--  document.getElementById('destroy-category-' + id).submit();-->
<!--}-->
<!--</script>-->
<!--</x-slot>-->
<!--</x-panel-layout>-->
<!---->
<!--////////////////////////////////////////////////-->
<!--{{ $variables->links('vendor.pagination.simple-bootstrap-4') }}-->
<!---->
<!---->
<!--//////////////////////////////////////////////// ajax insert data get-->
<!--<input type="hidden" id="dependency"/>-->
<!---->
<!--<div class="form-group mb-3">-->
<!--<label for="">شناسه پروایدر</label>-->
<!--<input type="text" id="provider_id" class=" form-control">-->
<!--</div>-->
<!---->
<!--//-->
<!--زمانیکه باتن بروزرسانی زده شد ایدی row لیست بگیر بریز در dependency -->
<!--$(document).on('click', '.editbtn', function (e) {-->
<!--e.preventDefault();-->
<!--var dependency = $(this).val();-->
<!---->
<!--$.ajax({-->
<!--type: "GET",-->
<!--url: "/api_header_fields/" + dependency,-->
<!--success: function (response) {-->
<!--    if (response.status == 404) {-->
<!--        $('#success_message').addClass('alert alert-success');-->
<!--        $('#success_message').text(response.message);-->
<!--        $('#editModal').modal('hide');-->
<!--    } else {-->
<!--        $('#dependency').val(dependency);-->
<!--        $('#provider_id').val(response.data.provider_id);-->
<!---->
<!--///////////////////////////////// error mysql xampp-->
<!--Windows + r-->
<!--Services.msc-->
<!--Change port 4000-->
<!--//phpMyAdmin-->
<!--$cfg['Servers'][$i]['port'] = '4000';-->
<!--////////// ping internet-->
<!--Windoz + r-->
<!--ping 8.8.8.8 -t-->
<!--///-->
<!--//parent داخل فوت -->
<!--@stack('scripts')-->
<!--//child داخل فایل-->
<!--@push("scripts")-->
<!--<script src="{{asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>-->
<!--@push-->
<!--/////////////////////-->
<!--'serviceName'=>$this->whenLoaded('service', function () {-->
<!--return $this->service->title;-->
<!--}),-->
<!---->
<!--//-->
<!--$service_id = $request->get("service_id");-->
<!--$getReceiver_id = Service::query()->find($service_id)->title;-->
<!--return response()->json(["data" => [[-->
<!--"api_field_id" => $getReceiver_id,-->
<!--$api-->
<!--]]], Response::HTTP_CREATED);-->
<!---->
<!--//////////////////////////////////////////////////////////-->
<!--$data = [-->
<!-- ['name' => 'John', 'email' => 'john@example.com'],-->
<!-- ['name' => 'Mary', 'email' => 'mary@example.com'],-->
<!-- ['name' => 'Bob', 'email' => 'bob@example.com'],-->
<!--];-->
<!---->
<!--DB::table('users')->insert($data);-->
<!---->
<!--///-->
<!--DB::table('users')->insertOrIgnore($data);-->
<!--//-->
<!--Biniyojan::insert($request->data);-->
<!---->
<!--//-->
<!--$user = App\User::find(1);-->
<!---->
<!---->
<!--$user->comments()->saveMany([-->
<!--new App\Comment(['message' => 'First comment.']),-->
<!--new App\Comment(['message' => 'Second comment.']),-->
<!--]);-->
<!--//-->
<!-- public function index() {-->
<!---->
<!--     // Get the student data-->
<!--     $students = tbl_student::all();-->
<!--     $subjects = tbl_subject::all();-->
<!---->
<!--     return view('view_student',['students'=>$students,'subjects'=>$subjects]);-->
<!-- }-->
<!---->
<!---->
<!-- public function multipleInsert(Request $request) {-->
<!--     $data = $request->except('_token');-->
<!---->
<!--     $subject_count = count($data['subject_id']);-->
<!--     for($i=0; $i < $subject_count; $i++){-->
<!---->
<!--         $tss = new tbl_student_subject;-->
<!--         $tss->subject_id = $data['subject_id'][$i];-->
<!--         $tss->student_id = $data['student_id'];-->
<!--         $tss->save();-->
<!--     }-->
<!-- }-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////join-->
<!--public function index()-->
<!--{-->
<!--if (Auth::user()->is_admin) {-->
<!--    $data['success'] = true;-->
<!--    $data['bookings'] =  Booking::join('rooms', 'rooms.id', '=', 'bookings.room_id')-->
<!--        ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')-->
<!--        ->join('users', 'users.id', '=', 'bookings.user_id')-->
<!--        ->select('bookings.id', 'hotels.name', 'users.first_name', 'users.last_name', 'hotels.city', 'hotels.image', 'rooms.price', 'bookings.check_in', 'bookings.check_out', 'bookings.created_at')-->
<!--        ->groupBy('bookings.id', 'hotels.name', 'users.first_name', 'users.last_name', 'hotels.city', 'hotels.image', 'rooms.price', 'bookings.check_in', 'bookings.check_out', 'bookings.created_at')-->
<!--        ->orderBy('bookings.created_at', 'desc')-->
<!--        ->paginate(6);-->
<!--} else-->
<!--    $data['success'] = false;-->
<!---->
<!---->
<!--return response()->json(['data' => $data]);-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////// segment-->
<!--http://example.com/users/posts/latest/-->
<!--//get segment 0 $segment_users = request()->segment(0); //returns 'users' //get segment 1 $segment_posts = request()->segment(1); //returns 'posts'-->
<!---->
<!--//////////////////////////////////////////////////// api resource-->
<!---->
<!--'serviceName'=>$this->whenLoaded('service', function () {-->
<!--return $this->service->title;-->
<!--}),-->
<!---->
<!--//////-->
<!--public function store(AddressStoreRequest $request)-->
<!--{-->
<!--return AddressResource::make(Address::create($request->validated()));-->
<!--}-->
<!---->
<!--public function update(AddressUpdateRequest $request, $id)-->
<!--{-->
<!--return AddressResource::make(tap(Address::findOrfail($id))->update($request->validated()));-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////-->
<!--@foreach($student as $stu)-->
<!--<tr style="border: 1px solid #f2f2f2;">-->
<!-- <td><input type="text" name="enroll_no[]" class="form-control" value="{{$stu->enroll_no}}"></td>-->
<!-- <td><input type="text" name="student_name[]" class="form-control" value="{{$stu->student_name}}"></td>-->
<!-- <td>{{$loop->index+1}}</td>-->
<!-- <td>-->
<!--   <div class="form-check">-->
<!--     <label class="form-check-label">-->
<!--       <input style="zoom:2;" name="present[]" class="form-control" type="checkbox" value="P"> Absent/Present-->
<!--     </label>-->
<!--   </div>-->
<!-- </td>-->
<!--</tr>-->
<!--@endforeach-->
<!--</tbody>-->
<!---->
<!--////////-->
<!--$enroll_no = $request->enroll_no;-->
<!--$student_name = $request->student_name;-->
<!--$present= $request->present;-->
<!---->
<!--foreach($enroll_no as $key => $no)-->
<!--{-->
<!-- $input['enroll_no'] = $no;-->
<!-- $input['student_name '] = $student_name[$key];-->
<!-- $input['present'] = $present[$key];-->
<!---->
<!-- Model::create($input);-->
<!---->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////-->
<!--$data = [ ['user_id'=>'Coder 1', 'subject_id'=> 4096], ['user_id'=>'Coder 2', 'subject_id'=> 2048], //... ]; -->
<!--Model::insert($data); // Eloquent approach -->
<!--DB::table('table')->insert($data); // Query Builder approach-->
<!---->
<!--//////////////////////////////////////////////////// order-->
<!--محاسبه جمع قیمت محصولات -->
<!---->
<!--public function rules()-->
<!--{-->
<!--return [-->
<!--    'products' => 'required|array',-->
<!--    'products.*' => 'required|integer|exists:products,id',-->
<!--    'user_id' => 'required|integer|exists:users,id'-->
<!--];-->
<!--}-->
<!---->
<!--class Helper-->
<!--{-->
<!--static public function convertToPLN(int $value): float-->
<!--{-->
<!--    return round($value/100, 2);-->
<!--}-->
<!--}-->
<!--//orderResource-->
<!--public function toArray($request)-->
<!--{-->
<!--return [-->
<!--    'id' => $this->id,-->
<!--    'status' => $this->status == 0 ? 'open' : 'closed',-->
<!--    'user_id' => $this->user_id,-->
<!--    'value' => Helper::convertToPLN($this->value),-->
<!--    'created_at' => $this->created_at->format(config('app.date_format')),-->
<!--    'updated_at' => $this->updated_at->format(config('app.date_format'))-->
<!--];-->
<!--}-->
<!---->
<!--public function store(CreateOrderRequest $request)-->
<!--{-->
<!--$data = $request->validated();-->
<!---->
<!--$orderValue = $this->calculateOrderValue($data['products']);-->
<!---->
<!--$order = Order::create([-->
<!--    'user_id' => $data['user_id'],-->
<!--    'value' => $orderValue-->
<!--]);-->
<!---->
<!--return response()->json([-->
<!--    'success' => true,-->
<!--    'data' => new OrderResource($order)-->
<!--]);-->
<!--}-->
<!---->
<!--trait CalculateOrderValue-->
<!--{-->
<!--/**-->
<!-- * Calculate order value.-->
<!-- *-->
<!-- * @return integer-->
<!-- */-->
<!--private function calculateOrderValue(array $products): int-->
<!--{-->
<!--    $value = 0;-->
<!--    foreach ($products as $productId){-->
<!--        $product = Product::FindOrFail($productId);-->
<!--        $value += $product->price;-->
<!--    }-->
<!--    return $value;-->
<!--}-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////// object_get-->
<!--گرفتن ابجکت مدل-->
<!--//$f=object_get(Provider::where('title', 'faraboom')->first(), 'status');-->
<!---->
<!--//////////////////////////////////////////////////// resource-->
<!--belongsTo-->
<!--return $this->response(ImageSubmissionResource::collection($imageSubmissions));-->
<!---->
<!---->
<!--$this->response(ImageSubmissionResource::make($imageSubmission->load('workJob'), Response::HTTP_CREATED));-->
<!---->
<!--//////////////////////////////////////////////////// one to many store-->
<!--$post = Post::find(1);-->
<!--$comment = $post->comments()->create([-->
<!--'message' => 'A new comment.',-->
<!--]);-->
<!---->
<!--//////////////////////////////////////////////////// boot slug-->
<!--//class Product extends Model-->
<!---->
<!--public static function boot()-->
<!--{-->
<!--parent::boot();-->
<!--static ::creating( function ($product){-->
<!--    $product->slug = Str::slug($product->title);-->
<!--});-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////// upload storage-->
<!--if ($request->hasFile('image')) {-->
<!--$imgArr = ['image' => $this->uploadImage($request)];-->
<!--}-->
<!---->
<!--$product->update(array_merge($data, $imgArr ?? []));-->
<!---->
<!---->
<!--public function uploadImage(Request $request): string-->
<!--{-->
<!--$name = time() . '_' . preg_replace('/\s+/', '_', $request->image->getClientOriginalName());-->
<!--return $request->image->storeAs('products/images', $name, 'public');-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////// sort -->
<!--public function index(): Factory|View|Application-->
<!--{-->
<!--$products = Product::query();-->
<!--if (request()->category) {-->
<!--    $products->categories(request()->category);-->
<!--} else {-->
<!--    $products = $products->latest();-->
<!--}-->
<!--$products = $this->handleSorting($products);-->
<!---->
<!--$products = $products->paginate(15);-->
<!---->
<!--return view('admin.products.index', compact('products'));-->
<!--}-->
<!---->
<!--protected function handleSorting(Builder $products): Builder-->
<!--{-->
<!--if (request()->query('sort') == 'low_high') {-->
<!--    $products = $products->orderBy('price');-->
<!--} elseif (request()->query('sort') == 'high_low') {-->
<!--    $products = $products->orderBy('price', 'desc');-->
<!--}-->
<!--return $products;-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// search date-->
<!--$projects = Project:: when($request->year_from, function($query) -->
<!--use ($request){ $query->where('delivery_year', '>=', $request->year_from); }) ->when($request->year_to, function($query) -->
<!--use ($request){ $query->where('delivery_year', '<=', $request->year_to); }) ->when( $request->delivery_month_from, function($query)-->
<!--use ($request){ $query->where('delivery_month', '>=', $request->delivery_month_from); }) ->when( $request->delivery_month_to, function($query)-->
<!--use ($request){ $query->where('delivery_month', '<=', $request->delivery_month_to); }) ->when( $request->product_group, function($query) use ($request){ $query->whereHas('products', function($q) use ($request) { $q->whereHas('group', function($qi) use ($request){ $qi->whereIn('id', $request->product_group); }); }); }) ->get();-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--نام عکس متعلق به post بده-->
<!--$post->getRelationValue('image')->name-->
<!--//-->
<!--$post->image->name;-->
<!--//////////////////////////////////////////// relation pivot-->
<!--ریلیشن جدول api_field با جدول Mapper طبق ایدی فیلد receiver_api_field_id پیدا کن ازش value بگیر-->
<!--$desApiFields[$mappingModel->receiver_api_field_id]->value-->
<!--//////////////////////////////////////////// relation exist value-->
<!--چک کردن اینکه ایا در فلان فیلدی که با فیلد فعلی ما ریلیشن دارد وجود دارد یا خیر-->
<!--dd(isset($mainApiFields[$mappingModel->sender_api_field_id]));-->
<!--///////////////////////////////////////// relation set value in other value -->
<!--if (isset($mainApiFields[$mappingModel->sender_api_field_id]) and isset($desApiFields[$mappingModel->receiver_api_field_id])) {-->
<!--$desApiFields[$mappingModel->receiver_api_field_id]->value = $mainApiFields[$mappingModel->sender_api_field_id]->value;-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////// set key value -->
<!--public function getParamsFromApiFields($desApiFields, $position)-->
<!--{-->
<!--$dataSet = null;-->
<!--foreach ($desApiFields as $desApiField) {-->
<!--    if ($desApiField->position_type == $position) {-->
<!--        $dataSet[$desApiField->key] = $desApiField->value;-->
<!--    }-->
<!--}-->
<!---->
<!--return $dataSet;-->
<!--}-->
<!---->
<!--///////////////////////////////////////// set key value-->
<!--dd($fieldDataSet[$fieldModel->position_type]);-->
<!--"owner_name" => "قصابکلا"-->
<!--کی مربوز به بادی بده-->
<!--dd($fieldDataSet[$fieldModel->position_type][$fieldModel->key]);-->
<!--"قصابکلا"-->
<!---->
<!--///////////////////////////////////////////////// set key value temp-->
<!--$fieldDataSet[$fieldModel->position_type][$fieldModel->key] = $fieldValue;-->
<!--// "body" => array:1 [-->
<!--//    "owner_name" => "قصابکلا"-->
<!--//  ]-->
<!---->
<!--//////////////////////////////////////////////////////////////-->
<!--//-->
<!--function recursive php-->
<!--public function getSitioPadre($id){ $padre = md_sitio_espacios::where([['SITIO_ESPACIOS_ID','=',$id]])->get()->toArray(); if($padre[0]["PADRE"] == 0){ return $padre[0]["SITIO_ESPACIOS_ID"]; }else{ return $this->getSitioPadre($padre[0]["PADRE"]); // should work better } }-->
<!---->
<!---->
<!--public function generateUserName($name){-->
<!-- $username = Str::lower(Str::slug($name));-->
<!-- if(User::where('username', '=', $username)->exists()){-->
<!--     $uniqueUserName = $username.'-'.Str::lower(Str::random(4));-->
<!--     $username = $this->generateUserName($uniqueUserName);-->
<!-- }-->
<!-- return $username;-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--{{local}}/core?hasan=11&hossein=22-->
<!--dd( $request->query() );-->
<!--/////////////////////////////////////////////////////// find string in json-->
<!--پیدا کردن استرینگ در جیسان و انست آن-->
<!--$dataDependency[] = $getKeyDependency . ":" . $getPrependDpendency . " " . $getValueDependency;-->
<!--$headerd =array_merge($header,$dataDependency);-->
<!--foreach($headerd as $key => $value){-->
<!--if(strpos($value,"Authorization:Basic") !== false){-->
<!--    unset($headerd[$key]);-->
<!--    break;-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--//        $dataMapped = array_intersect_key($headerd, $dataDependency,);-->
<!--//        foreach($header as $k=>$v){-->
<!--//            if(!array_key_exists($k,$dataDependency)){-->
<!--//                unset($header[$k]);-->
<!--//            }-->
<!--//        }-->
<!---->
<!--/////////////////////////////////////////-->
<!--## Create service-->
<!---->
<!---->
<!---->
<!---->
<!--curl -i -X POST \-->
<!---->
<!---->
<!----url http://localhost:8001/services/ \-->
<!---->
<!---->
<!----data 'name=YOUR-SERVICE-NAME' \-->
<!---->
<!---->
<!----data 'url=http://localhost:3000/api/'-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--## Create route-->
<!---->
<!---->
<!--curl -i -X POST \-->
<!---->
<!---->
<!----url http://localhost:8001/services/YOUR-SERVICE-NAME/routes \-->
<!---->
<!---->
<!----data 'hosts[]=API.EXAMPLE.COM' \-->
<!---->
<!---->
<!----data 'paths[]=/' \-->
<!---->
<!---->
<!----data 'strip_path=false'-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--## Starting KONG-->
<!---->
<!---->
<!--sudo kong migrations up -c /etc/kong/kong.conf-->
<!---->
<!---->
<!--sudo kong start -c /etc/kong/kong.conf-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--### 🎉 KONG is now running on port 8000!!! 🎉-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////-->
<!--https://documenter.getpostman.com/view/10587735/SzS7QS2c#b5c37285-0e71-411a-b44d-f06fea8e6b24-->
<!--/////////////////////////////////////////////////////////////////////////////////// variable in ‘’-->
<!--CURLOPT_POSTFIELDS => '{"nationalCode":"' . $nationalID . '"}',-->
<!--///////////////////////////////////////////////// form request-->
<!--use Illuminate\Validation\Rule;-->
<!--$activationCode = $request->activation_code;-->
<!--$rules = [ 'mc' => [ 'required', Rule::exists('email_verifications', 'machineCode') ->where('activationCode', $activationCode), ],-->
<!--'activation_code' => 'required|integer|min:5',-->
<!--'operating_system' => 'required|alpha_num|max:45' ];-->
<!---->
<!--/////////////////////////////////////////////////// parent construct-->
<!--// Parent-->
<!--public function __construct() { -->
<!--$this->auth = App::make('UserAuthInterface');-->
<!--$this->user = $this->auth->adminLoggedIn();-->
<!--$this->message = App::make('MessagesInterface');-->
<!--$this->module = App::make('ModuleManagerInterface'); }-->
<!--// Child-->
<!--public function __construct(UsersManager $user) {-->
<!--$this->users = $users; parent::__construct(); }-->
<!--///////////////////////////////////////////////////////-->
<!--//-->
<!--public function __construct()-->
<!--{-->
<!--$this->guaranteeRepository = new GuaranteeRepository();-->
<!--parent::__construct();-->
<!--}-->
<!--public function changeStatus($id, $status)-->
<!--{-->
<!--$this->setQuery();-->
<!--$guarantee = $this->guaranteeRepository->firstFind([], $id);-->
<!--if ($guarantee->status == $status) return 0;-->
<!---->
<!--$this->guaranteeRepository->update($id, [-->
<!--    'status' => $status-->
<!--]);-->
<!---->
<!--$this->query->where('guarantee_id', $id)-->
<!--    ->whereNull('ended_at')->update([-->
<!--        'ended_at' => Carbon::now()-->
<!--    ]);-->
<!---->
<!--$this->create([-->
<!--    'guarantee_id' => $id,-->
<!--    'user_id' => Auth::user()->id,-->
<!--    'status' => $status,-->
<!--    'started_at' => Carbon::now(),-->
<!--]);-->
<!--return 0;-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////// __construct-->
<!---->
<!--پراپرتی از والد میگیرد-->
<!--class Repository implements RepositoryInterface-->
<!--{-->
<!--protected $query;-->
<!--protected $table;-->
<!--protected $cast;-->
<!--protected $trigger;-->
<!--// GuaranteeRepository -->
<!--class GuaranteeRepository extends Repository implements GuaranteeRepositoryInterface-->
<!---->
<!--public function __construct()-->
<!--{-->
<!--parent::__construct();-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////// user agent-->
<!--/////////////////////////////////////////////////// user agent-->
<!---->
<!---->
<!--/////////////////////////////////////////////////// -->
<!--/////////////////////////////////////////////////// user agent-->
<!--/////////////////////////////////////////////////// user agent-->
<!--/////////////////////////////////////////////////// list port-->
<!--List port windows-->
<!--netstat -aon-->
<!--/////////////////////////////////////////////////// user agent-->
<!--protected function agent(Request $request)-->
<!--{-->
<!--return [-->
<!--    'user_agent' => $request->userAgent(),-->
<!--    'languages' => $this->agent->languages(),-->
<!--    'device' => $this->agent->device(),-->
<!--    'platform' => [-->
<!--        'name' => $this->agent->platform(),-->
<!--        'version' => $this->agent->version($this->agent->platform()),-->
<!--    ],-->
<!--    'browser' => [-->
<!--        'name' => $this->agent->browser(),-->
<!--        'version' => $this->agent->version($this->agent->browser()),-->
<!--    ],-->
<!--    'robot' => $this->agent->robot(),-->
<!--];-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////-->
<!--dockerfile-->
<!--FROM oraclelinux:7-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--RUN yum -y install oracle-release-el7 oracle-php-release-el7-->
<!---->
<!---->
<!--RUN yum -y install oracle-instantclient19.5-basic-->
<!---->
<!---->
<!--RUN yum -y install php php-oci8-19c php-json php-zip php-mbstring php-mcrypt php-xml-->
<!---->
<!--//-->
<!--https://github.com/yajra/laravel-oci8-->
<!--https://medium.com/@g.s.r/setup-oracle-database-12c-image-on-docker-step-by-step-15a4c344acf2-->
<!--//-->
<!--https://pastebin.com/RTPWt1XK-->
<!--////////////////////////////////////////////////// docker-->
<!--Error docker -->
<!--docker build --no-cache .-->
<!---->
<!--docker.iranrepo.ir/-->
<!--image: dockerhub.ir/mysql:8.0.25-->
<!--FROM docker.iranrepo.ir/php:8.0.13-fpm-->
<!--https://github.com/SyedAsadRazaDevops/how-to-incress-speed-Run-Laravel-Octane-using-RoadRunner-with-nginx-configration-#roadrunner-benefits--->
<!---->
<!--https://medium.com/@g.s.r/setup-oracle-database-12c-image-on-docker-step-by-step-15a4c344acf2-->
<!--https://www.youtube.com/watch?v=xY0Y1tWm8D4-->
<!---->
<!--https://github.com/yajra/laravel-oci8-->
<!--//-->
<!--https://github.com/pantsel/kong-admin-proxy-->
<!--https://github.com/mohsenmojadam2019/konga-->
<!--//-->
<!---->
<!---->
<!---->
<!--    $link = env('KONG_API_URL')."/apis/{$id}";-->
<!---->
<!---->
<!---->
<!---->
<!--public function update($id)-->
<!---->
<!---->
<!---->
<!---->
<!--{-->
<!---->
<!---->
<!--    $json = request('json');-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    $attr = request()->validate([-->
<!---->
<!---->
<!--        'name'         => 'required',-->
<!---->
<!---->
<!--        'upstream_url' => 'required|url',-->
<!---->
<!---->
<!--    ]);-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    $link = env('KONG_API_URL')."/apis/{$id}";-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    try{-->
<!---->
<!---->
<!--        $response = $this->client->request('PATCH', $link, [-->
<!---->
<!---->
<!--            'form_params' => $attr,-->
<!---->
<!---->
<!--            'verify'      => false,-->
<!---->
<!---->
<!--        ]);-->
<!---->
<!---->
<!--    }catch (\Exception $e){-->
<!---->
<!---->
<!--        return redirect("/apis/{$id}/edit?api={$json}")->with('error', 'Unable to update the api.');-->
<!---->
<!---->
<!--    }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--    return redirect('/')->with('message', '');-->
<!---->
<!---->
<!--}-->
<!---->
<!---->
<!---->
<!--//-->
<!--API Admin-->
<!--وقتی Kong را روی یک هاست نصب می‌کنید، Admin API در پورت‌های tcp/8001(http) و tcp/8444(https) قابل دسترسی خواهد بود. با تعامل با Admin Api، می توانید Kong را به صورت پویا پیکربندی کنید.-->
<!---->
<!--پروکسی-->
<!--از طرف دیگر کنگ به پورت‌های tcp/8001(http) و tcp/8443(https) گوش می‌دهد تا درخواست‌های کاربر نهایی را دریافت کند و با توجه به تنظیماتی که شما تعریف کرده‌اید، به نقاط پایانی شما فوروارد می‌کند. آن پورت‌ها سرویس‌هایی هستند که در معرض دید عموم قرار دارند و باید به اتصالات خارجی اجازه دهند.-->
<!---->
<!---->
<!--////////////////////////////////////////-->
<!--https://mirror.iranserver.com/docker/-->
<!--//-->
<!--douglasdc3/kong-->
<!--@var \DouglasDC3\Kong\Http\HttpClient-->
<!---->
<!--public function index()-->
<!--{-->
<!--$kong =  Http::get('http://localhost:8000');-->
<!--return response()->json($kong, 200);-->
<!--}-->
<!---->
<!--public function check_conncetion()-->
<!--{-->
<!--$kong = new Kong(new HttpClient('http://localhost:8000'));-->
<!--$consumer = new Consumer(['username' => 'muhamadzain.dev', 'custom_id' => 123]);-->
<!--$kong->consumers()->create($consumer)->acl()->create('admin');-->
<!--return response()->json(['success' => true, 'message' => 'user kong service created'], 200);-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!--'mobile'   => 'required|numeric|digits:11|regex:/^09[0-9]{9}$/|unique:users',-->
<!--'password' => 'required|string|min:6|confirmed',-->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!---->
<!--use Kavenegar as api;-->
<!--try{-->
<!-- $sender = "10004346";-->
<!-- $message = "Kaveh specialized Web service ";-->
<!-- $receptor = array("{Your Phone Number}");-->
<!-- $result = api->Send($sender,$receptor,$message);-->
<!-- if($result){-->
<!--     foreach($result as $r){-->
<!--         echo "messageid = $r->messageid";-->
<!--         echo "message = $r->message";-->
<!--         echo "status = $r->status";-->
<!--         echo "statustext = $r->statustext";-->
<!--         echo "sender = $r->sender";-->
<!--         echo "receptor = $r->receptor";-->
<!--         echo "date = $r->date";-->
<!--         echo "cost = $r->cost";-->
<!--     }       -->
<!-- }-->
<!--}-->
<!--catch(\Kavenegar\Exceptions\ApiException $e){-->
<!-- //In case that error throw 200 -->
<!-- echo $e->errorMessage();-->
<!--}-->
<!--catch(\Kavenegar\Exceptions\HttpException $e){-->
<!--//in case that there is any problem to connect to webservie  this error thow-->
<!-- echo $e->errorMessage();-->
<!--}-->
<!---->
<!---->
<!--///-->
<!--try{-->
<!-- $receptor = "09123456789";-->
<!-- $token = "123";-->
<!-- $token2 = "456";-->
<!-- $token3 = "789";-->
<!-- $template="verify";-->
<!-- //Send null for tokens not defined in the template-->
<!-- //Pass token10 and token20 as parameter 6th and 7th-->
<!-- $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type = null);-->
<!-- if($result){-->
<!--     foreach($result as $r){-->
<!--         echo "messageid = $r->messageid";-->
<!--         echo "message = $r->message";-->
<!--         echo "status = $r->status";-->
<!--         echo "statustext = $r->statustext";-->
<!--         echo "sender = $r->sender";-->
<!--         echo "receptor = $r->receptor";-->
<!--         echo "date = $r->date";-->
<!--         echo "cost = $r->cost";-->
<!--     }-->
<!-- }-->
<!--}-->
<!--catch(\Kavenegar\Exceptions\ApiException $e){-->
<!-- // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد-->
<!-- echo $e->errorMessage();-->
<!--}-->
<!--catch(\Kavenegar\Exceptions\HttpException $e){-->
<!-- // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد-->
<!-- echo $e->errorMessage();-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// faraboom-->
<!--Accept-Language: fa-->
<!--App-Key: 14181-->
<!--Device-Id: 192.168.1.1	            -->
<!--Bank-Id:SINAIR-->
<!--Token-Id: pktTDYtAGxdV59hLfMZLvZ8XSUjvkxh8UQbHByKKibCth5OuYMiktOSfCcEg4x87m8muJGiYHN5KKSkXFLeYXj5cc-->
<!--CLIENT-DEVICE-ID: 192.168.96.1-->
<!--CLIENT-IP-ADDRESS: 192.168.96.1-->
<!--CLIENT-USER-AGENT: User Agent-->
<!--CLIENT-USER-ID: 09365707968-->
<!--CLIENT-PLATFORM-TYPE: WEB-->
<!---->
<!---->
<!---->
<!--"username": "mmtest",-->
<!-- "password": "76840106",-->
<!-- "channel_type": "Internet"-->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--/////////////////////////////////////////////////////////////-->
<!--https://docs.hamravesh.com/darkube/create/popular/kong-api-gateway/-->
<!--//-->
<!--{{gateway}}/services-->
<!--{-->
<!-- "host": "httpbin.org",-->
<!-- "connect_timeout": 60000,-->
<!-- "protocol": "https",-->
<!-- "name": "httpbin-api",-->
<!-- "read_timeout": 60000,-->
<!-- "port": 443,-->
<!-- "path": "/",-->
<!-- "retries": 5,-->
<!-- "write_timeout": 60000,-->
<!-- "tags": null,-->
<!-- "client_certificate": null-->
<!--}-->
<!---->
<!--//-->
<!--{{gateway}}/consumers-->
<!--{-->
<!-- "username": "my-username",-->
<!-- "custom_id": "my-custom-id",-->
<!-- "tags": ["user-level", "low-priority"]-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// header-->
<!--'headers' => ['Content-Type' => 'application/json',-->
<!--"Accept" => "application/json", -->
<!--'Authorization' => "Basic " . env("KONG_CONSUMER")],-->
<!--/////////////////////////////////////////////////////////////-->
<!--Raw SQL-->
<!--Query Builder-->
<!--///////////////////////////////////////////////////////////// er-->
<!--ارتباط یک به یک (1:1)-->
<!--• ارتباط یک به چند (1:n)-->
<!--• ارتباط چند به چند (m:n)-->
<!--ارتباط چند به چند (m:n) وقتی است که يک نمونه موجوديت A به چند نمونه موجوديت B مربوط شود و يک نمونه موجوديت در B به چند نمونه موجوديت در A مرتبط شوند.-->
<!--/////////////////////////////////////////////////////////////-->
<!--$headers = $this->header + $headers;-->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!--public function postRequest(string $requestUrl, array $formParams = [], array $headers = [])-->
<!--{-->
<!---->
<!--    $headers = $this->header + $headers ?? null;-->
<!---->
<!--try {-->
<!--    $response = Http::withHeaders([-->
<!--        $headers-->
<!--    ])->withOptions(["verify"=>false])->post($this->baseUri . $requestUrl, [-->
<!--        $formParams,-->
<!--    ]);-->
<!---->
<!---->
<!--    return json_encode([-->
<!--        "status" => Response::HTTP_OK,-->
<!--        "data" => $response->json()-->
<!--    ]);-->
<!---->
<!--} catch (\Exception $exception) {-->
<!--    return response()->json($exception->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);-->
<!--}-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// traite http withheader-->
<!--trait ConsumeExternalService-->
<!--{-->
<!--public function headers(array $headers = [])-->
<!--{-->
<!--    array_merge($headers, [-->
<!--        'Accept' => 'application/json',-->
<!--        'Authorization' => $this->token,-->
<!--    ]);-->
<!---->
<!--    return Http::withHeaders($headers);-->
<!--}-->
<!---->
<!--public function request(string $method,string $endPoint, array $formParams = [],array $headers = [])-->
<!---->
<!--{-->
<!--    return $this->headers($headers)->$method($this->url.$endPoint, $formParams);-->
<!---->
<!--}-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////// merge -->
<!--$my_array1 = array("size" => "big", 2,3 );-->
<!--$my_array2 = array("a", "b", "size" => "medium",-->
<!--                     "shape" => "circle", 4);-->
<!--$res = array_merge($my_array1, $my_array2);-->
<!---->
<!--print_r($res);-->
<!--Output:-->
<!--Array-->
<!--(-->
<!-- [size] => medium-->
<!-- [0] => 2-->
<!-- [1] => 3-->
<!-- [2] => a-->
<!-- [3] => b-->
<!-- [shape] => circle-->
<!-- [4] => 4-->
<!--)-->
<!---->
<!--///////////////////////////////////////////////////////////// curl http  get post-->
<!--private static function dayAPIsPost(string $url, array $params)-->
<!--{-->
<!--//        KONG_URL = 172.16.26.34:8000/day-api/-->
<!---->
<!--$key = "Authorization: Basic " . env("DAY_API_URL_CONSUMER");-->
<!--    $curl = curl_init();-->
<!--    curl_setopt_array($curl, array(-->
<!--        CURLOPT_URL => env("DAY_API_URL") . '/' . $url,//172.16.26.34:8000/day-api/dayAPIMyIns-->
<!--        CURLOPT_RETURNTRANSFER => true,-->
<!--        CURLOPT_ENCODING => '',-->
<!--        CURLOPT_MAXREDIRS => 10,-->
<!--        CURLOPT_TIMEOUT => 0,-->
<!--        CURLOPT_FOLLOWLOCATION => true,-->
<!--        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--        CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--        CURLOPT_POSTFIELDS => $params,-->
<!--        CURLOPT_HTTPHEADER => array($key),-->
<!--    ));-->
<!---->
<!--    $response = curl_exec($curl);-->
<!--    curl_close($curl);-->
<!--    return $response ?? null;-->
<!--}-->
<!--//get-->
<!--$curl = curl_init();-->
<!--curl_setopt_array($curl, array(-->
<!--CURLOPT_URL => env("DAY_API_URL") . '/dayAPIAgents?pagesize=100&pageNumber=' . $i++,-->
<!--CURLOPT_RETURNTRANSFER => true,-->
<!--CURLOPT_ENCODING => '',-->
<!--CURLOPT_MAXREDIRS => 10,-->
<!--CURLOPT_TIMEOUT => 0,-->
<!--CURLOPT_FOLLOWLOCATION => true,-->
<!--CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--CURLOPT_CUSTOMREQUEST => 'GET',-->
<!--CURLOPT_HTTPHEADER => array(-->
<!--    'Authorization: Basic ' . env("DAY_API_URL_CONSUMER")-->
<!--),-->
<!--));-->
<!--$response = curl_exec($curl);-->
<!--curl_close($curl);-->
<!---->
<!--$response = json_decode($response, true);-->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!--public function getProducts(array $products): Collection-->
<!--{-->
<!--try {-->
<!--    $res = [];-->
<!--    foreach ($products as $product){-->
<!--        $res[$product] = json_decode($this->client->get(sprintf('product/%d', $product))-->
<!--            ->getBody()-->
<!--            ->getContents());-->
<!--    }-->
<!--} catch (BadResponseException $exception) {-->
<!--    throw new HttpException(-->
<!--        $exception->getCode(),-->
<!--        json_decode($exception->getResponse()->getBody()->getContents())-->
<!--    );-->
<!--}-->
<!---->
<!--return new Collection($res);-->
<!---->
<!--///////////////////////////////////////////////////////////// kong-->
<!--https://kong.yarhis.ir/-->
<!--https://kong-admin.yarhis.ir/#!/consumers-->
<!--https://localhost:9443/#!/auth-->
<!--///////////////////////////////////////////////////////////// header-->
<!--$headers = $request->header(); /* Getting All Headers from request */-->
<!--     $header = $request->header('Accept'); /* Getting Singe Header value from request */-->
<!---->
<!--    return response()->json($headers);-->
<!---->
<!--///////////////////////////////////////////////////////////// middleware-->
<!---->
<!--class ApiAuthentication-->
<!--{-->
<!-- public function handle($request, Closure $next)-->
<!-- {-->
<!--     $token = $request->bearerToken();-->
<!--     $user = \App\User::where('api_token', $token)->first();-->
<!--     if ($user) {-->
<!--         auth()->login($user);-->
<!--         return $next($request);-->
<!--     }-->
<!--     return response([-->
<!--         'message' => 'Unauthenticated'-->
<!--     ], 403);-->
<!-- }-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////// model static resolve-->
<!--* @method static Builder|Model owned()-->
<!---->
<!--$ticket = Ticket::owned()->findOrFail($id);-->
<!--////////////////////////////////////////////////////////////// resolve-->
<!--public function config(): ConfigInterface-->
<!--{-->
<!--return resolve(Config::class);-->
<!--}-->
<!--'merchant_id' => $this->config->merchantId(),-->
<!---->
<!--////////////////////////////////////////////////////////////-->
<!--"username": "mmtest",-->
<!--"password": "76840106",-->
<!--"channel_type": "Internet"-->
<!---->
<!--"operation_time": 1674986027568,-->
<!--"ref_id": "d4cda1fa-61ff-4d69-9ea4-83b1113fabfc",-->
<!--"code": "0082205388",-->
<!--"gender": "FEMALE",-->
<!--"name": "مريم ايلخاني",-->
<!--"last_login_date": "2023-01-29T13:22:28+0330",-->
<!--"session_id": "0c29f168-779f-42bd-a3e3-30a6b6292fb5"-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////////-->
<!---->
<!--mihan-->
<!--aA!12345678-->
<!---->
<!--clientkey mihan-->
<!--https://api.tosanboom.com:4433/v1-->
<!--https://portal.sandbox.faraboom.co/fa/user#/fa/user/login/histories-->
<!--///////////////////////////////////////////////////////////////////////////////////////// docker-->
<!--Delete all container-->
<!--docker rm -fv $(docker ps -aq)-->
<!--Stop  3306 mysql-->
<!--sudo kill `sudo lsof -t -i:3306`-->
<!--Find port use-->
<!--sudo netstat -tunlp-->
<!--Delete port-->
<!---->
<!--sudo kill $(sudo lsof -t -i:8002)-->
<!---->
<!--For delete -->
<!--sudo chmod -R 775 mysql-->
<!--sudo rm -rf mysql-->
<!--sudo cp cacert.crt /usr/local/share/ca-certificates/cacert.crt-->
<!---->
<!--//-->
<!--sudo systemctl stop docker.socket -->
<!--sudo systemctl stop docker -->
<!--sudo systemctl restart docker-->
<!--//-->
<!--sudo chmod 755 xampp-linux-x64-8.2.0-0-installer.run-->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// check value body curl-->
<!--چک میکند body post نال نباشد-->
<!--public function post($url, $body = [], $query = [], $headers = [])-->
<!-- {-->
<!--     $body = array_filter($body, function ($value) {-->
<!--         return ! \is_null($value);-->
<!--     });-->
<!---->
<!--     return $this->request('POST', $url, $query, $body, $headers);-->
<!-- }-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// curl get post-->
<!--public static function branches()-->
<!-- {-->
<!--     $curl = curl_init();-->
<!--     curl_setopt_array($curl, array(-->
<!--         CURLOPT_URL => Helpers::env("dayGateWay") . "branches/list",-->
<!--         CURLOPT_RETURNTRANSFER => true,-->
<!--         CURLOPT_ENCODING => '',-->
<!--         CURLOPT_MAXREDIRS => 10,-->
<!--         CURLOPT_TIMEOUT => 0,-->
<!--         CURLOPT_FOLLOWLOCATION => true,-->
<!--         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--         CURLOPT_CUSTOMREQUEST => 'GET',-->
<!--         CURLOPT_HTTPHEADER => array(-->
<!--             'Authorization: Bearer ' . Helpers::dayAPIGetToken(),-->
<!--             'Content-Type: application/json'-->
<!--         ),-->
<!--     ));-->
<!---->
<!--     $response = curl_exec($curl);-->
<!--     curl_close($curl);-->
<!--     $response = json_decode($response);-->
<!--     if ($response->resultCode === 30)-->
<!--         return json_encode([-->
<!--             "status" => true,-->
<!--             "list" => $response->result-->
<!--         ]);-->
<!--     else-->
<!--         return json_encode([-->
<!--             "status" => false,-->
<!--             "result" => $response-->
<!--         ]);-->
<!-- }-->
<!--//post-->
<!--#post-->
<!---->
<!--private static function dayAPIGetToken()-->
<!--{-->
<!--    $curl = curl_init();-->
<!---->
<!--    curl_setopt_array($curl, array(-->
<!--        CURLOPT_URL => Helpers::env("dayGateWay") . 'token',-->
<!--        CURLOPT_RETURNTRANSFER => true,-->
<!--        CURLOPT_ENCODING => '',-->
<!--        CURLOPT_MAXREDIRS => 10,-->
<!--        CURLOPT_TIMEOUT => 0,-->
<!--        CURLOPT_FOLLOWLOCATION => true,-->
<!--        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--        CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--        CURLOPT_POSTFIELDS => '{"userName":"' . Helpers::env("didarAPIUser") . '","password":"' . Helpers::env("didarAPIGatewayPss") . '"}',-->
<!--        CURLOPT_HTTPHEADER => array(-->
<!--            'Content-Type: application/json'-->
<!--        ),-->
<!--    ));-->
<!---->
<!--    $response = curl_exec($curl);-->
<!---->
<!--    curl_close($curl);-->
<!--    return json_decode($response)->result->content;-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// -->
<!--اگر بخوایم در سرویس دیگر مثلا  احراز هویت چک کنیم باید post کنیم ولی اگر فقط گرفتن باشد همان get-->
<!--///////////////////////////////////////////////////////////////////////////////////////// time zone-->
<!--'timezone' => 'Tehran/Asia',-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// json Response-->
<!--//استعلام شاهکار-->
<!--public static function dayAPIShahkarInquiry($nationalID, $mobile)-->
<!--{-->
<!--return json_decode(Helpers::dayAPIsPost("dayAPIShahkarInquiry", ["nationalID" => $nationalID, "mobile" => $mobile]))->status ?? false;-->
<!--}-->
<!---->
<!---->
<!--///-->
<!--return new JsonResponse([-->
<!--"status" => true,-->
<!--"place" => $place,-->
<!--"medicalCentersInfo" => [-->
<!--    "perProvinceCount" => $medicalCentersCount,-->
<!--    "introductionType" => MedicalCenters::$enumIntroductionType,-->
<!--    "typeID" => MedicalCenters::$enumTypeID-->
<!--],-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////////-->
<!--echo Request::server('HTTP_USER_AGENT');-->
<!--$input['useragent'] = $request->server('HTTP_USER_AGENT');-->
<!---->
<!--$request->userAgent();-->
<!--$ua = $request->header('User-Agent');-->
<!---->
<!--$input['ip'] = $request->ip();-->
<!--dd(["IP" => $_SERVER['REMOTE_ADDR'] ?? $_SERVER['HTTP_X_FORWARDED_FOR']]);-->
<!---->
<!--echo $_SERVER['HTTP_USER_AGENT']-->
<!---->
<!---->
<!--//Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Safari/537.36-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// docker -->
<!--Remove all image-->
<!--docker rmi $(docker images -q)   پاک کرپن کل ایمیج-->
<!--sudo chown -R www-data:www-data .    اجازه دسترسی-->
<!--sudo chmod -R 777 ./-->
<!--Ll    لیست-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// middleware header-->
<!--public function handle ($request, Closure $next, $header)-->
<!--{-->
<!--$name = ($header == 'username' ? 'X-Consumer-Username' : 'X-Consumer-Custom-ID');-->
<!---->
<!--if (! $request->header($name)) {-->
<!--    abort(400, 'Invalid Request Headers.');-->
<!--}-->
<!---->
<!--return $next($request);-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// env docker-->
<!--container_name: "${APP_NAME}MySql"-->
<!--environment:-->
<!--MYSQL_DATABASE: ${DB_DATABASE}-->
<!--MYSQL_USER: ${DB_USERNAME}-->
<!--MYSQL_PASSWORD: ${DB_PASSWORD}-->
<!--MYSQL_ROOT_PASSWORD: ${DB_PASSWORD}-->
<!--SERVICE_TAGS: "${APP_NAME}MySql"-->
<!--SERVICE_NAME: "${APP_NAME}MySql"-->
<!--//-->
<!--redis:-->
<!--image: redis:latest-->
<!--container_name: ${REDIS_HOST}-->
<!--restart: unless-stopped-->
<!--volumes:-->
<!--- ./storage/redis/data:/data-->
<!--ports:-->
<!--- "${EX_REDIS_PORT}:${REDIS_PORT}"-->
<!--networks:-->
<!--- AccessManagement -->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// form request-->
<!--if (isset($request->latitude)) $rest["latitude"] =  $request->latitude;-->
<!---->
<!--$rest['birthDate'] = Carbon::createFromFormat('Y-m-d', $inquiredUser->BirthDate);-->
<!--$rest["pejvakID"] = intval($inquiredUser->pejvakID) ?? null;-->
<!--$rest['married'] = isset($request->married) ? boolval($request->married) : null;-->
<!--$rest['createdByAdmin'] = $this->authUser->id;-->
<!--$rest['email'] = isset($request->email) ? $request->email : null;-->
<!--$rest['gender'] = boolval($inquiredUser->Gender);-->
<!--$rest['address'] = isset($request->address) ? $request->address : null;-->
<!---->
<!--$validateArray = User::validate;-->
<!--if (!$rest["address"]) {-->
<!--unset($validateArray['address']);-->
<!--unset($validateArray["address.street"]);-->
<!--unset($validateArray["address.alley"]);-->
<!--unset($validateArray["address.number"]);-->
<!--unset($validateArray["address.unit"]);-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////// Redis-->
<!--use Illuminate\Support\Facades\Redis;-->
<!--///-->
<!--$sessionID = sha1(uniqid());-->
<!--Redis::set($sessionID, json_encode(["IP" => $userIP, "captcha" => $forceCaptcha['code']]));-->
<!--Redis::expire($sessionID, 120);-->
<!--return new JsonResponse(-->
<!--[-->
<!--    "sessionID" => $sessionID,-->
<!--    "captcha" => $forceCaptcha['img']-->
<!--]-->
<!--);-->
<!---->
<!--///-->
<!--$userIP = $request->server->get('HTTP_X_FORWARDED_FOR') ?? $request->server->get('REMOTE_ADDR');-->
<!--$banLevel = Redis::get($userIP) ?? 0;-->
<!--if ($banLevel < -1000) {-->
<!--$this->IP = $userIP;-->
<!--return $this->oauthError(1);-->
<!--}-->
<!---->
<!--///-->
<!--private function save()-->
<!--{-->
<!--Redis::set($this->sessionID, json_encode([-->
<!--    "IP" => $this->IP,-->
<!--    "captcha" => $this->captcha,-->
<!--    "mobile" => $this->mobile,-->
<!--    "registered" => $this->registered,-->
<!--    "OTP" => $this->OTP,-->
<!--    "person" => $this->person,-->
<!--    "passwordTry" => $this->passwordTry,-->
<!--    "resetPassword" => $this->resetPassword,-->
<!--]));-->
<!--Redis::expire($this->sessionID, timeout);-->
<!--return true;-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// route -->
<!--$router->GET("/create/{nationalID:[0-9]+}/{birthDate}/{mobile:[0-9]+}", "UserManagement@inquiry");-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// mobile-->
<!--if (isset($request->mobile) && preg_match("/09[0-9]{9}$/", $request->mobile))-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// get ip-->
<!--گرفتن ایپی کاربر-->
<!--$router->get('/myIP', function () {-->
<!--dd(["IP" => $_SERVER['REMOTE_ADDR'] ?? $_SERVER['HTTP_X_FORWARDED_FOR']]);-->
<!--});-->
<!--///-->
<!--$userIP = $request->server->get('HTTP_X_FORWARDED_FOR') ?? $request->server->get('REMOTE_ADDR');-->
<!--dd($userIP);-->
<!--/////////////////////////////////////////////////////////////////////////////////////////  define دیفاین-->
<!--میخوایم مدت زمان گلوبال بدیم -->
<!--define("timeout", env("TEMP_SESSION_TIMEOUT"));-->
<!--Redis::expire($userIP, (int) abs($banLevel * timeout));-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// encode-->
<!--$data = [];-->
<!--if ($request->has('city')) {-->
<!--$data[]['city'] = $request->get('city');-->
<!--$userInfo->city_id = $request->get('city');-->
<!--}-->
<!--if ($request->has('province')) {-->
<!--$data[]['province'] = $request->get('province');-->
<!--}-->
<!---->
<!--$userInfo->meta_data = json_encode($data);-->
<!--///-->
<!--$dataToSend = [-->
<!--'message'  => $message,-->
<!--'sender'   => '10008566',-->
<!--'receptor' => $number-->
<!--];-->
<!--$data=json_encode($dataToSend)-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////// decode-->
<!--$userInfo = Auth::user()->userInfo;-->
<!---->
<!--$metaData = json_decode($userInfo->meta_data, true);-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// replace-->
<!--'address' => str::replace("‏", "", $value['address']),-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////////-->
<!--//obect-->
<!--array:1 [▼ // app\Http\Controllers\Api\V1\Dashboard\BimeController.php:43-->
<!--0 => array:2 [▼-->
<!-- 0 => {#276 ▼-->
<!--   +"title": "Sample Post"-->
<!--   +"body": "This is my sample curl post request with data"-->
<!--   +"userId": 22-->
<!--   +"id": 101-->
<!-- }-->
<!-- 1 => 201-->
<!--]-->
<!--]-->
<!--//array-->
<!--        $responseDecode=json_decode($response->getBody(), true),-->
<!--array:1 [▼ // app\Http\Controllers\Api\V1\Dashboard\BimeController.php:43-->
<!--0 => array:2 [▼-->
<!-- 0 => {#276 ▼-->
<!--   +"title": "Sample Post"-->
<!--   +"body": "This is my sample curl post request with data"-->
<!--   +"userId": 22-->
<!--   +"id": 101-->
<!-- }-->
<!-- 1 => 201-->
<!--]-->
<!--]-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// job email-->
<!--public function store(CreateUpdateCompanyRequest $request)-->
<!--{-->
<!--$company = $this->companyService->createNewCompany($request->validated(), $request->image);-->
<!--CompanyCreatedJob::dispatch($company->email)->onQueue(env('QUEUE_EMAIL'));-->
<!--//EvaluationCreatedJob::dispatch($company->data->email->onQueue(env('QUEUE_EMAIL'));-->
<!--return new CompanyResource($company);-->
<!--}-->
<!--// jobs/CompanyCreatedJob-->
<!--class CompanyCreatedJob implements ShouldQueue-->
<!--{-->
<!--use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;-->
<!---->
<!--protected $email;-->
<!---->
<!--public function __construct(string $email)-->
<!--{-->
<!--    $this->email = $email;-->
<!--}-->
<!---->
<!--public function handle()-->
<!--{-->
<!--    Mail::to($this->email)-->
<!--        ->send(new CompanyCreatedWelcomeMail());-->
<!--}-->
<!--}-->
<!--//route-->
<!--Route::get('/test', function() {-->
<!--CompanyCreatedJob::dispatch('teste2@email.com'->onQueue('queue_micro_email');-->
<!--    -->
<!--return response()->json(['message' => 'success']);-->
<!--});-->
<!--//env-->
<!--#https://cloudamqp.com/-->
<!--RABBITMQ_QUEUE=queue_micro_01-->
<!--RABBITMQ_HOST=-->
<!--RABBITMQ_PORT=5672-->
<!--RABBITMQ_USER=-->
<!--RABBITMQ_PASSWORD=-->
<!--RABBITMQ_VHOST=-->
<!--RABBITMQ_WORKER=default-->
<!---->
<!--QUEUE_EMAIL=queue_micro_email-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// uuid update-->
<!--//table-->
<!--$table->uuid('uuid');-->
<!--//observe-->
<!--public function creating(Company $company)-->
<!--{-->
<!--$company->uuid = Str::uuid();-->
<!--$company->url = Str::slug($company->name, '-');-->
<!--}-->
<!--//service-->
<!--public function getCompanyByUuid(string $uuid = null)-->
<!--{-->
<!--return $this->repository->where('uuid', $uuid)->firstOrFail();-->
<!--}-->
<!--public function updateCompany(string $uuid, array $data, UploadedFile $image = null)-->
<!--{-->
<!--$company = $this->getCompanyByUuid($uuid);-->
<!---->
<!--if (isset($image)) {-->
<!--    if (Storage::exists($company->image))-->
<!--        Storage::delete($company->image);-->
<!---->
<!--    $path = $this->uploadImage($image);-->
<!--    $data['image'] = $path;-->
<!--}-->
<!--$company->update($data);-->
<!--return $company;-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////////////////////// segment-->
<!--بخش دوم url بگیر-->
<!--public function rules()-->
<!--{-->
<!--// $url = $this->url;       //If URL is coming from request-->
<!--$url = $this->segment(2);   //URL is second segment for route /categories/{url}-->
<!---->
<!--return [-->
<!--    //Unique:table,current_field,exception_value,exception_field-->
<!--    'title' => "required|min:3|max:150|unique:categories,title,{$url},url",-->
<!--    'description' => 'required|min:3|max:255',-->
<!--];-->
<!--}-->
<!--//route-->
<!--Route::apiResource('categories', CategoryController::class);-->
<!--///////////////////////////////////////////////////////////////////////////////////////// kong-->
<!--private static function dayAPIGetToken()-->
<!--{-->
<!--$curl = curl_init();-->
<!---->
<!--curl_setopt_array($curl, array(-->
<!--    CURLOPT_URL => Helpers::env("dayGateWay") . 'token',-->
<!--    CURLOPT_RETURNTRANSFER => true,-->
<!--    CURLOPT_ENCODING => '',-->
<!--    CURLOPT_MAXREDIRS => 10,-->
<!--    CURLOPT_TIMEOUT => 0,-->
<!--    CURLOPT_FOLLOWLOCATION => true,-->
<!--    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,-->
<!--    CURLOPT_CUSTOMREQUEST => 'POST',-->
<!--    CURLOPT_POSTFIELDS => '{"userName":"' . Helpers::env("didarAPIUser") . '","password":"' . Helpers::env("didarAPIGatewayPss") . '"}',-->
<!--    CURLOPT_HTTPHEADER => array(-->
<!--        'Content-Type: application/json'-->
<!--    ),-->
<!--));-->
<!--$response = curl_exec($curl);-->
<!--curl_close($curl);-->
<!--return json_decode($response)->result->content;-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// cors frontend-->
<!--class CorsMiddleware-->
<!--{-->
<!---->
<!--public function handle($request, Closure $next)-->
<!--{-->
<!--    $headers = [-->
<!--        'Access-Control-Allow-Origin'      => '*',-->
<!--        'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS, PUT, DELETE',-->
<!--        'Access-Control-Allow-Credentials' => 'true',-->
<!--        'Access-Control-Max-Age'           => '86400',-->
<!--        'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With'-->
<!--    ];-->
<!---->
<!--    if ($request->isMethod('OPTIONS'))-->
<!--    {-->
<!--        return response()->json('{"method":"OPTIONS"}', 200, $headers);-->
<!--    }-->
<!---->
<!--    $response = $next($request);-->
<!--    foreach($headers as $key => $value)-->
<!--    {-->
<!--        $response->header($key, $value);-->
<!--    }-->
<!---->
<!--    return $response;-->
<!--}-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// ban -->
<!--if (Carbon::now()->lte($user->banUntil)) {-->
<!--$ban = Carbon::now()->diffInSeconds($user->banUntil, false);-->
<!--return [-->
<!--    "result" => false,-->
<!--    "error" => "user banned",-->
<!--    "banUntil" => $ban-->
<!--];-->
<!--}-->
<!--///-->
<!--if($model->edited_at->gt($model->created_at)){ // edited at is newer than created at }-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// search named parameter-->
<!--public function index(Request $request)-->
<!--{-->
<!--$search = $request->search;-->
<!--$users = $this->model-->
<!--    ->getUsers(-->
<!--        search: $request->search ?? ''-->
<!--    );-->
<!---->
<!--return view('users.index', compact('users'));-->
<!--}-->
<!--//User-->
<!--public function getUsers(string|null $search = null)-->
<!--{-->
<!--return $this->where(function ($query) use ($search) {-->
<!--    if ($search) {-->
<!--        $query->where('email', $search);-->
<!--        $query->orWhere('name', 'LIKE', "%{$search}%");-->
<!--    }-->
<!--})->get();-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// update key value-->
<!--$AttributeCourse->query()->where('course_id', $request->input('course_id'))->where('key', $request->input('key'))->update([-->
<!--'value' => $request->input('value'),-->
<!--]);-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// attach many to many-->
<!--public function attachUserId($organisation, User $user)-->
<!--{-->
<!--//assign user to organisation-->
<!--$organisation->users()->attach([-->
<!--    $user->id,-->
<!--]);-->
<!--}-->
<!--//-->
<!--public function create(CreateOrganisationRequest $request)-->
<!--{-->
<!--try {-->
<!--    $user = auth('sanctum')->user();-->
<!---->
<!--    $organisation = $this->organisationRepository->store($request->validated());-->
<!---->
<!--    $this->organisationRepository->attachUserId($organisation, $user);-->
<!--} catch (\Exception $exception) {-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// whereIn-->
<!--$permissions = Permission::wherein(-->
<!--'name',-->
<!--[-->
<!--    'View User',-->
<!--]-->
<!--)->get();-->
<!--/////////////////////////////////////////////////////////////////////////////////////////// map-->
<!--$users = User::all()->map(function ($user) { return collect($user)->only(['id', 'name', 'email']); });-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// mapWithKeys-->
<!--$users = collect([ -->
<!--(object)['id' => 5, 'value' => 30, 'something' => 'else'],-->
<!--(object)['id' => 6, 'value' => 40, 'something' => 'else2'],-->
<!--$users = $users->mapWithKeys(function($user, $key) {-->
<!--return [$user->id => $user]; });-->
<!--dd($users);-->
<!--//-->
<!--Collection {#374 #items: array:6 [ -->
<!--5 => {#364 +"id": 5 +"value": 30 +"something": "else" } -->
<!--6 => {#363 +"id": 6 +"value": 40 +"something": "else2" }-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////// Case-->
<!--PascalCase-->
<!--camelCase-->
<!--snack_case-->
<!--/////////////////////////////////////////////////////////////////////////////////////////-->
<!--matsuri-->
<!--/////////////////////////////////////////////////////////////////////////////////// match switch-->
<!--اگر در فیلد type مثلا bulk موجود بود تبلیف انبوه نمایش بده-->
<!--public function getTypeFaAttribute(): string-->
<!--{-->
<!--return match ($this->type) {-->
<!--    'bulk'     => 'تبلیغ انبوه',-->
<!--    'sms'      => 'پیامک',-->
<!--    'member'   => 'اعضای گروه',-->
<!--    'follower' => 'فالورها',-->
<!--    'comment'  => 'نظرات',-->
<!--    'manual'   => 'دستی',-->
<!--    'bank'     => 'بانک شماره',-->
<!--    'time'     => 'ساعتی',-->
<!--    'owner'    => 'پیامک صاحبین',-->
<!--    'view'     => 'بازدیدی',-->
<!--    'targeted' => 'هدفمند',-->
<!--};-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// update json-->
<!--$affected = DB::table('users')-->
<!--          ->where('id', 1)-->
<!--          ->update(['options->enabled' => true]);-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// log-->
<!--public const SMS_LOG_TABLE_NAME = 'sms_log';-->
<!--public const SMS_ERROR_TABLE_NAME = 'sms_error_log';-->
<!---->
<!--protected function logError(Exception $e): void-->
<!--{-->
<!--DB::table(self::SMS_ERROR_TABLE_NAME)->insert([-->
<!--    'code'       => $e->getCode(),-->
<!--    'message'    => $e->getMessage(),-->
<!--    'created_at' => now(),-->
<!--    'updated_at' => now(),-->
<!--]);-->
<!--}-->
<!--public function log(stdClass $message): array-->
<!--{-->
<!--$item = [-->
<!--    'message_id'    => $message->messageid,-->
<!--    'message'       => $message->message,-->
<!--    'message_count' => $this->countMessage($message->message)->count,-->
<!--    'status'        => $message->status,-->
<!--    'status_text'   => $message->statustext,-->
<!--    'sender'        => $message->sender,-->
<!--    'receptor'      => $message->receptor,-->
<!--    'date'          => $message->date,-->
<!--    'cost'          => $message->cost,-->
<!--    'created_at'    => now(),-->
<!--    'updated_at'    => now(),-->
<!--];-->
<!--$id = DB::table(self::SMS_LOG_TABLE_NAME)->insertGetId($item);-->
<!--$item['id'] = $id;-->
<!--return $item;-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// -->
<!--//campain-->
<!--public function campaignSms(): BelongsToMany-->
<!--{-->
<!--return $this->belongsToMany(Sms::class, 'campaign_sms_pivot', 'campaign_id', 'sms_id');-->
<!--}-->
<!--public function sendSms(array $mobiles): array|string-->
<!--{-->
<!--$results = sms()-->
<!--    ->sender($this->user->privateLine())-->
<!--    ->send($this->ad->text, $mobiles);-->
<!---->
<!--$this->campaignSms()->attach(array_column($results, 'id'));-->
<!---->
<!--return $results;-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// upsert-->
<!--اگر برای اپدیت بخوای بصورت خودکار تغییر بدی مثلا قیمت را -->
<!--Flight::upsert([-->
<!--['departure' => 'tehran', 'destination' => 'ahwaz', 'price' => 99],-->
<!--['departure' => 'tehran', 'destination' => 'karag', 'price' => 150]-->
<!--], ['departure', 'destination'], ['price']);-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--public function crawled(): bool-->
<!--{-->
<!--$crawled = true;-->
<!---->
<!--CrawlTask::query()-->
<!--    ->where('campaign_id', $this->id)-->
<!--    ->eachById(function (CrawlTask $task) use (&$crawled) {-->
<!--        if ($task->isInProcess()) {-->
<!--            $crawled = false;-->
<!--        }-->
<!--    });-->
<!---->
<!--return $crawled;-->
<!--}-->
<!--//CrawlTask-->
<!--public function isInProcess(): bool-->
<!--{-->
<!--return 'doing' === $this->status();-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// data_get -->
<!--پیدا کردن اولین ارایه از کالکشن-->
<!--public function getData(string $key, mixed $default = null): mixed-->
<!--{-->
<!--return data_get($this->data, $key, $default);-->
<!--}-->
<!---->
<!--public function userId()-->
<!--{-->
<!--return Arr::first(-->
<!--    $this->getData('data.tasksmodel.body.user_ids')-->
<!--);-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// dns YANDEX-->
<!--DNS Server IP Address: 77.88.8.1-->
<!--77 88 8 8-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// multi auth-->
<!--اگر میدلور ادمین بره صفحه ادمین در غیر اینصورت بره جای دیگر-->
<!--public function handle($request, Closure $next, $guard = null)-->
<!--{-->
<!--if (Auth::guard($guard)->check()) {-->
<!--    switch ($guard) {-->
<!--        case 'admin':-->
<!--            return redirect()->route('admin.home.show');-->
<!--            break;-->
<!--        default:-->
<!--            return redirect('/');-->
<!--    }-->
<!--}-->
<!---->
<!--return $next($request);-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--function instagram_image(string $path): string-->
<!--{-->
<!--return Cache::remember($path, now()->addMinutes(30), function () use ($path) {-->
<!--    return 'data:image/jpg;base64,' . base64_encode(file_get_contents($path));-->
<!--});-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////  queue-->
<!--php artisan queue:work --queue=MyQueueName-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// graph vs rest-->
<!--مزیت گراف اینکه با جزییات بیشتری می توانیم جیسان دریافت کنیم ولی در رست کل دیتا برمیگردد -->
<!--در گراف ما فقط یک اندپوینت داریم-->
<!--از گراف فقط برای دیتاهای حجیم استفاده می کنند-->
<!--گراف یک کویری لنگوییچ و رست یک الگوی معماری-->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// change type hint-->
<!--عوض کردن داخل پرانتز name paramed-->
<!--public function getImportResult(string $batchId)-->
<!--{-->
<!--$batch = Bus::findBatch($batchId);-->
<!---->
<!--if(!$batch){-->
<!--    return self::BATCH_NOT_EXIST;-->
<!--}-->
<!---->
<!--if ($batch->finished()) {-->
<!--    return $this->makeResult(true);-->
<!--}-->
<!---->
<!--return $this->makeResult(completionPercentage: $batch->progress());-->
<!--}-->
<!---->
<!--private function makeResult(bool $isFinished = false, $completionPercentage = 100)-->
<!--{-->
<!--return [-->
<!--    'isFinished' => $isFinished,-->
<!--    'completion_percentage' => $completionPercentage-->
<!--];-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// resource-->
<!--'phone' => $this->phone,-->
<!--'status' => $this->organisations[0]->status,-->
<!--'status_text' => Status::tryFrom($this->organisations[0]->status)?->text(),-->
<!--'registered_date' => $this->formatted_created_at-->
<!--'department' => $this->when(-->
<!--$this->relationLoaded('licenseForm') &&-->
<!--$this->licenseForm->relationLoaded('department'),-->
<!--function () {-->
<!--    return DepartmentIdAndTitleResource::make($this->licenseForm->department);-->
<!--}-->
<!--),-->
<!--'hash_id' => $this->slug(),-->
<!--'value' => json_decode($this->value),-->
<!--'users' => ['required', 'array'],-->
<!--'users.*' => ['required', 'integer', Rule::exists('users', 'id')],ایدی حتما در جدول باشد-->
<!--'status' => ['required', Rule::in(config('enums.user.organisation.statuses'))],-->
<!--"phone" => ["regex:/^0[0-9]{10}$/", "nullable"],-->
<!---->
<!--"address" => "array:street,alley,number,unit|nullable",-->
<!--"address.street" => "required|min:2|max:255",-->
<!--"address.alley" => "max:255|nullable",-->
<!--"address.number" => "required|numeric|min:1",-->
<!--"address.unit" => "required|numeric",-->
<!---->
<!---->
<!--"passportNumber" => "required_if:nationalID,null|prohibited_unless:nationalID,null|regex:/^(?!^0+$)[a-zA-Z0-9]{3,20}$/|nullable|unique:users",-->
<!---->
<!--"shenasnamehSeri" => "required_if:pejvakID,null|prohibited_unless:pejvakID,null|min:2|max:7|nullable",-->
<!--"zipCode" => "integer|min:10000|max:9999999999|nullable",-->
<!---->
<!---->
<!---->
<!--"latitude" => ["required_with:longitude", "between:-90,90"],-->
<!--"longitude" => ["required_with:latitude", "between:-180,180"],-->
<!---->
<!---->
<!--'from' => ['date_format:Y-m-d'],-->
<!--'to' => ['date_format:Y-m-d', 'after_or_equal:from'],-->
<!---->
<!--'file' => [-->
<!--'required','file', 'max:5120',-->
<!--'mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel,text/csv'-->
<!--]-->
<!--////////////////////////////////// form request get name relation department-->
<!--از هدر ایدی ارگانیزیشن را دریافت میکنیم بعد در ارگانیزیشن پیداش میکنیم از طریق رابطه ای که با دپارتمان دارد نام آن را میکشیم بیرون-->
<!--class ImportRequest extends FormRequest-->
<!--{-->
<!--private $organisationDepartments-->
<!--public function authorize()-->
<!--{-->
<!--    return true;-->
<!--}-->
<!--public function rules()-->
<!--{-->
<!--    $this->setOrganisationDepartments();-->
<!--    return [-->
<!--        'users' => ['required', 'array'],-->
<!--        'users.*.first_name' => ['required', 'string', 'min:1', 'max:255'],-->
<!--        'users.*.last_name' => ['required', 'string', 'min:1', 'max:255'],-->
<!--        'users.*.phone' => ['required', 'string'],-->
<!--        'users.*.department' => ['required', Rule::in($this->organisationDepartments)]-->
<!--    ];-->
<!--}-->
<!---->
<!--private function setOrganisationDepartments()-->
<!--{-->
<!--    $organisationDepartments = Organisation::find($this->header('X-Header-Organisation'))-->
<!--        ->departments()-->
<!--        ->select('name')-->
<!--        ->get()-->
<!--        ->pluck('name')-->
<!--        ->toArray();-->
<!---->
<!--    return $this->organisationDepartments = $organisationDepartments;-->
<!--}-->
<!--}-->
<!--/////////////////////////////////////////////////////////////////////////////////// check relation-->
<!--چک می کند ایا در user با organisation ریلیشن دارد-->
<!--public function hasAnyOrganisation()-->
<!--{-->
<!--return $this->organisations()->exists();-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// total count-->
<!--جمع دو تا شمارنده -->
<!--public function getSpecificOrganisationUsers(array $filters): Builder-->
<!--{-->
<!--return User::select(['id', 'first_name', 'last_name', 'phone', 'created_at'])-->
<!--    ->belongsToOrganisation($this->organisation->id)-->
<!--    ->filter($filters)-->
<!--    ->withCount([-->
<!--        'workJobSubmissions' => function (Builder $query) {-->
<!--            $query->whereOrganisationId($this->organisation->id);-->
<!--        },-->
<!--        'imageSubmissions' => function ($query) {-->
<!--            $query->whereOrganisationId($this->organisation->id);-->
<!--        }-->
<!--    ])-->
<!--    ->with(['organisations' => function ($query) {-->
<!--        $query->whereOrganisationId($this->organisation->id);-->
<!--    }])-->
<!--    ->selectRaw('(select work_job_submissions_count + image_submissions_count) as total_submissions');-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////// HasMany-->
<!--ما از طریق  licenseSubmissions تعدادی licenseForm که اون هم تعدادی department دارد همه را میگیریم زمانیکه لایسنس سابمیشن داشته باشد لایسنس فرم که اونم داشته باشد دپارتمان که متعلق به ایدی اورگانیزیشن باشد-->
<!--private Organisation $organisation;-->
<!--public function getUserLicenseSubmissionsInSpecificOrganisation(User $user): HasMany|string-->
<!--{-->
<!--return $user->licenseSubmissions()-->
<!--    ->with([-->
<!--        'licenseForm:id,department_id,title',-->
<!--        'licenseForm.department:id,organisation_id,title'-->
<!--    ])-->
<!--    ->whereHas('licenseForm', function ($query) {-->
<!--        $query->whereHas('department', function ($query) {-->
<!--            $query->whereOrganisationId($this->organisation->id);-->
<!--        });-->
<!--    })-->
<!--    ->latest();-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////////// set variable-->
<!--بیای بگی ابجکت از فلان مدل حتما باشد-->
<!--/** @var Organisation $organisation */-->
<!--foreach($a as $organisation)-->
<!--////////////////////////////////////////////////////// dependency enjection-->
<!--ما می تونیم پارامتر به کلاسمان در جای دیگر وارد کنیم و اگر اون کلاس extend  کلاس دیگر بود می تونیم به متد ابستراک آن پارامتر خود را ارسال کنیم-->
<!--public function scopeFilter(Builder $builder, $params)-->
<!--{-->
<!--return (new UserFilters($builder))->apply($params);-->
<!--}-->
<!--// UserFilters -->
<!--class UserFilters extends AbstractFilters-->
<!--// AbstractFilters-->
<!--abstract class AbstractFilters-->
<!--{-->
<!--public function __construct(public Builder $builder)-->
<!--{  }-->
<!--Public function apply($params)-->
<!--}-->
<!--/////////////////////////////////////////////////////// forceFill change email-->
<!--اگر کاربر ایمیل خود را عوض کرد پراپرتی موجود در فیلد نال شود-->
<!--//event-->
<!--class EmailChanged-->
<!--{-->
<!--use Dispatchable, InteractsWithSockets, SerializesModels;-->
<!---->
<!--public User $user;-->
<!---->
<!--public function __construct(User $user)-->
<!--{-->
<!--    $this->user = $user;-->
<!--}-->
<!--}-->
<!--// Listeners-->
<!---->
<!--class UnVerifyUserEmail-->
<!--{-->
<!--public function handle($event)-->
<!--{-->
<!--    $event->user->markEmailAsUnVerified();-->
<!--}-->
<!--}-->
<!---->
<!--//User-->
<!--public function markEmailAsUnVerified(): bool-->
<!--{-->
<!--return $this->forceFill([-->
<!--    'email_verified_at' => null,-->
<!--])->save();-->
<!--}-->
<!--//UserController-->
<!--if ($updateUserRequest->has('email')) {-->
<!--event(new EmailChanged($user));-->
<!--}-->
<!--////////////////////////-->
<!--public function resendVerification(Request $request)-->
<!-- {-->
<!--     try {-->
<!--         $user = $this->userRepository->findBy([-->
<!--             'email' => $request->get('email'),-->
<!--             'email_verified_at' => null,-->
<!--         ]);-->
<!---->
<!--         if ($user) {-->
<!--             event(new ResendVerification($user));-->
<!--         }-->
<!--     } catch (\Exception $exception) {-->
<!--         throw new \Exception($exception->getMessage(), 400);-->
<!--     }-->
<!-- }-->
<!--// event-->
<!--class ResendVerification-->
<!--{-->
<!--use Dispatchable;-->
<!--use InteractsWithSockets;-->
<!--use SerializesModels;-->
<!---->
<!--/**-->
<!-- * Create a new event instance.-->
<!-- *-->
<!-- * @param  User  $user-->
<!-- */-->
<!--public function __construct(public User $user)-->
<!--{-->
<!--    $user->sendEmailVerificationNotification();-->
<!--}-->
<!--}-->
<!---->
<!--// Listeners-->
<!--class SendEmailVerificationNotification implements ShouldQueue-->
<!--{-->
<!--use InteractsWithQueue;-->
<!---->
<!--public $afterCommit = true;-->
<!---->
<!--/**-->
<!-- * Handle the event.-->
<!-- *-->
<!-- * @param  mixed  $event-->
<!-- * @return void-->
<!-- */-->
<!--public function handle($event)-->
<!--{-->
<!--    if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {-->
<!--        $event->user->sendEmailVerificationNotification();-->
<!--    }-->
<!--}-->
<!--//////////////////////// where array-->
<!--بجای سه بار استفاده از where  می توانیم درون یک آرایه قرار دهیم بگیم اگر اینها در row بودند مقدار فیلد price آن را بده-->
<!--if (!function_exists('fee')) {-->
<!---->
<!--function fee(string $platform, string $type, string $title): Fee-->
<!--{-->
<!--    return Fee::where([-->
<!--        'platform' => $platform,-->
<!--        'type' => $type,-->
<!--        'title' => $title,-->
<!--    ])->firstOrFail();-->
<!--}-->
<!--}-->
<!--//-->
<!--public function price(): int-->
<!--{-->
<!--return $this->campaign->downloadCount() * fee('instagram', 'follower', 'user_id')->price;-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////// old password Hash::check -->
<!--چک کردن پسورد قدیمی-->
<!--if (! Hash::check($request->old_password, $user->password)) {-->
<!--return ApiResponseServiceFacade::setIsSuccess(false)-->
<!--    ->setStatus(400)-->
<!--    ->setResultMessage("Old password doesn't match!")-->
<!--    ->response();-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////// elastic search-->
<!--https://github.com/matchish/laravel-scout-elasticsearch-->
<!--composer require matchish/laravel-scout-elasticsearch-->
<!---->
<!--$books = Book::complexSearch(array(-->
<!--     'body' => array(-->
<!--         'query' => array(-->
<!--             'match' => array(-->
<!--                 'title' => 'Moby Dick'-->
<!--             )-->
<!--         )-->
<!--     )-->
<!-- ));-->
<!--///-->
<!--PUT /<target>/_doc/<_id>-->
<!--POST /<target>/_doc/-->
<!--PUT /<target>/_create/<_id>-->
<!--POST /<target>/_create/<_id>-->
<!---->
<!--///-->
<!--ES::raw()->search([-->
<!-- "index" => "my_index",-->
<!-- "type"  => "my_type",-->
<!-- "body" => [-->
<!--     "query" => [-->
<!--         "bool" => [-->
<!--             "must" => [-->
<!--                 [ "match" => [ "address" => "mill" ] ],-->
<!--                 [ "match" => [ "address" => "lane" ] ]-->
<!--             ]-->
<!--         ]-->
<!--     ]-->
<!-- ]-->
<!--]);-->
<!--//////-->
<!--{-->
<!--"query": {-->
<!-- "bool": {-->
<!--     "must": [-->
<!--         {-->
<!--             "term": { "tag": "wow" }-->
<!--         },-->
<!--         {-->
<!--             "term": { "tag": "elasticsearch" }-->
<!--         }-->
<!--     ]-->
<!--     "should": [-->
<!--         {-->
<!--             "term": { "tag": "dsl" }-->
<!--         }-->
<!--     ]-->
<!-- }-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////// magic-->
<!--__construct(), __destruct(), __call(), __callStatic(), __get(), __set(), __isset(), __unset(), __sleep(), __wakeup(), __serialize(), __unserialize(), __toString(), __invoke(), __set_state(), __clone(), and __debugInfo().-->
<!--/**-->
<!--* Handle dynamic method calls into the model.-->
<!--*-->
<!--* @param  string  $method-->
<!--* @param  array  $parameters-->
<!--* @return mixed-->
<!--*/-->
<!--public function __call(string $method, array $parameters)-->
<!--{-->
<!--return $this->forwardCallTo($this->model, $method, $parameters);-->
<!--}-->
<!---->
<!--/**-->
<!--* Handle dynamic static method calls into the model.-->
<!--*-->
<!--* @param  string  $method-->
<!--* @param  array  $parameters-->
<!--* @return mixed-->
<!--*/-->
<!--public static function __callStatic(string $method, array $parameters)-->
<!--{-->
<!--return (new static())->$method(...$parameters);-->
<!--}-->
<!--///////////////////////////////////////////////// __call __callStatic-->
<!--__call() هنگام فراخوانی متدهای غیرقابل دسترس در یک زمینه شی فعال می شود.-->
<!---->
<!--__callStatic () هنگام فراخوانی متدهای غیرقابل دسترس در یک زمینه استاتیک فعال می شود.-->
<!---->
<!--class MethodTest-->
<!--{-->
<!--public function __call($name, $arguments)-->
<!--{-->
<!--    // Note: value of $name is case sensitive.-->
<!--    echo "Calling object method '$name' "-->
<!--         . implode(', ', $arguments). "\n";-->
<!--}-->
<!---->
<!--public static function __callStatic($name, $arguments)-->
<!--{-->
<!--    // Note: value of $name is case sensitive.-->
<!--    echo "Calling static method '$name' "-->
<!--         . implode(', ', $arguments). "\n";-->
<!--}-->
<!--}-->
<!---->
<!--$obj = new MethodTest;-->
<!--$obj->runTest('in object context');-->
<!---->
<!--MethodTest::runTest('in static context');-->
<!--//ج-->
<!--Calling object method 'runTest' in object context-->
<!--Calling static method 'runTest' in static context-->
<!--همانطور که می بینید، ما متد runTest() را با استفاده از نام Obj با یک پارامتر رشته در آن فراخوانی کرده ایم. ما این روش را در هیچ جای برنامه تعریف نکرده ایم. این همان چیزی است که متد __call() را فراخوانی کرد. متد __call() به کمک آمد و به توقف ناگهانی برنامه کمک کرد.-->
<!---->
<!--////////////////////////////////////////////////-->
<!--* @property-read \App\Models\Campaign|null $campaign-->
<!--public function media()-->
<!--{-->
<!--if ($this->campaign->type !== 'bulk') {-->
<!--    return '';-->
<!--}-->
<!--if ($this->campaign->isForward()) {-->
<!--$message = TelegramMessage::findForward($this->campaign->forward_id)->firstOrFail();-->
<!---->
<!--}-->
<!--//Campaign-->
<!--* @property string|null $type نوع انتخابی مثلا پیامک-->
<!---->
<!--public function isForward(): bool-->
<!--{-->
<!--return filled($this->forward_id);-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////// jadate-->
<!--کانورت تاریخ-->
<!--"morilog/jalali": "^3.3.3",-->
<!---->
<!--/**-->
<!--* Converts created_at field to persian format.-->
<!--*-->
<!--* @return string|null-->
<!--*/-->
<!--public function getCreatedAtFaAttribute(): ?string-->
<!--{-->
<!--return $this->toPersian('created_at');-->
<!--}-->
<!---->
<!--private function toPersian(string $field): ?string-->
<!--{-->
<!--$date = $this->getAttribute($field);-->
<!---->
<!--return empty($date)-->
<!--    ? null-->
<!--    : jdate($this->getAttribute($field))->format('Y/m/d');-->
<!--}-->
<!--///-->
<!--public function getStartsAtFaAttribute()-->
<!--{-->
<!--return jdate($this->attributes['starts_at'])->format('Y-m-d');-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////-->
<!--<div class="form-group">-->
<!--                             <label><strong>Category :</strong></label><br>-->
<!--                             <label><input type="checkbox" name="category[]" value="laravel"> Laravel</label>-->
<!--                             <label><input type="checkbox" name="category[]" value="PHP"> PHP</label>-->
<!--                             <label><input type="checkbox" name="category[]" value="MySQL"> MySQL</label>-->
<!--                             <label><input type="checkbox" name="category[]" value="jquery"> jQuery</label>-->
<!--                         </div> -->
<!--//-->
<!--Schema::create('posts', function (Blueprint $table) {-->
<!--         $table->id();-->
<!--         $table->string('name');-->
<!--         $table->string('category');-->
<!--         $table->timestamps();-->
<!--     });-->
<!--//-->
<!--class Post extends Model-->
<!--{-->
<!-- protected $fillable = ['name','category'];-->
<!---->
<!-- public function setCategoryAttribute($value)-->
<!-- {-->
<!--     $this->attributes['category'] = json_encode($value);-->
<!-- }-->
<!---->
<!-- public function getCategoryAttribute($value)-->
<!-- {-->
<!--     return $this->attributes['category'] = json_decode($value);-->
<!-- }-->
<!--}-->
<!--//-->
<!--public function index()-->
<!-- {-->
<!--     $posts = Post::all();-->
<!--     return view('index',compact('posts'));-->
<!-- }-->
<!---->
<!-- public function create()-->
<!-- {-->
<!--     return view('multiple_checkbox');-->
<!-- }-->
<!---->
<!-- public function store(Request $request)-->
<!-- {-->
<!--     $input = $request->all();-->
<!--     $input['category'] = $request->input('category');-->
<!--     Post::create($input);-->
<!--     return redirect()->route('posts.index');-->
<!-- }-->
<!--//////////////////////////////////////////////////// update password-->
<!--public function update(ProfileUpdateRequest $request)-->
<!--{-->
<!--if ($request->password) {-->
<!--    auth()->user()->update(['password' => Hash::make($request->password)]);-->
<!--}-->
<!--auth()->user()->update([-->
<!--    'name' => $request->name,-->
<!--    'email' => $request->email,-->
<!--]);-->
<!--return redirect()->back()->with('success', 'Profile updated.');-->
<!--}-->
<!--///////////////////////////////////////// service provider-->
<!--هر برنامه‌ای (حتی غیر لاراولی) برای اینکه اجرا بشه باید چندین کلاس و فایل رو لود و اجرا کنه. سرویس‌هایی مثل کش، سشن، کوکی، دیتابیس و ... از قبل باید لود بشن تا برنامه‌ی ما کار اصلیش رو انجام بده. این لود شدن‌ها توسط قسمت سرویس پروایدر انجام می شود -->
<!---->
<!---->
<!--////////////////////////////////// life cycle request-->
<!--لودر خودکار Auto Loader-->
<!---->
<!--نقطه ورود همه درخواست ها به برنامه لاراول فایل public/index.php است. تمام درخواست ها توسط پیکربندی وب سرور شما (Apache / Nginx) به این فایل هدایت می شوند. فایل index.php کد زیادی ندارد. بلکه نقطه شروعی برای بارگذاری بقیه چارچوب است.-->
<!---->
<!--این فایل های بارگیری خودکار را که توسط آهنگساز (composer) تولید می شود بارگیری می کند.-->
<!---->
<!--سپس یک نمونه از برنامه لاراول را از اسکریپت bootstrap/app.php بازیابی می کند. لاراول خود یک نمونه از برنامه را ایجاد می کند، مرحله اولیه/اولین مرحله است.-->
<!---->
<!--هسته Service Providers-->
<!---->
<!--مرحله بعدی در بخش هسته برنامه رخ می دهد.-->
<!---->
<!--بسته به نوع درخواستی که وارد برنامه می شود، درخواست ورودی به هسته HTTP یا هسته کنسول ارسال می شود.-->
<!---->
<!--هسته HTTP که در app/Http/Kernel.php قرار می گیرد. فقط یک درخواست دریافت می کند و یک پاسخ برمی گرداند. بوت استرپرهایی که توسط کلاس Kernel تعریف می شوند، که مدیریت خطا، پیکربندی ثبت گزارش، شناسایی محیط ها و سایر وظایف را که باید قبل از رسیدگی به درخواست انجام شوند، پیکربندی می کند.-->
<!---->
<!--هسته HTTP لیستی از میان افزارهایی middleware را که قبل از مدیریت توسط برنامه از طریق آنها ارسال می شود، تعریف می کند.-->
<!---->
<!--ارائه دهندگان خدمات kernel-->
<!---->
<!--مرحله بعدی هسته بارگذاری ارائه دهندگان خدمات به عنوان بخشی از عمل بوت استرپ است. ارائه دهندگانی که برای برنامه مورد نیاز هستند در فایل پیکربندی config/app.php قرار می گیرند.-->
<!---->
<!--در حالی که روش ثبت فراخوانی می کند، همه ارائه دهندگان ثبت خواهند شد. پس از ثبت نام همه ارائه دهندگان، متد بوت فراخوانی می شود.-->
<!---->
<!--درخواست اعزام Dispatch Request-->
<!---->
<!--هنگامی که برنامه بوت استرپ شد و همه ارائه دهندگان خدمات ثبت و بوت شدند، درخواست برای ارسال به روتر تحویل داده می شود. روتر درخواست را به یک مسیر یا کنترلر ارسال می کند و همچنین هر میان افزار خاص مسیر را اجرا می کند.-->
<!---->
<!--روتر: Router-->
<!---->
<!--اکنون درخواست توسط روتر ارسال می‌شود و در نهایت با نماهایی مطابق شکل زیر می‌شود:-->
<!---->
<!--روتر درخواست HTTP را به یک کنترلر هدایت می کند یا با حذف کنترل کننده مستقیماً یک نما یا پاسخ ها را برمی گرداند. این مسیرها در app/routes.php قرار خواهند گرفت.-->
<!---->
<!--برنامه کنترلر/کنترلرها/ اقدامات خاصی را انجام می دهد و داده ها را به View ارسال می کند.-->
<!---->
<!--مشاهده برنامه/نماها/ داده ها را به طور مناسب قالب بندی می کند و پاسخ HTTP را ارائه می دهد.-->
<!---->
<!--مراحل فوق به وضوح در نمای نموداری بالا توضیح داده شده است.-->
<!---->
<!--/////////////////////////////////// Contextual Binding کانتکس شوال بایندینگ-->
<!--گاهی اوقات ممکن است دو کلاس داشته باشید که از یک رابط استفاده می کنند، اما می خواهید پیاده سازی های مختلفی را به هر کلاس تزریق کنید-->
<!---->
<!--$this->app->when(PhotoController::class)-->
<!--      ->needs(Filesystem::class)-->
<!--      ->give(function () {-->
<!--          return Storage::disk('local');-->
<!--      });-->
<!---->
<!--$this->app->when([VideoController::class, UploadController::class])-->
<!--      ->needs(Filesystem::class)-->
<!--      ->give(function () {-->
<!--          return Storage::disk('s3');-->
<!--      });-->
<!--///-->
<!--interface Messenger {-->
<!--public function sendMessage(string $recipient, string $message): void;-->
<!--} -->
<!--class SlackMessenger implements Messenger { -->
<!--public function sendMessage(string $recipient, string $message): void-->
<!--{-->
<!--app(Slack::class)->send($recipient, $message);-->
<!--} -->
<!--}-->
<!--class TwilioMessenger implements Messenger {-->
<!--public function sendMessage(string $recipient, string $message): void -->
<!--{ -->
<!--app(Twilio::class)->sendSMS($recipient, $message); } }-->
<!--// AppServiceProvider::register() -->
<!--App::tag([SlackMessenger::class, TwilioMessenger::class], Messenger::class); -->
<!--// somewhere in your application -->
<!--$messengers = app()->tagged(Messenger::class);-->
<!--foreach ($messengers as $messenger) { -->
<!--$messenger->sendMessage($recipient, $message); }-->
<!---->
<!--/////////////////////////////////// tagging-->
<!--به عنوان مثال، شاید شما در حال ساخت یک جمع‌آوری گزارش هستید که مجموعه‌ای از پیاده‌سازی‌های مختلف رابط گزارش را دریافت می‌کند. پس از ثبت پیاده‌سازی گزارش، می‌توانید با استفاده از روش تگ به آن‌ها تگ اختصاص دهید:-->
<!---->
<!--$this->app->tag(['SpeedReport', 'MemoryReport'], 'reports'-->
<!--////////////////////////////////// push …-->
<!--protected $items = [];-->
<!--public function push(...$values)-->
<!--{-->
<!--foreach ($values as $value) {-->
<!--    $this->items[] = $value;-->
<!--}-->
<!--return $this;-->
<!--}-->
<!---->
<!--//////////////////////////////////password-->
<!--class Password implements Rule-->
<!--{-->
<!--public function passes($attribute, $value)-->
<!--{-->
<!--    return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[\d]).{6,}$/', $value);-->
<!--}-->
<!--public function message()-->
<!--{-->
<!--    return 'فیلد رمز عبور تنها باید شامل حروف انگلیسی کوچک و بزرگ و اعداد باشد.';-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////// data_get -->
<!--چک میکند فلان دیتا وارد مدل شده بعد چک می کند فلان ارایه داخل دیتا وجود دارد-->
<!--////////////////////////////////// ensureDirectoryExists-->
<!--چک می کند فلان پوشه وجود دارد یا خیر-->
<!--File::ensureDirectoryExists('/path/to/your/folder')-->
<!--//-->
<!--public function storeFollowersPath(string $name): string-->
<!--{-->
<!--$name = slug_fa($name);-->
<!--File::ensureDirectoryExists("public/campaigns/$this->user_id/$this->id");-->
<!--return "public/campaigns/$this->user_id/$this->id/$name-followers.xlsx";-->
<!--}-->
<!---->
<!--/// چک میکند فلان پوشه در استوریج وجود دارد نبود پوشه را می سازد-->
<!--use Illuminate\Support\Facades\Storage;-->
<!--$path = "path/to/folder/";-->
<!--if(!Storage::exists($path)){ -->
<!--Storage::makeDirectory($path); -->
<!--}-->
<!---->
<!--////////////////////////////////// ?? ??=-->
<!--$a = null; print $a ?? 'b'; // b-->
<!--////////////////////////////////// form request-->
<!--'type'       => 'required|in:automatic,manual',-->
<!--'max'        => 'required|numeric|min:1',-->
<!--'time-limit' => 'required|in:yes,no',-->
<!--'from'       => 'required_if:time-limit,yes|date_format:H:i|before:to',-->
<!--'to'         => 'required_if:time-limit,yes|date_format:H:i|after:from',-->
<!--'details' => ['required', 'json']-->
<!--/// check mobile username-->
<!--'username' => 'required_without:mobile|string',-->
<!--'mobile'   => 'required_without:username|string',-->
<!--'password' => 'required|string',-->
<!---->
<!--////////////////////////////////// singleton پترن سینگلتون-->
<!--class AppServiceProvider extends ServiceProvider-->
<!--{-->
<!--public function boot()-->
<!--{-->
<!--$this->app->singleton(MellatPaymentGateway::class, function () {-->
<!--    return new MellatPaymentGateway('USD');-->
<!--});-->
<!--}}-->
<!--//-->
<!--class MellatPaymentGateway-->
<!--{-->
<!--protected $currency;-->
<!--public function __construct($currency)//usd serviceProvider-->
<!--{-->
<!--    $this->currency = $currency;-->
<!--}-->
<!--public function setDiscount(int $amountDiscount)// 500 orderDetails-->
<!--{-->
<!--  $this->discount = $amountDiscount;-->
<!--}-->
<!--public function pay($amount)//1000 controller-->
<!--{-->
<!--    return [-->
<!--        "amount"=>$amount -->
<!--        "currency"=>$this->currency,//usd-->
<!--    ];-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////// config-->
<!--//config/services-->
<?php
//return [
//'mailgun' => [
//    'secret' => env('secret', true),
//    'domain' => env('domain', false),
//    'address' => env('address', false),
//],
//];
//////////////////////////////////// many to many
//قبلیا پاک کن جدید جایگذاری کن
//$user = User::find(1);
//$user->roles()->detach([1, 2, 3]);
//$user->roles()->attach([
//1 => ['expires' => $expires],
//2 => ['expires' => $expires],
//]);
/////
//اگر ایدی از قبل در پایوت وجود داشت اپدیت کن
//$user = User::find(1);
//$roleId=$request->role_id;
//$user->roles()->updateExistingPivot($roleId, [
//'active' => false,
//]);
//
/////
//$model->features()->sync([$feature_id => ['pivot_data' => $pivot_value]]);
/////
//$message = Messages::find(123);
//$user = User::find(4);
//// using attach() for single message
//$user->message()->attach($message->id, [ 'status' => 1 ]);
/////
//$data=$request->validated();
//$query = Classes::query();
//$query = $query->with('trainees') ->where('user_id', Auth::id()) ->find($data['classId']); foreach ($query->trainees as $trainee) {
//$trainee->pivot->status = 1
////your column;
//$trainee->pivot->save();
//}
//////////////////////////////////// high level module
//
//ماباید برای دپندنسی اجکشن آنرا در دپندنسی اینورژن بزاریم می توانیم اینترفیس درست کنیم و اینترفیس را به های لول مازول پاس بدیم
////Low level module
//Class Mailer
//{
//}
////hi level majul
//Class sendWelcome
//{
//Public function __construct(Mailer $mailer)
//{
//$this->mailer =$mailer;
//}
//}
//////////////////////////////////// func_get_args
//هرگاه در خروجی ارور داد شما بجای استرینگ دارید ارایه دریافت میکنید
//Public function get(){
//$columns = is_array($columns) ? $columns : func_get_args();
//}
//////////////////////////////////// pluck relation
//$sellers = Seller::with('user')->get()->pluck('user.first_name', 'id')
//////////////////////////////////// new static()
//هرگاه از فلان متد استفاده شد بره یک نمونه از مدل رابسازد
///**
//* Fresh instance of elasticsearch query.
//*
//* @return \App\Services\Elasticsearch\Elasticsearch
//*/
//public static function query(): Elasticsearch
//{
//return new Elasticsearch(new static());
//}
////InstagramPost
//class InstagramPost extends \App\Services\Elasticsearch\Model\Model
//{
//use SearchScopeTrait;
//
//public function comments(Closure $callback, int $break = 800000): void
//{
//Comment::query()
//    ->scrollBreak($break)
//    ->source('username', 'user_id', 'text')
//    ->term('lf_post_id', $this->eid)
//    ->scroller(
//        fn($comments) => $callback($comments)
//    );
//}
//
//////////////////////////////////// !!
//مخالف مثلا اگر null یا 0 یا false بود true یا 1 بگیره
//* @property bool|null is_private
//class InstagramProfile{
//public function isPrivate(): bool
//{
//return true === !!$this->is_private;
//}
//public function isPrivateFa(): string
//{
//return $this->isPrivate() ? 'بله' : 'خیر';
//}
//
//////////////////////////////////// batch bus change type hint
//public function getImportResult(string $batchId)
//{
//$batch = Bus::findBatch($batchId);
//if(!$batch){
//    return self::BATCH_NOT_EXIST;
//}
//if ($batch->finished()) {
//    return $this->makeResult(true);
//}
////اگر جاب تمام نشده بود type hind تایپ هیند تغییر بده به تعداد گرفته شده
//return $this->makeResult(completionPercentage: $batch->progress());
//}
//private function makeResult(bool $isFinished = false, $completionPercentage = 100)
//{
//return [
//    'isFinished' => $isFinished,
//    'completion_percentage' => $completionPercentage
//];
//}
//
//////////////////////////////////// Exception
//namespace App\Exceptions;
//use Exception;
//class NotBelongsToOrganisationException extends Exception
//{
//public $message = 'Not belongs to organisation';
//}
//
////Service
//private function checkIfUserBelongsToOrganisation(User $user)
//{
//return $user->whereOrganisationId($this->organisation->id)->exists() ?: throw new NotBelongsToOrganisationException();
//}
///////////////////////////////////// filter
//اگر ایمیل فلان بود نمایش بده
//$users = collect(['name' => 'John Doe', 'email' => "johndoe@example.com"]);
//$filter = $users->filter(function($value, $key) {
// if ($value['email'] == "johndoe@example.com") {
//     return true;
// }
//});
//$filter->all();
///*
//[
// 1 =>[
//            'name' => 'John Doe',
//            'email' => "johndoe@example.com"
//  ]
//]
//*/
//////////////////////////////////// groupBy collect
//$orders = collect([
// ['product_id' => 'p10', 'email' => 'jdoe@example.com'],
// ['product_id' => 'p10', 'email' => 'billy@example.com'],
// ['product_id' => 'p11', 'email' => 'danny@example.com'],
//]);
//$grouped = $orders->groupBy('product_id');
//$grouped->toArray();
///*
// [
//     'p10' => [
//         ['product_id' => 'p10', 'email' => 'jdoe@example.com'],
//         ['product_id' => 'p10', 'email' => 'billy@example.com'],
//     ],
//     'p11' => [
//         ['product_id' => 'p11', 'email' => 'danny@example.com'],
//     ],
// ]
//*/
//
//////////////////////////////////// pluck
//$users = Users::with('userprofile')->get()->pluck('userprofile.address','email');
//
////output
//Illuminate\Support\Collection {#4621
//  all: [
//    "test@example.com" => "733 Oakdale Avenue",
//    "testusers@example.com" => "3745 Hewes Avenue",
//  ],
//}
/////
//$users = Users::pluck('name','email');
//dd($users);
//
////output
//Illuminate\Support\Collection {#4694
//  all: [
//    "test@example.com" => "Test Admin",
//    "testusers@example.com" => "Test User",
//  ],
//}
//
//////////////////////////////////// unset
//$users=User::get();
//$output=$users->each(function($user){
//$user->username='a';
//unset($user->created_at); // این فیلد نمایش نده
//});
//$output=$users->filter(function($user){
//return $user->age > 50;
//});
//$output=$users->search(function($user){
//return $user->email == 'mohsen@gmail.com';
//});
//$list=$users->pluck('email')->all();
//$output=$users->whereIn('status',[0,1,2])->all();
//dd($output->toArray());
/////////////////////////////////// one to many with load
//contacts'متعلق به 'author مربوط به book را میدهد
//$books = Book::with('author.contacts')->get();
//$books = Book::with([
//'author' => [
//    'contacts',
//    'publisher',
//],
//])->get();
//
//$books = Book::with(['author', 'publisher'])->get();
//$books = Book::with('author:id,name,book_id')->get();
//$books->load('author', 'publisher');
//$post = Post::find(1);
////
//$post->comments()->saveMany([
//new Comment(['message' => 'A new comment.']),
//new Comment(['message' => 'Another new comment.']),
//]);
//$comment = $post->comments()->create([
//'message' => 'A new comment.',
//]);
//$user = User::find(1);
//$user->roles()->updateExistingPivot($roleId, [
//'active' => false,
//]);
////
//$post->image()->updateOrCreate( [], ['url' => $request->input('image_url')] );
//$post->image->update([...]);
//
//
//
///////////////////////////////////////
//دپارتمانهای متعلق به این workjob را لود کن
//public function store(StoreRequest $request): JsonResponse
//{
//$createdWorkJob = WorkJobForm::create($request->validated());
//
//return $this->response(
//    WorkJobFormResource::make(
//        WorkJobForm::whereId($createdWorkJob->id)
//            ->with('department')
//            ->first()
//    ),
//    Response::HTTP_CREATED
//);
//}
///////////////////////////////////////
//ایدی دپارتمان این organisation one to many
//private function fetchOrganisationDepartmentIds(Organisation $organisation): array
//{
//return $organisation->departments()->select('id')->pluck('id')->toArray();
//}
////////////////////////////////////
//ایدی organisation  متعلق به department متعلق به licenseForm میده one to many troug
//private function checkIfLicenseFormBelongsToOrganisation(LicenseForm $licenseForm)
//{
//return $licenseForm->department()->whereOrganisationId($this->organisation->id)->exists() ?: throw new NotBelongsToOrganisationException();
//}
//private function checkIfLicenseFormBelongsToOrganisation(LicenseForm $licenseForm)
// {
//     return $licenseForm->department()->whereOrganisationId($this->organisation->id)->exists() ?: throw new NotBelongsToOrganisationException();
// }
///////////////////////////////////////
//ت question مربوط به workjob  را حذف میکند one to many
//
//public function delete(WorkJobForm $workJobForm)
//{
//DB::beginTransaction();
//try {
//    $this->removeQuestions($workJobForm);
//    $workJobForm->delete();
//    DB::commit();
//    return self::SUCCESS;
//} catch (\Exception $e) {
//    DB::rollBack();
//    return self::FAILED;
//}
//}
//private function removeQuestions(WorkJobForm $workJobForm)
//{
//return $workJobForm->questions()->delete();
//}
//
///////////////////////////////////////seeder
//class RolesTableSeeder extends Seeder
//{
///**
// * Run the database seeds.
// *
// * @return void
// */
//public function run()
//{
//    $roles = [
//        [
//            'name' => 'user',
//        ],
//        [
//            'name' => 'admin',
//        ],
//    ];
//
//    \App\Role::query()->insert($roles);
//}
//}
/////////////////////////////////
//حذف ریلیشن one to many
//public function store(Request $request): array
//{
//user()->computes()->create([
//'title'   => $request->input('title'),
//'percent' => $request->input('percent'),
//'type'    => $request->input('type'),
//]);
//
////
//public function destroy($id)
//{
//$ids = explode(',', $id);
//
//try {
//    Role::whereIn('id', $ids)->delete();
//} catch (\Exception $e) {
//    return $e;
//}
//
//return ['message' => 'رکورد ها به درستی حذف گردیدند'];
//}
//
/////////////////////
//->with(['user', 'workJob', 'media'])->paginate()->sortByDesc('user.first_name');
//->with(['user', 'workJob', 'media'])->get()->SortByDesc('user.first_name')->SortByDesc('user.last_name');
//
////
//public function convertUnderlinesToCamelCase($string, $capitalizeFirstCharacter = false)
//{
//
//$str = str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
//
//if (!$capitalizeFirstCharacter) {
//    $str[0] = strtolower($str[0]);
//}
//
//return $str;
//}
////////////////////
//$users = User::where('vip', true)->get();
//
//$posts = Post::whereBelongsTo($users)->get();
/////
//$posts = Post::where('user_id', $user->id)->get();
//$posts = Post::whereBelongsTo($user)->get();
////
//$users = User::where('vip', true)->get();
//
//$posts = Post::whereBelongsTo($users)->get();
//
//
//
///////////////
//5844sam.115
//zahra09106678505@gmail.com
//Mz0061855235
//////////////////////////////////
////    protected function search(string $value): void
////    {
////        $this->builder->where('title', 'LIKE', "%{$value}%");
////    }
////IndexRequest
//
////                'search' => ['nullable', 'string'],
//
///////////////////////////////////////////
//public function users(): BelongsToMany
//{
//return $this->belongsToMany(User::class, 'department_organisation', 'id', 'user_id')
//    ->withPivot('department_id', 'user_id', 'organisation_id')
//    ->withTimestamps();
//}
////////////////////////////////////////////////
//$comment = $post->comments()->create([
//'message' => 'A new comment.',
//]);
////////////////////////
//$locations = App\Location::with(['region' => function ($query) {
// $query->orderBy('name');
//}])->get();
//////////////////////////////////// postman
////sort_by_registered_date:asc
////sort_by_submissions:desc
//sort_by_full_name:asc
//page:1
//page_size:2
//
//////////////////////////////////// postman
//Accept:application/json
//Content-Type:application/json
//X-Header-Organisation:1
//
////////////////////////////////////
//class IndexRequest extends WithPaginateRequest
///////////////////////////////////////////
//$user = App\Models\User::find(1);
//$posts = App\Models\Post::whereBelongsTo($user, 'user')->get();
//////////////////////////////////////////////////////
//public function scopeBelongsToOrganisation($query, Organisation $organisation)
//{
//return $query->whereHas('department', function ($query) use ($organisation) {
//    return $query->whereOrganisationId($organisation->id);
//});
//}
///////////////////////////////tryForm
//protected $appends=[
//'status_text'
//];
//public function getStatusTextAttribute(): ?string
//{
//$status = Status::tryFrom($this->status);
//
//return $status->text();
//}
////resource
//public function toArray($request)
//{
//return [
//
//    'status_text' => $this->status_text,
//
//];
//}
//
///////////////////////////////////////////////////////////
//public function scopeBelongsToOrganisation($query, int $organisationId)
//{
//return $query->whereOrganisationId($organisationId);
//}
//
//////////////////////////////////////////
//چک میکند این مدل با ارگانیزیشن در ارتباطه یا خیر پس باید or_id در مدل باشد
//private function checkIfImageSubmissionBelongsToOrganisation(ImageSubmission $imageSubmission)
//{
//return $imageSubmission->whereOrganisationId($this->organisation->id)->exists() ?: throw new NotBelongsToOrganisationException();
//}
//
/////////////////////////////////////////// one to many User post
//
//In User model
//public function post(){
//return $this->hasMany(Post::class); }
//In Post model
//public function user(){
//return $this->belongsTo(User::class); }
//and the following code deleted all the posts and the user
//$user = \App\User::findOrFail(1);
//$user->post[1]->delete();
//$user->delete();
////////////////////////////////////////////
//سوال مربوط به این لایسنسmany to many
//private function deleteQuestions(LicenseForm $licenseForm)
//{
//return $licenseForm->questions()->delete();
//}
///////////////////////////////////////////
//public function deleteWorkType(Organisation $organisation, int $workTypeId): bool|int|null
//{
//return $organisation->workTypes()->findOrFail($workTypeId)->delete();
//}
/////
////        return $licenseForm->questions()->delete();
//
////        $channel->labels()->delete();
////        $channel->labels()->where('id',1)->delete();
////
//Many to many
//$tourament->sessions()->detach();
///////////////////////////////////////////
//public function destroy(Theme $theme)
//{
// $topics = $theme->topics();
//
// foreach($topics->get() as $topic) {
//     $topic->replies()->delete();
// }
//
// $topics->delete();
//
// $theme->delete();
//
// return redirect('/');
//}
///////////////////////////////////////////
//$request->auth->imageSubmissions() ایمیج کاربر لاگین
//// لایسنس از طریق دپارتمان به ارگانیزشن در ارتباطه یعنی در لایسنس department_id و در دپارتمان organisation_id داریم
//private function checkIfLicenseFormBelongsToOrganisation(LicenseForm $licenseForm)
//{
//return $licenseForm->department()->whereOrganisationId($this->organisation->id)->exists() ?: throw new NotBelongsToOrganisationException();
//}
//
//
///////////////////////////////////////////
//$request->validate([
//         'title' => 'required|string|max:255',
//         'category_id' => 'required|exists:App\Models\Category,id',
//     ]);
//
/////////////////////////////////////////// sortBy
////Request
//class IndexRequest extends WithPaginateRequest
//{
//public function rules()
//{
//    $sortRules = Rule::in(['desc', 'asc']);
//
//    return parent::rules() + [
//            'sort_by_created_at' => [$sortRules],
//            'sort_by_updated_at' => [$sortRules],
//            'sort_by_title' => [$sortRules]
//        ];
//}
//}
////Controller
//public function index(IndexRequest $request): JsonResponse
//{
//$imageSubmissions= $request->auth
//    ->imageSubmissions()
//    ->whereOrganisationId($request->organisation->id)
//    ->filter($request->validated())
//    ->with(['workJob', 'media'])
//    ->latest()
//    ->get();
//
//return $this
//    ->response(ImageSubmissionResource::collection($imageSubmissions));
//}
//
/////////////////////////////////////////// relation
//اگر بخواهیم از ریلیشن نام فیلد جدول دیگر ار بگیریم
//$comments = User::find(1)->comments()->orderBy($column)->get();
//$posts = Post::with(['author' => function ($q){
//                    $q->orderBy('name');
//                }])
//                ->get();
//$posts = Post::with(['author' => function ($q){
//                        $q->orderBy('name', 'DESC');
//                    }])
//                    ->get();
//
//$posts = Post::select('*')
//                 ->orderByDesc(Author::select('name')
//                            ->whereColumn('authors.id', 'posts.author_id')
//                            ->latest()
//                            ->take(1)
//                        )
//                 ->paginate(10);
//
/////////////////////////////////////////////////
//public function toggleStatus(Form $form)
//{
//return $form->toggleStatus()
//    ? ApiResponseServiceFacade::setIsSuccess(true)
//        ->setContent('form', new FormResource($form))
//        ->setResultMessage('Form status changed successfully.')
//        ->response()
//    : ApiResponseServiceFacade::setIsSuccess(false)
//        ->setResultMessage('failed to toggle status')
//        ->setStatus(500)
//        ->response();
//}
//
///////////////////////////////////////
//StoreRequest
//use DepartmentRelationsTrait;
//
//return $this->response(DepartmentResource::collection($departments), Response::HTTP_OK);
//return $this->response($departmentResource, Response::HTTP_CREATED);
//
//
///////////////////////////////////////
//Changes
//Form model, relations, and table refactored.
//The endpoint to create a new form implemented.
//Question model, relations, and table refactored.
//The endpoint to create a new question implemented.
//Requirements
//php artisan migrate
//
//////////////////////////////////////////////////////////////////////// many to many
//public function store(StoreRequest $request): JsonResponse
//{
//$organisation = $request->organisation;
//$data = $request->validated();
//$department = Department::query()->create($data);
//$department->organisations()->attach($organisation);
//$departmentResource = new DepartmentResource($department);
//return $this->response($departmentResource, Response::HTTP_CREATED);
//
//}
//
//public function update(UpdateRequest $request, Department $department): JsonResponse
//{
//$organisation = $request->organisation;
//$data = $request->validated();
//$department = $department->update($data);
//$department->organisations()->attach($organisation);
//$departmentResource = new DepartmentResource($department);
//return $this->response($departmentResource, Response::HTTP_ACCEPTED);
//
//}
//
//public function destroy(Request $request, Department $department): JsonResponse
//{
//$organisation = $request->organisation;
//$department->organisations()->detach($organisation);
//$department->delete();
//return $this->response(null, Response::HTTP_NO_CONTENT);
//
//}
//
//////////////////////////////////////////////////////////////////////// apiResource crud
///////////////////////////////////////////////////////////////
////
//Route::apiResource('books', 'BookController');
//
////
//app/Http/Resources/BookResource.php
//$ php artisan make:resource BookResource
//
//
//public function toArray($request)
// {
//   return [
//     'id' => $this->id,
//     'title' => $this->title,
//     'description' => $this->description,
//     'created_at' => (string) $this->created_at,
//     'updated_at' => (string) $this->updated_at,
//     'user' => $this->user,
//     'ratings' => $this->ratings,
//   ];
// }
//
////BookController
//public function index()
// {
//   return BookResource::collection(Book::with('ratings')->paginate(25));
// }
//
// public function store(Request $request)
// {
//   $book = Book::create([
//     'user_id' => $request->user()->id,
//     'title' => $request->title,
//     'description' => $request->description,
//   ]);
//
//   return new BookResource($book);
// }
//
// public function show(Book $book)
// {
//   return new BookResource($book);
// }
//
// public function update(Request $request, Book $book)
// {
//   // check if currently authenticated user is the owner of the book
//   if ($request->user()->id !== $book->user_id) {
//     return response()->json(['error' => 'You can only edit your own books.'], 403);
//   }
//
//   $book->update($request->only(['title', 'description']));
//
//   return new BookResource($book);
// }
//
// public function destroy(Book $book)
// {
//   $book->delete();
//
//   return response()->json(null, 204);
// }
//
////////////////////////////////////////
////Controller
//public function __construct(private ImageSubmissionService $imageSubmissionService)
//{
//}
//public function index(Request $request): JsonResponse
//{
//$imageSubmissions = $this
//    ->imageSubmissionService
//    ->getUserSubmissionsInSpecificOrganization($request->user(), $request->organisation->id);
//
//return $this
//    ->response(ImageSubmissionResource::collection($imageSubmissions));
//}
//public function store(StoreRequest $request): JsonResponse
//{
//$data = [
//        'organisation_id' => $request->organisation->id,
//        'user_id' => $request->auth->id
//    ] + $request->validated();
//
//$imageSubmission = $this->imageSubmissionService->create($data);
//
//return $imageSubmission === $this->imageSubmissionService::FAILED
//    ? $this
//        ->responseError(__('messages.internal server error'), Response::HTTP_EXPECTATION_FAILED)
//    : $this
//        ->response(ImageSubmissionResource::make($imageSubmission->load('workJob'), Response::HTTP_CREATED));
//}
////ImageSubmissionResource
//class ImageSubmissionResource extends JsonResource
//{
//public function toArray($request)
//{
//    return [
//        'id' => $this->id,
//        'comment' => $this->comment,
//        'location' => $this->location,
//        'image' => $this->image,
//        'work_job' => WorkJobResource::make($this->whenLoaded('workJob'))
//    ];
//}
//}
////WorkJobResource
//class WorkJobResource extends JsonResource
//{
//public function toArray($request)
//{
//    return [
//        'id' => $this->id,
//        'name' => $this->name,
//        'job_unique_id' => $this->job_unique_id
//    ];
//}
//}
//
////////////////////////////////////// where
//JobUniqueId
//private function fetchJobId(int $jobUniqueId): int
//{
//return WorkJob::whereJobUniqueId($jobUniqueId)->first()->id;
//}
/////
//organisation_id
//public function getUserSubmissionsInSpecificOrganization(User $user, int $organizationId)
//{
//return $user
//    ->imageSubmissions()
//    ->whereOrganisationId($organizationId)
//    ->with(['workJob', 'media'])
//    ->get();
//}
//
/////////////////////////////////////Resource
//public function __construct(private ImageSubmissionService $imageSubmissionService)
//{
//}
//public function store(StoreRequest $request): JsonResponse
//{
//$data = [
//        'organisation_id' => $request->organisation->id,
//        'user_id' => $request->auth->id
//    ] + $request->validated();
//
//$imageSubmission = $this->imageSubmissionService->create($data);
//
//return $imageSubmission === $this->imageSubmissionService::FAILED
//    ? $this
//        ->responseError(__('messages.internal server error'), Response::HTTP_EXPECTATION_FAILED)
//    : $this
//        ->response(ImageSubmissionResource::make($imageSubmission->load('workJob'), Response::HTTP_CREATED));
//}
////
//class ImageSubmissionResource extends JsonResource
//{
//public function toArray($request)
//{
//    return [
//        'id' => $this->id,
//        'comment' => $this->comment,
//        'location' => $this->location,
//        'image' => $this->image,
//        'work_job' => WorkJobResource::make($this->whenLoaded('workJob'))
//    ];
//}
//}
////
//class WorkJobResource extends JsonResource
//{
//public function toArray($request)
//{
//    return [
//        'id' => $this->id,
//        'name' => $this->name,
//        'job_unique_id' => $this->job_unique_id
//    ];
//}
//}
//
//////////////////////////////////////// loadCount شمارش گر ریلیشن در بازه زمانی
//public function getUserTotalSubmissionsInOrganisationWithinDate(Organisation $organisation, User $user, array $dateRange)
//{
//return $user->loadCount([
//    'submissions' => function (Builder $query) use ($organisation, $dateRange) {
//        $query
//            ->where('organisation_id', $organisation->id)
//            ->when($dateRange['from'] ?? false, function ($query) use ($dateRange) {
//                $query->where('created_at', '>=', $dateRange['from'] . " 00:00:00");
//            })
//            ->when($dateRange['to'] ?? false, function ($query) use ($dateRange) {
//                $query->where('created_at', '<=', $dateRange['to'] . " 23:59:59");
//            });
//    }
//])->submissions_count;
//}
//
//////////////////////////////////////// status update
////organizationUserService
//public function updateStatus(array $data)
//{
//return $this->organisationUserRepository->updateStatus($data)
//    ? $this->organisationUserRepository->findIn(
//        key: 'user_id',
//        value: $data['users'],
//        relations: ['user'],
//    )
//    : self::FAILED;
//}
////organizationUserRepository
//public function updateStatus(array $data): null|int
//{
//DB::beginTransaction();
//try {
//    $numberOfUpdatedRows = $this->model::whereOrganisationId($data['organisation_id'])
//        ->whereIn('user_id', $data['users'])
//        ->update(['status' => $data['status']]);
//
//    $this->checkIfAllRecordsUpdated($numberOfUpdatedRows, count($data['users']));
//
//    DB::commit();
//
//    return $numberOfUpdatedRows;
//} catch (\Exception) {
//    DB::rollBack();
//    return null;
//}
//}
//private function checkIfAllRecordsUpdated($numberOfUpdatedRows, $numberOfRequestedRecordsToBeUpdated)
//{
//if ($numberOfUpdatedRows !== $numberOfRequestedRecordsToBeUpdated) {
//    throw new UpdateFailedException;
//}
//}
///////////////////////////////////////////// updateOrCreate
//public function setSettingForOrganisation(Organisation $organisation, OrganisationSetting $organisationSetting, string $value)
//{
//return OrganisationOrganisationSetting::query()->updateOrCreate([
//    'organisation_id' => $organisation->id,
//    'organisation_setting_id' => $organisationSetting->id
//],[
//    'value' => $value
//]);
//}
///////////////////////////////////////// data
//$data += ['work_job_id' => $jobId];
//
//////////////////////////////////////// middlware get user
//public function handle(Request $request, Closure $next)
//{
//$organisation_id = $request->header('X-Header-Organisation');
//
//if ($organisation_id) {
//    if (!in_array($organisation_id, auth('sanctum')->user()->organisations->pluck('id')->toArray())) {
//        return response()->json([
//            'success' => false,
//            'data' => 'User not in organisation',
//        ], 403);
//    }
//} else {
//    return response()->json([
//        'success' => false,
//        'data' => 'Organisation ID not included in request header',
//    ], 403);
//}
//
//$request = $request->merge([
//    'organisation' => Organisation::find($organisation_id),
//    'auth' => auth()->user()
//]);
//
//return $next($request);
//}
////
//public function store(StoreRequest $request): JsonResponse
//{
//$data = [
//        'organisation_id' => $request->organisation->id,
//        'user_id' => $request->auth->id
//    ] + $request->validated();
//
//$imageSubmission = $this->imageSubmissionService->create($data);
//
//return $imageSubmission === $this->imageSubmissionService::FAILED
//    ? $this
//        ->responseError(__('messages.internal server error'), Response::HTTP_EXPECTATION_FAILED)
//    : $this
//        ->response(ImageSubmissionResource::make($imageSubmission->load('workJob'), Response::HTTP_CREATED));
//}
/////////////////////////////////////// remove migrate
//php artisan make:migration remove_slug_from_posts_table --table=posts
///////////////////////////////////////////////////// Route
////region subscription routes
//Route::controller(SubscriptionPlanController::class)
//->prefix('subscription-plans')
//->group(function (): void {
//    Route::get('', 'index');
//    Route::get('{id}', 'show');
//    Route::post('', 'store');
//    Route::put('{id}', 'update');
//    Route::delete('{id}', 'destroy');
//});
////endregion
/////////////////////////////// Header
////postman
//Acccept                   applicationJson
//X-Header-Organization     1
////Meddelware
//public function handle(Request $request, Closure $next): JsonResponse
//{
//if ($request->header('X-Header-Organisation')) {
//$organisation_id = $request->header('X-Header-Organisation');
//if (! in_array($organisation_id, auth('sanctum')->user()->organisations->pluck('id')->toArray())) {
//    return response()->json([
//        'success' => false,
//        'data' => 'User not in organisation',
//    ], 403);
//}
//} else {
//return response()->json([
//    'success' => false,
//    'data' => 'Organisation ID not included in request header',
//], 403);
//}
//
//$organization = Organisation::query()->find($organization_id);
//$request = $request = $request->merge([
//    'organization' => $organization,
//    'auth' => auth()->user
//]);
////$request->organization
////$request->auth->name
//
//return $next($request);
//}
//
/////////////////////////////////// array_merge
//Public function store(){
//$note=$team->notes()->create(
//array_merge(
//$request->validated(),
//[
//'user_id'=>Auth::id()
//]
//)}
////
//$note=$team->notes()->create($request->validated()+['user_id'=>Auth::id()]);
/////////////////////////////////// form request
//public function rules()
//{
//return [
//    'name' => [
//        'required',
//        'string',
//        'min:1',
//        'max:128',
//        Rule::unique('forms', 'name')->where(function ($query) {
//            $query->whereDepartmentId($this->department_id);
//        })],
//
//    'description' => ['string', 'min:3', 'max:4000'],
//
//    'job_unique_id_requirement_status' => ['required', new Enum(JobUniqueIdRequirementStatus::class)],
//
//    'department_id' => [
//        'required',
//        Rule::exists('departments', 'id')->where(function ($query) {
//            $query->whereOrganisationId($this->organisation->id);
//        })
//    ],
//
//    'display_priority' => [
//        'required',
//        'integer',
//        'min:1',
//        'max:30000',
//        Rule::unique('forms', 'display_priority')->where(function ($query) {
//            $query->whereDepartmentId($this->department_id);
//        })
//    ],
//
//    'icon' => ['file', 'mimetypes:image/jpg,image/jpeg,image/png,image/webp', 'max:2048']
//];
//}
////////////////////////////// groupBy
//$brands = \App\Models\Brand::withCount('products') ->with(['products' => function ($query) { return $query->groupBy('extra_attribute'); }])->get();
//////////////////////////////
//# Changes
//
//-  add class Enum for Job_id
//
//# Requirements
//
//- php artisan
///////////////////////
//$table->dropForeign('forms_job_id_foreign');
//$table->dropColumn('job_id');
//
/////////////////////////////////////////////// Enum
//namespace App\Enums;
//enum FormJobIdEnum: string
//{
//case Mandatory = 'mandatory';
//case Optional = 'optional';
//case Hidden = 'hidden';
//}
////
//'job_id' => ['required', new Enum(FormJobIdEnum::class)],
//
///////////////////////////////////////////////// soft delete
//Route::get('posts/restore/{id}', [PostController::class, 'restore'])->name('posts.restore');
//Route::get('posts/restore-all', [PostController::class, 'restoreAll'])->name('posts.restoreAll');
//public function restore($id)
// {
//     Post::withTrashed()->find($id)->restore();
//
//     return redirect()->back();
// }
//
//
// public function restoreAll()
// {
//     Post::onlyTrashed()->restore();
//
//     return redirect()->back();
// }
//////////////////////////////////////////////////
//php artisan migrate:refresh --seed
///////////////////////////////////////////////// form request
//use Illuminate\Validation\Rules;
//'avatar' => ['file', 'mimetypes:image/jpg,image/jpeg,image/png,image/webp', 'max:2048'],
//'first_name' => ['required', 'string', 'min:1', 'max:128'],
//'last_name' => ['required', 'string', 'min:1', 'max:128'],
//'phone' => ['required', 'string'],
//'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//'job_title' => ['required', 'string'],
//'dob' => ['required', 'date_format:Y-m-d','before_or_equal:today'],
//
//'password' => ['required', 'confirmed', Rules\Password::defaults()]
///////////////////////////////////////////////// one to many
//public function add(Request $request) {
//     $data = $request->validate([
//         'name' => ['string', 'required'],
//         'category' => ['required', 'numeric'],
//         'picture' => ['file', 'required', 'image']
//     ]);
//     $category = Category::findOrFail($data['category']);
//     $product = new Product();
//     $product->name = $data['name'];
//     $category->products()->save($product);
//     return redirect()->route('index');
// }
///////////////////////////////////////////////// many to many hasManyThrough
//class Product extends Model
//{
// /**
//  * The vendors that belong to this product
//  */
// public function vendors()
// {
//     // So Each vendor can define the quantity of the product in his store
//     return $this->belongsToMany(Vendor::class)->withTimestamps()
// }
//
// public function vendorsWithProducts() {
//   return $this->vendors()->wherePivot('quantity', '>', 0);
// }
//}
//class Product extends Model
//{
// /**
//  * The vendors that belong to this product
//  */
// public function vendors()
// {
//     // So Each vendor can define the quantity of the product in his store
//     return $this->belongsToMany(Vendor::class)->using(ProductVendor::class);
// }
//}
////
//class RandomController extends Controller {
// /**
// * Gets vendors
// */
// public function getVendors() {
//   $product = Product::find(1);
//   $vendors = $product->vendors; // Returns a Laravel Collection
//   foreach($vendors as $vendor) {
//     // Do what you want with $vendor
//     $vendor->pivot->updated_at;
//   }
// }
//}
/////
//Many to many
//Schema::create('subjects', function (Blueprint $table) {
//         $table->id();
//         $table->string('name');
//         $table->timestamps();
//     });
//
//Schema::create('students', function (Blueprint $table) {
//         $table->id();
//         $table->string('first_name');
//        $table->string('last_name');
//         $table->timestamps();
//     });
//
//
//Schema::create('student_subject', function (Blueprint $table) {
//         $table->id();
//         $table->foreignId('student_id');
//         $table->foreignId('subject_id');
//         $table->string('grade')->nullable();
//         $table->timestamps();
//     });
////student
//public function subject()
// {
//     return $this->belongstoMany('App\Models\Subject');
// }
////subject
//public function student()
// {
//     return $this->belongstoMany('App\Models\Student');
// }
////StudentController
//public function store_student_subject(){
//
//     $student = Student::find(1);
//
//     $student->subject()->attach(1);
//
//     dd($student);
// }
//public function detach_student_subject(){
//     $student = Student::find(1);
//     $student->subject()->detach(1);
//     dd($student);
// }
//
///// pivot
////subject
//public function subject()
// {
//     return $this->belongstoMany('App\Models\Subject','student_subject','student_id','subject_id')
//         ->withPivot('grade');
// }
////student
//public function student()
// {
//     return $this->belongstoMany('App\Models\Student','student_subject','subject_id','student_id')
//         ->withPivot('grade');
// }
////studentController
//public function grade_student_subject(){
//     $student = Student::find(1);
//     $subject = Subject::find(2);
//     $student->subject()->save($subject,['grade'=>90]);
//     dd($student);
// }
//public function update_grade_student_subject(){
//     $student = Student::find(1);
//     $subject = Subject::find(2);
//     $student->subject()->updateExistingPivot($subject,['grade'=>95]);
//     dd($student);
// }
//
//public function index(){
//     $student = Subject::with('student')->where('id',2)->get();
//     dd($student);
// }
//public function index(){
//     $student = Student::withCount('subject')->orderBy('subject_count','desc')->get();
//     dd($student);
// }
//
//public function index(){
//     $student = Student::with('subject')
//     ->whereHas('subject', function($query){
//         $query->where('grade','>=',90);
//     })->get();
//     dd($student);
// }
//
/////
//دو تا جدول داریم میخوایم بوسیله جدول واسط بهم ربطشون بدیم یا شیوه پایین hasManyThrough یا بوسیله pivot
////'organisations'
//public function up()
//{
//Schema::create('organisations', function (Blueprint $table) {
//    $table->id();
//    $table->string('name');
//    $table->text('description')->nullable();
//
//    $table->timestamps();
//});
//}
////'departments'
//public function up()
//{
//Schema::create('departments', function (Blueprint $table) {
//    $table->id();
//    $table->string('name');
//    $table->text('description')->nullable();
//    $table->timestamps();
//});
//}
////'department_organisation'
//public function up()
//{
//Schema::create('department_organisation', function (Blueprint $table) {
//    $table->id();
//    $table->unsignedBigInteger('department_id')->unsigned()->index();
//    $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
//    $table->unsignedBigInteger('organisation_id')->unsigned()->index();
//    $table->foreign('organisation_id')->references('id')->on('organisations')->onDelete('cascade');
//    $table->timestamps();
//});
//}
////Department
//public function organisations(): BelongsToMany
//{
//return $this->belongsToMany(Organisation::class)->withTimestamps();
//}
//
//public function users(): BelongsToMany
//{
//return $this->belongsToMany(User::class, 'department_organisation', 'id', 'user_id')
//    ->withPivot('department_id', 'user_id', 'organisation_id')
//    ->withTimestamps();
//}
//
/////
//public function up()
// {
//     Schema::create('movie_actors', function (Blueprint $table) {
//         $table->integer('movie_id');
//         $table->integer('actor_id');
//         $table->unique(['movie_id', 'actor_id']);
//     });
// }
///Movie.php:
//
// public function actors()
// {
//     return $this->hasManyThrough(
//         // required
//         'App\Models\Actor', // the related model
//         'App\Models\MovieActor', // the pivot model
//
//         // optional
//         'movie_id', // the current model id in the pivot
//         'id', // the id of related model
//         'id', // the id of current model
//         'actor_id' // the related model id in the pivot
//     );
// }
////
//public function movies()
// {
//     return $this->hasManyThrough(
//         // required
//         'App\Models\Movie', // the related model
//         'App\Models\MovieActor', // the pivot model
//
//         // optional
//         'actor_id', // the current model id in the pivot
//         'id', // the id of related model
//         'id', // the id of current model
//         'movie_id' // the related model id in the pivot
//     );
// }
////
//$actors=\App\Models\Movie::first()->actors;
//$movies=\App\Models\Actor::first()->movies;
//
//
///////////////////////////////////////////// git stash
//git stash save departmentName
//
//git pull origin develop
//
//git stash apply
//بعد کانفیلیکت هاتو فیکس کن
//بعد کامیت کن
//git push -f origin departmentBranch
//
////////////////////////////////////////////// pivot
//جدول user با جدول organisation  در ارتباطه و حالا جدول organization با organizationUser در ارتباطند که بتوان status را از organizationUser گرفت و user داد
//https://laravel.com/docs/9.x/eloquent-relationships#filtering-queries-via-intermediate-table-columns
////User
//public function organisations(): BelongsToMany
//{
//return $this->belongsToMany(Organisation::class)
//    ->withPivot(['status', 'created_at'])
//    ->withTimestamps();
//}
////Organisation
//public function users(): BelongsToMany
//{
//return $this->belongsToMany(User::class)
//    ->using(OrganisationUser::class)
//    ->withPivot(['status', 'created_at'])
//    ->withTimestamps();
//}
////OrganisationUser
//public function user()
//{
//return $this->belongsTo(User::class);
//}
/////
////User
//public function departments(): BelongsToMany
//{
//return $this->belongsToMany(Department::class, 'department_organisation', 'id', 'department_id')
//    ->withPivot('department_id', 'user_id', 'organisation_id')
//    ->withTimestamps();
//}
////Departemant
//public function users(): BelongsToMany
//{
//return $this->belongsToMany(User::class, 'department_organisation', 'id', 'user_id')
//    ->withPivot('department_id', 'user_id', 'organisation_id')
//    ->withTimestamps();
//}
//
////////////////////////////////////// event handeler step
//مرحله به مرحله استپ ثبت نام پر می شود
////controller
//Public function store(){
//$user = auth('sanctum')->user();
//$address = $this->userRepository->storeAddress($user, $request->validated());
//event(new RegisterStepPassed($user));
//
////event/RegisterStepPassed
//class RegisterStepPassed
//{
//use Dispatchable, InteractsWithSockets, SerializesModels;
//
//public User $user;
//
//public function __construct(User $user)
//{
//    $this->user = $user;
//}
//}
//
////lestiner/CalculatorRegister
//class CalculateRegisterStep
//{
//private UserRepositoryInterface $userRepository;
//
//public function __construct(UserRepositoryInterface $userRepository)
//{
//    $this->userRepository = $userRepository;
//}
//
//public function handle(RegisterStepPassed $event)
//{
//    $user = $event->user;
//
//    $registerStep = config('enums.register_steps.verify_email');
//
//    if (! is_null($user->email_verified_at)) {
//        $registerStep = config('enums.register_steps.create_address');
//    }
//
//    if (! is_null($user->address)) {
//        $registerStep = config('enums.register_steps.organisation_detail');
//    }
//
//    if (count($user->organisations) == 1 && ! is_null($user->organisations()->first()->pivot->status == config('enums.user.organisation.statuses.approved'))) {
//        $registerStep = config('enums.register_steps.add_license');
//    }
//
//    if (! is_null($user->signature)) {
//        $registerStep = config('enums.register_steps.complete');
//    }
//
//    //update register step
//    $this->userRepository->updateByModel($user, [
//        'register_step' => $registerStep,
//    ]);
//}
//}
////config/enum
//return [
//'register_steps' => [
//    'verify_email' => 0,
//    'create_address' => 1,
//    'organisation_detail' => 2,
//    'add_license' => 3,
//    'add_signature' => 4,
//    'complete' => 5,
//],
//
///////////////////////////////////////////////////////////////////////////////////////////////// enum config
//جدول استاتوس داره که انواع آن در کانفیگ
//public function statusText(): Attribute
//{
//return Attribute::make(
//    get: fn() => array_search($this->status, config('enums.user.organisation.statuses'))
//);
//}
////config/enum
//'user' => [
//'organisation' => [
//    'statuses' => [
//        'pending' => 0,
//        'approved' => 1,
//        'rejected' => 2,
//    ],
//],
//],
///////////////////////////////////////////////////////////////////// git stash
//git stash save model
//git stash list
//git stash apply stash@{0}
//////////////////////////////////////////////////////////////////////////////////////////// git reset
//git log
//git status
//git reset --soft HEAD^
//Git push -f origin
////
//git pull origin develop
///////////////////////////////////////////////////////////////////////////////////////// agency
//https://app.clickup.com/36618982/v/l/6-188256464-1
//https://app.clockify.me/tracker
//https://www.figma.com/file/svPQa3gFPB1eouwtdWuvvE/Safe-proud-(Dashboard)?t=LSOGuE9HzAiHsmys-0
//
////////////////////////////////////////////////////////////////////////////////////
//$posts = Post::whereHas('comments', function (Builder $query) {
//$query->where('content', 'like', 'code%');
//})->get();
/////
//$posts = Post::whereRelation('comments', 'is_approved', false)->get();
/////
//$posts = Post::withCount('comments')->get();
/////
//$posts = Post::select(['title', 'body'])
//            ->withCount('comments')
//            ->get();
//
//
////////////////////////////////////////////////////////////////////////////////////////// crud Repository
//اگر در مورد خود مدل باشه که باید از base repository استفاده کرد در غیر اینصورت از ریپازیتوری کاستوم استفاده میکنه
////controller
//public function updateUser(UpdateUserRequest $updateUserRequest, StoreAddressRequest $storeAddressRequest): Response
//{
//$user = auth('sanctum')->user();
//$address = $this->userRepository->userAddress($user);
//if (is_null($address)) {
//$this->userRepository->updateByModel($user, $updateUserRequest->validated());
//}else{
//$this->userRepository->createUserAddress($user, $storeAddressRequest->validated());
//}
//public function delete($addressId): \Illuminate\Http\Response
//{
//    $user = auth('sanctum')->user();
//    $this->userRepository->deleteAddress($user, $addressId);
//}
//
////baseRepository
//public function updateByModel(Model $model, array $item): bool
//{
//return $model->update($item);
//}
////UserRepository
////User hasMany Address
//public function addresses(User $user): Collection
//{
//return $user->addresses;
//}
//public function createUserAddress(User $user, array $attributes): Model
//{
//return $user->address()->create($attributes);
//}
//public function deleteAddress(User $user, int $addressId): bool
//{
//return $user->address()->findOrFail($addressId)->delete();
//}
//
//}
///////////////////////////////////////////////////////////////////////////////////////// sanctum
//$user = auth('sanctum')->user();
//Route::group(['middleware' => ['auth:sanctum']], function () {
///////////////////////////////////////////////////////////////////////////////////////// save without eventایونت سیو می کند saveQuietly
//class OrganisationObserver
//public function created(Organisation $organisation)
//{
//$organisation->org_code = Hashids::encode($organisation->id);
//$organisation->saveQuietly();
//}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////// verify
//Payment::callbackUrl('http://yoursite.com/verify')->purchase(
// $invoice,
// function($driver, $transactionId) {
// $payment->setTransaction($transactionId);
// }
//);
///////////////////////////////////// array
//اگر ارایه وجود نداشت متغیر ایمیج را نال بزار
//public ?array $image = null;
//
//
//public function d()
//{
//$response[] = [
//    'id' => '2',
//];
//$this->image = $response;
//dd($this->image[0]['id']);
//}
//Public function store(){
//$response[] = Http::withHeaders(['Content-Type' => 'multipart/form-data'])->
//withToken(config('TOKEN-UPLOAD'))->attach('file', $request->file('image'))->post(config('UPLOAD'));//
//$this->image = $response;
//}
//
//Public function update(){
//if ($request->has('image')) {
//try {
//    Http::withHeaders(['Content-Type' => 'multipart/form-data'])->
//    withToken(config('TOKEN-UPLOAD'))->attach('file', $request->file('image'))->put(config('UPLOAD') . "/" . $this->image[0]['id']);
//} catch (\Exception $exception) {
//    return response()->json(['message' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
//}
//}
//
//}
///////////////////////////////////////////postman
//Put create
//Post update
///////////////////////////// json
//'Content-Type' => 'application/json',
//'Accept'       => 'application/json'
///////////////////////////////////////////////////////////////////////////// seeder
//
//public function run() { // check if table users is empty if(DB::table('users')->count() == 0){
//DB::table('users')->insert([
//[ 'name' => 'Administrator', 'email' => 'admin@app.com', 'password' => bcrypt('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), ],
//[ 'name' => 'Agency', 'email' => 'agency@app.com', 'password' => bcrypt('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), ],
//[ 'name' => 'End', 'email' => 'endcustomer@app.com', 'password' => bcrypt('password'), 'created_at' => date('Y-m-d H:i:s'), 'updated_at' => date('Y-m-d H:i:s'), ] ]); } else { echo "\e[31mTable is not empty, therefore NOT "; } }
///////////////////////////////////////////////////////////////////////////////////// middleware IsAdmin
//php artisan make:middleware IsAdmin
//'admin' => \App\Http\Middleware\IsAdmin::class,
//public function handle($request, Closure $next)
//{
//  if (Auth::user() &&  Auth::user()->admin == 1) {
//         return $next($request);
//  }
//
// return redirect('/');
//}
///////////////////////////////////Redis
////Helper
//public function createPost($request)
//{
//$post = Post::create([
//    'user_id' => $request['user_id'],
//    'title' => $request['title'],
//    'description' => $request['description'],
//    'image' => $request['image']
//]);
//
//return $post;
//}
//
////PostController
//public function createPost(Request $request)
//{
//$validator = Validator::make($request->all(), [
//    'user_id' => 'required|integer',
//    'title' => 'required|string',
//    'description' => 'required|string',
//    'image' => 'required|string'
//]);
//
//if ($validator->fails()) {
//    return response()->json([
//        'errors' => $validator->errors()
//    ], 401);
//}
//
//$post = $this->helper->createPost($request->all());
//Redis::set('post_' . $post->id, $post, 'EX', 3600);
//return response()->json($post, 200);
//}
//
/////////////////////////////////// Middleware jwt
//namespace App\Http\Middleware;
//
//class Authenticate extends Middleware
//{
//public function handle($request, Closure $next, $guard = null)
//{
//    $token = $request->bearerToken();
//
//    if(!$token) {
//        return response()->json([
//            'error' => 'Token not provided.'
//        ], 401);
//    }
//
//    try {
//        JWT::decode($token, new Key(config('jwt.secret'), 'HS256'));
//    } catch(ExpiredException $e) {
//        return response()->json([
//            'error' => 'Provided token is expired.'
//        ], 403);
//    } catch(Exception $e) {
//        return response()->json([
//            'error' => 'An error while decoding token.'
//        ], 403);
//    }
//
//    return $next($request);
//}
//}
//// AuthController
//class AuthController extends Controller
//{
//
//public function __construct() {
//    $this->middleware('auth', ['except' => ['login', 'register']]);
//}
//
//protected function jwt(User $user) {
//    $payload = [
//        'iss' => "lumen-jwt", // Issuer of the token
//        'sub' => $user->id, // Subject of the token
//        'iat' => time(), // Time when JWT was issued.
//        'exp' => time() + 60*60 // Expiration time
//    ];
//
//    // As you can see we are passing `JWT_SECRET` as the second parameter that will
//    // be used to decode the token in the future.
//    return JWT::encode($payload, config('jwt.secret'), 'HS256');
//}
//
//
//protected function jwtLogout(User $user) {
//    $payload = [
//        'iss' => "lumen-jwt", // Issuer of the token
//        'sub' => $user->id, // Subject of the token
//        'iat' => time(), // Time when JWT was issued.
//        'exp' => time() // Expiration time now
//    ];
//
//    // As you can see we are passing `JWT_SECRET` as the second parameter that will
//    // be used to decode the token in the future.
//    return JWT::encode($payload, config('jwt.secret'), 'HS256');
//}
//
///**
// * Get a JWT via given credentials.
//*/
//public function login(Request $request){
//   $req = Validator::make($request->all(), [
//        'email' => 'required|email',
//        'password' => 'required|string|min:5',
//    ]);
//
//    if ($req->fails()) {
//        return response()->json($req->errors(), 422);
//    }
//
//    if (!auth()->attempt($req->validated())) {
//        return response()->json(['Auth error' => 'Unauthorized'], 401);
//    }
//
//    $user = User::where('email', $request->email)->first();
//    return response()->json([
//        'token' => $this->jwt($user)
//    ], 200);
//}
//
///**
// * Sign up.
// *
// * @return \Illuminate\Http\JsonResponse
// */
//public function register(Request $request) {
//    $req = Validator::make($request->all(), [
//        'name' => 'required|string|between:2,100',
//        'email' => 'required|string|email|max:100|unique:users',
//        'password' => 'required|string|confirmed|min:6',
//    ]);
//
//    if($req->fails()){
//        return response()->json($req->errors(), 400);
//    }
//
//    User::create(array_merge(
//        $req->validated(),
//        ['password' => bcrypt($request->password)]
//    ));
//
//    return $this->login($request);
//}
//
//
///**
// * Sign out
//*/
//public function signout(Request $request) {
//    $decoded = JWT::decode($request->bearerToken(), new Key(config('jwt.secret'), 'HS256'));
//    $user = User::find($decoded->sub);
//    $this->jwtLogout($user);
//    return response()->json(['message' => 'User loged out']);
//}
//
///**
// * User
//*/
//public function user(Request $request) {
//    $decoded = JWT::decode($request->bearerToken(), new Key(config('jwt.secret'), 'HS256'));
//    $user = User::find($decoded->sub);
//    return response()->json($user);
//}
//}
//
/////////////////////////////////// config
//$admin = Http::withHeaders(['Authorization' => config('authentication.AUTH')])//config('sms.GHASEDAK_LINE_NUMBERS')
//    ->get(config('authentication.URL-ROL'))['name'] == 'admin';
//
////authentication
//return [
//'AUTH' => env('AUTH'),
//'URL-USER'  => env('URL-USER'),
//'URL-ROL'  => env('URL-ROL'),
//'UPLOAD'  => env('UPLOAD'),
//'TOKEN-UPLOAD'  => env('TOKEN-UPLOAD'),
//];
//
////////////////////////////////////////////////////////////////////////////// change password عوض کردن پسورد
//public function change_password(Request $request){
//$validator = Validator::make($request->all(), [
//    'old_password'=>'required',
//    'password'=>'required|min:6|max:100',
//    'confirm_password'=>'required|same:password'
//]);
//if ($validator->fails()) {
//    return response()->json([
//        'message'=>'Validations fails',
//        'errors'=>$validator->errors()
//    ],422);
//}
//
//$user=$request->user();
//if(Hash::check($request->old_password,$user->password)){
//    $user->update([
//        'password'=>Hash::make($request->password)
//    ]);
//    return response()->json([
//        'message'=>'Password successfully updated',
//    ],200);
//}else{
//    return response()->json([
//        'message'=>'Old password does not matched',
//    ],400);
//}
//
//}
//
///////////////////////////////////////////////////////////////////////////// tab
//protected $fillable = [
//'transaction', 'reciept', 'status',
//];
//public function setStatus(int $status) : self
//{
//return tap($this->forceFill(['status' => $status]))->save();
//}
//public function setTransaction(string $transactionId) : self
//{
//return tap($this->forceFill(['transaction' => $transactionId]))->save();
//}
//public function setReciept(string $reciept) : self
//{
//return tap($this->forceFill(['reciept' => $reciept]))->save();
//}
//
///////////////////////////////////////////////////////////////////////////// http
//Http::withHeaders(['Authorization' => $zohoToken])->get('https://subscriptions.zoho.com/api/v1/plans');
//$response = Http::acceptJson()->get('http://example.com/users');
//$response = Http::withToken('token')->post(/* ... */);
/////
//$response->successful();
//$response->failed();
//// Throw an exception if a client or server error occurred...
//$response->throw();
//
//
//
/////
//public function index()
//{
//    $apiURL = 'https://api.mywebtuts.com/api/users';
//    $postInput = [
//        'first_name' => 'Hardik',
//        'last_name' => 'Savani',
//        'email' => 'example@gmail.com'
//    ];
//     $headers = [
//        'X-header' => 'value'
//    ];
//     $response = Http::withHeaders($headers)->post($apiURL, $postInput);
//     $statusCode = $response->status();
//    $responseBody = json_decode($response->getBody(), true);
//
//    dd($responseBody);
//}
//public function store()
//{
//    $response = Http::post('http://jsonplaceholder.typicode.com/posts', [
//'title' => 'This is test',
//'body' => 'This is test ',
//            ]);
//     dd($response->successful());
//}
///////////////////////////////////// crud api
//class StoreBookRequest extends FormRequest
//{
//
//public function authorize()
//{
//    return true;
//}
//
//public function rules()
//{
//    return [
//        'data.name' => 'string|required',
//        'data.description' => 'string',
//        'data.author' => 'string',
//    ];
//}
//}
//
////
//public function store(StoreBookRequest $request)
//{
//$data = Book::create($request->validated('data'));
//return response()->json(['data' => $data], RESPONSE::HTTP_CREATED);
//}
//
//public function show(Book $book)
//{
//return response()->json(['data' => $book]);
//}
//public function update(UpdateBookRequest $request, Book $book)
//{
//$book->update($request->validated('data'));
//return response()->json(['data' => $book->refresh()]);
//}
//
//public function destroy(Book $book)
//{
//$book->delete();
//return response()->noContent();
//}
///////////////////////////////////// route id گرفتن ایدی
//$orderId = $request->route('id');
////////////////////////////////////
//public function updateChannel(Request $request)
//{
//$request->validate([
//    'name' => ['required']
//]);
//// Update Channel In Database
//$this->channel->update($request->id, $request->name);
//
//return response()->json([
//    'message' => 'channel edited successfully'
//], Response::HTTP_OK);
//}
//
///////////////////////////////////// seo meta
//public function store(PostFormRequest $request)
//{
//$request->validated();
//
//$post = Post::create([
//    'user_id' => Auth::id(),
//    'title' => $request->title,
//    'excerpt' => $request->excerpt,
//    'body' => $request->body,
//    'image_path' => $this->storeImage($request),
//    'is_published' => $request->is_published === 'on',
//    'min_to_read' => $request->min_to_read
//]);
//
//$post->meta()->create([
//    'post_id' => $post->id,
//    'meta_description' => $request->meta_description,
//    'meta_keywords' => $request->meta_keywords,
//    'meta_robots' => $request->meta_robots,
//]);
//
//return redirect(route('blog.index'));
//}
//
///////////////////////////////////////////////////////////////////////////// order orderItem
////Orders
//User_id
//Toral
////OrderItem
//Order_id
//Product_id
//Quantity
//Price
//total
////
//public function store(Request $request) {
//$order = Order::create([
//'user_id' => $request->input('user_id')
//, 'total' => 0, ]);
//$total = 0;
//$size = count(collect($request)->get('quantity'));
//for ($i = 0; $i < $size; $i++) {
//$orderitem = Orderitem::create([ 'order_id' => $order->id, 'product_id' => $request->get('product_id')[$i],
//$quantity = $request->get('quantity')[$i],
//'quantity' => $quantity,
//$price = Product::find($request->get('product_id')[$i])->price,
//'price' => $price,
//'total' => $quantity * $price, ]);
//$total += $orderitem['quantity']*$orderitem['price'];
//}
//$order['total'] = $total;
//$order->save();
//return redirect()->route('orders.index'); }
//
//////////////////////////////////////////////////////////////////////////// wallet
//$user = User::first();
//$user->balance; // 0
//
//$user->deposit(10);
//$user->balance; // 10
//$user->deposit(10, [‘payable for’=>’Shoes Order’])
//
//$user->withdraw(1);
//$user->balance; // 9
//
//$user->forceWithdraw(200, ['description' => 'payment of taxes']);
//$user->balance; // -191
//
//            $paid = api_user()->balance;
//            if ($paid > 1000) {
//                if ($paid >= $subtotal) {
////                        todo : اگر کیف پول بیشتر یا مساوی مبلغ بود
//                    $reducePrice = api_user()->forceWithdraw($subtotal);
//
//                } else {
////                        todo :  اگر مبلغ بیشتر از کیف پول بود
//                    $reducePrice = $subtotal - $paid;
//                    api_user()->forceWithdraw(api_user()->balance);
//
//                }
//            }
////////////////////////////////////////// cart
//class CartController extends Controller
//{
///**
// * Display a listing of the resource.
// *
// * @return \Illuminate\Http\Response
// */
//public function addCart(Request $request, $id) {
//    $user = Auth::user()->id;
//    $products = Product::find($id);
//
//    $validation = Validator::make($request->all(), [
//        'qty' => 'required'
//    ]);
//
//    if ($validation->fails()) {
//        return redirect()->back()->withErrors($validation);
//    } else if($request->qty <= 0) {
//        return redirect()->back()->withErrors('min 1');
//    } else if($request->qty > $products->stock) {
//        return redirect()->back()->withErrors('gaboleh lebih dari stock');
//    } else {
//
//        $user_id = $user;
//        $product_id = $products->id;
//        $image = $products->image;
//        $name = $products->name;
//        $qty = $request->qty;
//        $price = $products->price;
//        $subtotal = $products->price * $request->qty;
//
//
//        $cart = new Cart;
//        $cart->user_id = $user;
//        $cart->product_id = $product_id;
//        $cart->image = $image;
//        $cart->name = $name;
//        $cart->qty = $qty;
//        $cart->price = $price;
//        $cart->subtotal = $subtotal;
//        $cart->save();
//    }
//    return redirect('/shopping-cart');
//
//}
//
//public function indexAdd($id) {
//    $product = Product::find($id);
//    $brand = Brand::where('name', '=', '%'.$product->brand.'%')->get();
//    $comments = Comment::where('product_id', '=', $product->id)->get();
//
//    return view('users.product', compact('product', 'brand', 'comments'));
//}
//
//public function indexCart()
//{
//    $user = Auth::user()->id;
//    $carts = Cart::where('user_id','=', $user)->get();
//
//    // nanti kalo ga mager ganti caranya jd bikin object dari model, ternyata bisa juga kyk pas complete payment (kyknya, harusnya)
//    $storedItem = array();
//
//    $totalQty = 0;
//    $totalPrice = 0;
//
//    foreach ($carts as $cart) {
//        $totalQty += $cart->qty;
//        $totalPrice += $cart->subtotal;
//
//        $product = Product::where('id','=',$cart->products_id)->get();
//        array_push($storedItem, $product);
//    }
//
//    return view('users.shopping-cart', compact('user', 'carts', 'totalQty', 'qty', 'totalPrice'));
//}
//
//public function removeCart($id){
//    $carts = Cart::find($id);
//    $carts->delete();
//
//    return redirect()->back();
//}
//
//public function checkout($id)
//{
//    $carts = Cart::with('user')->where('user_id', 'LIKE', "%{$id}%")->get();
//    $user = User::find($id);
//
//    $header = new Header();
//    $header->user_id = Auth::user()->id;
//    $header->date = date('Y-m-d H:i:s');
//    $header->status = 'Success';
//
//    $header->save();
//
//    foreach ($carts as $cart){
//        $detail = new Detail();
//        $detail->header_id = $header->id;
//        $detail->product_id = $cart->product_id;
//        $detail->qty = $cart->qty;
//
//        $detail->save();
//
//        $product = Product::find($cart->id);
//        $product->stock-=$cart->qty;
//
//        $cart->delete();
//    }
//
//    return redirect('/shopping-cart');
//}
//
//////////////////////////////// json
//public function up()
//{
//Schema::create('posts', function (Blueprint $table) {
//   $table->id();
//   $table->json('category_id');
//   $table->string('title');
//   $table->timestamps();
//});
//}
//
////Post
//class Post extends Model
//{
// protected $guarded = [];
//
// protected $casts = [
//     'category_id' => Json::class
// ];
//}
////
//class PostController extends Controller
//{
// public function show_post_form()
// {
//     return view('admin.post.create');
// }
//
// public function store(Request $request)
// {
//     $request->validate([
//       'category_id' => 'required',
//       'title' => 'required'
//     ]);
//
//     $post = new Post;
//     $post->category_id = json_encode($request->category_id);
//     $post->title = $request->title;
//     $post->save();
//
//     return redirect()->back();
//
// }
//
// public function index()
// {
//     $post = Post::all();
//
//     return view('admin.post.index',['posts' => $post]);
// }
//
// public function category_post($id)
// {
//   return Post::whereJsonContains('category_id',$id)->get();
// }
//
//
/////////////////////////////////////////////////////////////////////////// middleware policy  میدلور پالیسی
////config
//return [
//'admins' => [
//    'rodu.pereira@gmail.com',
//],
//];
////User
//public function isSuperAdmin()
//{
//return in_array($this->email, config('acl.admins'));
//}
////AppServiceProvider
//public function boot()
//{
//$this->registerPolicies();
//
//Gate::before(function($user){
//    if($user->isSuperAdmin())
//        return true;
//});
//Gate::define('users', function($user){
//    return $user->hasPermission('users');
//});
//Gate::define('add_permissions_user', function($user){
//    return $user->hasPermission('add_permissions_user');
//});
//}
////UserController
//public function __construct(User $repository)
//{
//$this->repository = $repository;
//
//$this->middleware('can:users');
//}
////Route
//Route::apiResource('/users', UserController::class);
////Seeder
//$admin = Resource::create(['name' => 'Admins']);
//$admin->permissions()->create(['name' => 'users']);
//$admin->permissions()->create(['name' => 'add_permissions_user']);
//$admin->permissions()->create(['name' => 'delete_permission_user']);
////
//if(Gate::denies('add_permissions_user'))
//abort(403, 'Forbiden');
//
//
///////////////////////////////////////////////////////////////////////// redirect
//"redirect": "http://localhost",
////////////////////////////////////////////////////////////////////////// upload spatie
//public function update(CategoryRequest $request, Category $category)
//{
//$category->update($request->safe()->except('image'));
//
//$this->uploadImg($request, $category);
//
//return $this->validResponse(['message' => __('Category updated successfully.')]);
//}
//private function uploadImg($request, $category)
//{
//if ($request->hasFile('image') && $request->file('image')->isValid()) {
//    $category->media()->delete();
//    $category->addMediaFromRequest('image')->toMediaCollection('image');
//}
//}
//////////////////////////////////////////////////////////////////////////// discount تخفیف
//$cart->price = ($product->price-($product->price*$product->discount)/100);
/////////////////////////////////////// redis
//CACHE_DRIVER=redis
//QUEUE_CONNECTION=redis
//SESSION_DRIVER=redis
//REDIS_HOST=redis
//REDIS_PASSWORD=null
//REDIS_PORT=6379
//////////////////////////////////// response
//namespace Symfony\Component\HttpFoundation;
//////////////////////////////////////////////////////////////////////////// post http
//ارسال پارامتر به سرویس پرنت و گرفتن رسپانس
//public function getCourier(Request $request)
//{
//$this->validate($request, [
//    'destination' => 'required',
//    'weight' => 'required|integer'
//]);
//$url = 'https://ruangapi.com/api/v1/shipping';
//$client = new Client();
//$response = $client->request('POST', $url, [
//    'headers' => [
//        'Authorization' => 'd1JlYPgwNExLRQl6jUSyfZOCoN7SxpBk8bU6gN3D'
//    ],
//    'form_params' => [
//        'origin' => 22,
//        'destination' => $request->destination,
//        'weight' => $request->weight,
//        'courier' => 'jne,jnt'
//    ]
//]);
//$body = json_decode($response->getBody(), true);
//return $body;
//}
/////////////////////////////////////// http get
//public function store(StoreArticleRequest $request, Article $article)
//{
//    $data = Http::withHeaders(['Authorization' => ''])
//        ->get('https://subscriptions.zoho.com/api/v1/plans');
//
//    $articleItem = [];
//
//    foreach ($data as $item) {
//        $articleItem[] = [
//            'client_id' => $item['client_id'],
//            'category_id' => $item['category_id'],
//            'content' => $item['content'],
//            'description' => $item['description'],
//            'image' => $this->uploading($item['image']),
//            'visit' => $item['visit'],
//            'data_additional' => $item['data_additional'],
//            'title' => $item['title'],
//        ];
//    }
////        if ($request->hasFile('image')) {
////            $this->uploading($request, $article);
////        }
//
//    $this->article->create($articleItem);
//    return response()->json(['message' => 'created successfully'], Response::HTTP_CREATED);
//}
//
/////////////////////////////////////// http get
//میخوایم سرویس اولیشن را در سرویس کمپانی استفاده کنیم
////ConsumeExternalService
//trait ConsumeExternalService
//{
//public function headers(array $headers = [])
//{
//    array_merge($headers, [
//        'Accept' => 'application/json',
//        'Authorization' => $this->token,
//    ]);
//    return Http::withHeaders($headers);
//}
//public function request(string $method,string $endPoint, array $formParams = [],array $headers = [])
//{
//    return $this->headers($headers)->$method($this->url.$endPoint, $formParams);
//}
//}
////EvaluationService
//
//class EvaluationService
//{
//use ConsumeExternalService;
//
//protected $url;
//protected $token;
//
//public function __construct()
//{
//    $this->url = config('services.micro_02.url');
//    $this->token = config('services.micro_02.token');
//}
//
//public function getEvaluationsCompany(string $company)
//{
//    $response = $this->request('get', "/evaluations/{$company}");   //Method request belongs to ConsumeExternalService Trait
//
//    return $response->body();
//}
//}
////CompanyController
//public function show(string $uuid)
//{
//$company = $this->companyService->getCompanyByUuid($uuid);
//$evaluations = $this->evaluationService->getEvaluationsCompany($uuid);
//return (new CompanyResource($company))->additional(['evaluations' => json_decode($evaluations) ]);
//
//}
//
//////////////////////////////////////////////////////////////////////////////  stock
//موجودی انبار
//   if (auth('api')->check()) { //authantication checked
//       {
//            $user_id = auth('api')->user()->id; //auth
//
//            $order = new Order;
//            $order->payment_mode = $request->input('payment_mode');
//            $order->tracking_no = 'doreha' . rand(1111, 9999);
//            $order->save();
//
////  کاربر مدنظر هرچند تا دوره انتخاب کرد به سبدش اضافه شود
//            //CartItems
//            $cart = Cart::where('user_id', $user_id)->get();
//            $orderItems = [];
//            foreach ($cart as $item) {
//                $orderItems[] = [
//                    'course_id' => $item->course_id,
//                    'qty' => $item->course_qty,
//                    'price' => $item->course->price,
//                ];
//
////decrecing Quantity from Product table
//$item->course->update([ // Product=quantity, checkout front=course_qty
//'quantity' => $item->course->quantity - $item->course_qty //joined
//                ]);
//            }
//
//            //Cart Items deleted
//            $order->order_items()->createMany($orderItems); //joined
//            Cart::destroy($cart);
//
//            return response()->json([
//                'status' => 200,
//                'message' => 'Order Placed Successfully'
//            ]);
//        }
////////////////////////////////////////// try catch
//
//public function index(Request $request): JsonResponse
//{
//try {
//    $resources = User::treat($request);
//    return response()->json($resources, Response::HTTP_OK);
//
//} catch (\Exception $e) {
//    return response()->json(['message' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
//}
//}
//
//
//public function store(UserRequest $request)
//{
//return (new RegisterController)->create($request);
//}
//
//
//public function show(User $user): JsonResponse
//{
//return response()->json($user, Response::HTTP_OK);
//}
//
//public function update(UserRequest $request, User $user): JsonResponse
//{
//try {
//    $user->fill($request->all())->save();
//    return response()->json($user, Response::HTTP_OK);
//
//} catch (\Exception $e) {
//    return response()->json(['message' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
//}
//}
//
//
//public function destroy(User $user): JsonResponse
//{
//try {
//    $user->delete();
//    return response()->json($user, Response::HTTP_OK);
//} catch (\Exception $e) {
//    return response()->json(['message' => $e->getMessage()], Response::HTTP_BAD_REQUEST);
//}
//}
////////////////////////////////////////// middleware jwt
//Route::group(['middleware' => 'auth:api'], function () {
//Route::get('/', [CityWeatherController::class, 'index']);
//Route::get('update/{city_id}', [CityWeatherController::class, 'update']);
//});
////////////////////////////////////////////// jwt
//public $productRepository;
//public function __construct(ProductRepository $productRepository)
//{
//$this->middleware('auth:api', ['except' => ['indexAll']]);
//$this->productRepository = $productRepository;
//}
///////////////////////////////////// api resource
//$ php artisan make:controller BookController --api
//Route::apiResource('books', 'BookController');
//
//public function index()
//{
//return BookResource::collection(Book::with('ratings')->paginate(25));
//}
//
//public function store(Request $request)
//{
//$book = Book::create([
//    'user_id' => $request->user()->id,
//    'title' => $request->title,
//    'description' => $request->description,
//]);
//
//return new BookResource($book);
//}
//
//public function show(Book $book)
//{
//return new BookResource($book);
//}
//
//public function update(Request $request, Book $book)
//{
//// check if currently authenticated user is the owner of the book
//if ($request->user()->id !== $book->user_id) {
//    return response()->json(['error' => 'You can only edit your own books.'], 403);
//}
//
//$book->update($request->only(['title', 'description']));
//
//return new BookResource($book);
//}
//
//public function destroy(Book $book)
//{
//$book->delete();
//
//return response()->json(null, 204);
//}
//
///////////////////////////////////////////// order item
////Model
//class Order extends Model
//{
//public function orderItems()
//{
//    return $this->hasMany(OrderItem::class);
//}
//
//public function getAdminTotalAttribute()
//{
//    return $this->orderItems->sum(function (OrderItem $item) {
//        return $item->admin_revenue;
//    });
//}
//
////OrderController
//public function store(Request $request)
//{
//$link = Link::whereCode($request->input('code'))->first();
//$user = (new UserService)->get($link->user_id);
//
//\DB::beginTransaction();
//
//$order = new Order();
//
//$order->first_name = $request->input('first_name');
//$order->last_name = $request->input('last_name');
//$order->email = $request->input('email');
//$order->code = $link->code;
//$order->user_id = $user->id;
//$order->influencer_email = $user->email;
//$order->address = $request->input('address');
//$order->address2 = $request->input('address2');
//$order->city = $request->input('city');
//$order->country = $request->input('country');
//$order->zip = $request->input('zip');
//
//$order->save();
//
//$lineItems = [];
//
//foreach ($request->input('items') as $item) {
//    if ($item['quantity'] > 0) {
//        $product = Product::find($item['product_id']);
//
//        $orderItem = new OrderItem();
//        $orderItem->order_id = $order->id;
//        $orderItem->product_title = $product->title;
//        $orderItem->product_price = $product->price;
//        $orderItem->quantity = $item['quantity'];
//        $orderItem->influencer_revenue = 0.1 * $product->price * $item['quantity'];
//        $orderItem->admin_revenue = 0.9 * $product->price * $item['quantity'];
//
//        $orderItem->save();
//
//        $lineItems[] = [
//            'name' => $product->title,
//            'description' => $product->description,
//            'images' => [
//                $product->image,
//            ],
//            'amount' => 100 * $product->price,
//            'currency' => 'usd',
//            'quantity' => $orderItem->quantity,
//        ];
//    }
//}
//
//$stripe = Stripe::make(env('STRIPE_SECRET'));
//
//$source = $stripe->checkout()->sessions()->create([
//    'payment_method_types' => ['card'],
//    'line_items' => $lineItems,
//    'success_url' => env('CHECKOUT_URL') . '/success?source={CHECKOUT_SESSION_ID}',
//    'cancel_url' => env('CHECKOUT_URL') . '/error',
//]);
//
//$order->transaction_id = $source['id'];
//$order->save();
//
//\DB::commit();
//
//return $source;
//}
//
//
///////////////////////////////////////////// phpMyAdmin
//
//#PhpMyAdmin Service
//
//
//
//
//phpmyadmin:
//
//
//    image: phpmyadmin/phpmyadmin
//
//
//    container_name: test-phpmyadmin
//
//
//    environment:
//
//
//        - MYSQL_ROOT_PASSWORD=root
//
//
//        - PMA_HOST=db
//
//
//        - UPLOAD_LIMIT=1024M
//
//
//    depends_on:
//
//
//        - db
//
//
//    links:
//
//
//        - db
//
//
//    ports:
//
//
//        - "8088:80"
//
//
//    networks:
//
//
//        - app-network
//
//
//
////////////////////////////////////////////// microservice crud http
//class UserService{
//
//private $endpoint;
//
//public function __construct()
//{
//  $this->endpoint = env('USER_SERVICE_URL');
//}
//
//public function headers()
//{
//  $headers = [];
//    if($jwt = request()->cookie('jwt')){
//        $headers['Authorization'] = "Bearer {$jwt}";
//    }
//
//  if(request()->headers->get('Authorization')){
//     $headers['Authorization'] = request()->headers->get('Authorization');
//  }
//
//  return $headers;
//}
//
//public function request()
//{
//  return Http::withHeaders($this->headers());
//}
//
//public function getUser(): User
//{
//    $json = $this->request()->get($this->endpoint."/user")->json();
//
//  return new User($json);
//}
//
//public function isAdmin()
//{
//  return $this->request()->get($this->endpoint."/admin")->successful();
//}
//
//public function isInfluencer()
//{
//  return $this->request()->get($this->endpoint."/influencer")->successful();
//}
//
//public function allows($ability, $arguments)
//{
//  Gate::forUser($this->getUser())->authorize($ability, $arguments);
//}
//
//public function all($page)
//{
//  return $this->request()->get($this->endpoint."/users?page={$page}")->json();
//}
//
//public function getCustomUsers($data)
//{
//  return $this->request()->post($this->endpoint."/customUsers", $data)->json();
//}
//
//public function get($id): User
//{
//  $json = $this->request()->get($this->endpoint."/users/{$id}")->json();
//
//  return new User($json);
//
//}
//
//public function create($data): User
//{
//  $json = $this->request()->post($this->endpoint."/users", $data)->json();
//
//  return new User($json);
//
//}
//
//public function update($id, $data): User
//{
//  $json = $this->request()->put($this->endpoint."/users/{$id}", $data)->json();
//
//  return new User($json);
//
//}
//
//public function delete($id)
//{
//  return $this->request()->delete($this->endpoint."/users/{$id}")->successful();
//}
//}
//
///////////////////////////////////////////// Upload Spatie
//public function update(ServiceRequest $request, Service $service)
//{
//$service->update($request->safe()->except('cover', 'gallery'));
//$service->categories()->attach($request->category);
//
//$this->uploadImg($request, $service);
//
//return $this->validResponse(['message' => __('Service updated successfully.')]);
//}
//public function destroy(Service $service)
//{
//$service->delete();
//
//$service->media()->delete();
//
//return $this->validResponse(['message' => __('Service removed successfully.')]);
//}
//
//private function uploadImg($request, $service)
//{
//$service->media()->delete();
//$service->addMediaFromRequest('cover')->toMediaCollection('service-cover');
//
//foreach ($request->gallery as $image) {
//    $service->addMedia($image)->toMediaCollection('service-gallery');
//}
//}
////اگر foreach
//private function uploadImg($request, $service)
//{
//$service->media()->delete();
//$service->addMediaFromRequest('cover')->toMediaCollection('service-cover');
//
//foreach ($request->gallery as $image) {
//    $service->addMedia($image)->toMediaCollection('service-gallery');
//}
//}
//
//////////////////////////////////////////// safe
//public function store(StorePostRequest $request)
//{
//// The incoming request is valid...
//
//// Retrieve the validated input data...
//$validated = $request->validated();
//
//// Retrieve a portion of the validated input data...
//$validated = $request->safe()->only(['name', 'email']); //فقط نام و ایمیل ولیدیت شود
//$validated = $request->safe()->except(['name', 'email']);// بجز نام و ایمیل
//}
//
/////////////////////////////////////////// api
//Route::middleware('auth:sanctum')->group(function () {
//Route::apiResource('app', AppController::class);
//Route::middleware('application')->group(function () {
//    Route::get('/user', function (Request $request) {
//        return $request->user();
//    });
//    Route::apiResource('token', TokenController::class)->except('show', 'update');
//    Route::apiResource('customer', CustomerController::class)->except('store');
//    Route::apiResources([
//        'category' => CategoryController::class,
//        'provider' => ProviderController::class,
//        'service' => ServiceController::class,
//        'appointment' => AppointmentController::class,
//    ]);
//    Route::get('/provider-appointments', [ProviderController::class, 'appointments'])->middleware('abilities:provider:*');
//});
//});
////////////////////////////////////////////////////////////////////////////////////////////////////////// short link شورت لینک
//https://lik.st/
//////////////////////////////////////////////////////////////////////////////////// put postman
//{{local}}/api/dashboard/articles/29?_method=PUT
///////////////////////////////////////////////////////////////////////////  exception نمایش خطا  اگر آبجکت نبود
//if (empty($tableNames)) {
//throw new \Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.');
//}
/////////////////////////////////////////////////////////////////////////// discount تخفیف
//public static function discount_price($main_price,$discount,$expiration_date)
//{
//$today_date = Carbon::now()->format('Y-m-d');
//
//if($expiration_date > $today_date){
//    $discount_price = $main_price - ( $main_price * ( $discount / 100 ));
//    return ceil($discount_price);
//}else{
//    return 0;
//}
//}
/////////////////////////////////////////////////////////////
//
/////////////////////////////////////////////////////////// role policy
////User
//public function isAdmin() {
//    return $this->role == 'admin';
//}
//public function isCouple() {
//    return $this->role == 'couple';
//}
////ModelController
//public function destroy(Article $article)
//{
//    if (Auth::user()->isAdmin()){
//        $article->delete();
//    }
//    return response()->json(['message' => 'deleted'], Response::HTTP_NO_CONTENT);
//}
/////////////////////////////////////////////////////////////// post man
//‘headers’ => [
//‘Accept’ => ‘application/json’,
//‘Authorization’ => ‘Bearer ‘.$accessToken,
//]
//
/////////////////////////////////////////////////////////////// email or phon_number
// if(Auth::attempt(['phone' => request('phone'), 'password' => request('password')]) || Auth::attempt(['email' => request('email'), 'password' => request('password')]) || Auth::attempt(['name' => request('name'), 'password' => request('password')]) ||  Auth::attempt(['anyOtherField' => request('anyOtherField'), 'password' => request('password')]) ){....Action...}
//
//
///////////////////////////////////////////////////////////////////////////////////////// upload normal
//public function store(Request $request)
//{
//$request->validate([
//    'category_id' => 'required',
//    'name' => 'required',
//    'price' => 'required',
//    'image' => 'required|mimes:png,jpg,webp',
//    'description' => 'required',
//]);
//$file = $request->file('image');
//$file_name = uniqid().$file->getClientOriginalName();
//$file->move(public_path('/images'), $file_name);
//Watch::create([
//    'category_id' => $request->category_id,
//    'name'        => $request->name,
//    'price'       => $request->price,
//    'image'       => $file_name,
//    'description' => $request->description,
//]);
//return redirect()->back()->with('success', 'Watch created!');
//}
//Public function update($id)
//$watch = Watch::where('id', $id);
//   if($request->file('image')){
//       File::delete(public_path('/images/'.$watch->first()->image));
//       $file = $request->file('image');
//       $file_name = uniqid().$file->getClientOriginalName();
//       $file->move(public_path('/images'), $file_name);
////       $file->store('image', 'public');
//
//
//
//   }else {
//       $file_name = $watch->first()->image;
//   }
//   $watch->update([
//       'category_id' => $request->category_id,
//       'name'        => $request->name,
//       'price'       => $request->price,
//       'image'       => $file_name,
//       'description' => $request->description,
//   ]);
/////
//store
//if($request -> hasFile('image'))
//{
//  $file= $request->file('image');
//  $extension = $file->getClientOriginalExtension();
//  $filename = time().'.'.$extension;
//  $file->move('uploads/', $filename);
//  $product->image = 'uploads/'.$filename;
//}
////update
//if($request->hasFile('image'))
//{
// $path = $product->image;
// if(File::exists ($path))
// {
//     File::delete($path);
// }
// $file= $request->file('image');
// $extension = $file->getClientOriginalExtension();
// $filename = time().'.'.$extension;
// $file->move('uploads/', $filename);
// $product->image = 'uploads/'.$filename;
//}
//////////////////////////////////////////////////////////////////////////////// wordpress
//https://github.com/corcel/corcel#config-service-loader
//https://code4geek.com/tutorial/get-wordpress-user-id/
//
////////////////////////////////////////////////////////////////// wallet
//https://pay.coingate.com/invoice/062f2a98-2921-43cb-be30-ab8dde3592c1
//////////////////////////////////////////////////////////////////////////////////////// convert string to array
//چک کردن ارایه و اگر استرینگ بود به ارایه تبدیل شود
//function data_get($target, $key, $default = null)
//{
//$key = is_array($key) ? $key : explode('.', $key);
//}
/////////////////////////////////////////////////////////////////////////////////////// status
//public function isActive(Request $request)
//$blog = Blog::findOrFail($request->id);
//if ($blog->is_active == 1) {
//    $blog->is_active = 0;
//} else {
//    $blog->is_active = 1;
//}
//$blog->save();
//return response(['message' => translate('Blog content status is changed')], 200);
//}
//
/////
//    $courses->is_private = $request->is_private == "on" ? true : false;
/////
//if ($content->is_published == 1) {
//$content->is_published = 0;
//$content->save();
//} else {
//$content->is_published = 1;
//$content->save();
//}
//////////////////////////////////////////////////////////////////////////////////////// cart
//$already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id',null)->where('product_id', $product->id)->first();
//
//     if($already_cart) {
//
//         $already_cart->quantity = $already_cart->quantity + 1;
//         $already_cart->amount = $product->price+ $already_cart->amount;
//
//         if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0) return back()->with('error','Stock not sufficient!.');
//         $already_cart->save();
//
//     }else{
//
//         $cart = new Cart;
//         $cart->user_id = auth()->user()->id;
//         $cart->product_id = $product->id;
//         $cart->price = ($product->price-($product->price*$product->discount)/100);
//         $cart->quantity = 1;
//         $cart->amount=$cart->price*$cart->quantity;
//         if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return back()->with('error','Stock not sufficient!.');
//         $cart->save();
//         $wishlist=Wishlist::where('user_id',auth()->user()->id)->where('cart_id',null)->update(['cart_id'=>$cart->id]);
//     }
//     request()->session()->flash('success','Product successfully added to cart');
//     return back();
//
//////////////////////////////////////////////////////////////////////////////////////// search
//
//public function index(Request $request)
//
//
//
//
//{
//
//
//    if ($request->has('search')) {
//
//
//        if (Auth::user()->user_type == "Admin") {
//
//
//            $courses = Course::where('title', 'like', '%' . $request->search . '%')->latest()->paginate(10);
//
//
//        } else {
//
//
//            $courses = Course::where("user_id", Auth::id())->where('title', 'like', '%' . $request->search . '%')->latest()->paginate(10);
//
//
//        }
//
//
//    } else {
//
//
//        if (Auth::user()->user_type == "Admin") {
//
//
//            $courses = Course::latest()->paginate(10);
//
//
//        } else {
//
//
//            $courses = Course::where("user_id", Auth::id())->latest()->paginate(10);
//
//
//        }
//
//
//    }
//
//
//
//
//
//
//
//    return view('course.index', compact('courses'));
//
//
//}
//
//
/////////////////////////////////////////////////////////////////////////////////////// key value
////table
//Schema::create('settings', function (Blueprint $table) {
//$table->increments('id');
//$table->string('key')->unique();
//$table->string('value');
//$table->string('name')->nullable();
//$table->string('content')->nullable();
//$table->timestamps();
//});
////setting
//class Setting extends Model
//{
//public static function getSetting($key)
//{
//    return Setting::where('key', $key)->value('value');
//}
//
//public static function getSettings($keys)
//{
//    $keys = explode(",", $keys);
//    $settings = Setting::whereIn('key', $keys)->get();
//    $data = [];
//    foreach ($settings as $setting) {
//        $data[$setting->key] = $setting->value;
//    }
//    return (object)$data;
//}
//}
////SettingaController
//class SettingController extends Controller
//{
//public function index(Request $request)
//{
//    $data = Setting::getSettings($request->keys);
//    return response()->json([
//        'data' => $data
//    ]);
//}
//public function store(Request $request)
//{
//    $settings = $request->all();
//    foreach ($settings as $key => $value) {
//        $setting = Setting::where('key', $key)->first();
//        if ($setting) {
//            $setting->value = $value;
//            $setting->save();
//        }else {
//            $setting = new Setting();
//            $setting->key = $key;
//            $setting->value = $value;
//            $setting->save();
//        }
//    }
//    return response()->json([
//        'message' => '保存成功！'
//    ]);
//}
//}
//
///////
////table
//Schema::create('items', function (Blueprint $table) {
//         $table->bigIncrements('id');
//         $table->integer('category_id');
//         $table->string('name');
//         $table->text('properties');
//         $table->timestamps();
//     });
////model
//protected $fillable = ["category_id","name", "properties"];
// public function category()
// {
//     return $this->belongsTo(Category::class);
// }
////request
//public function rules()
// {
//     return [
//         "name" => 'required|string|max:255',
//         "category_id" => 'required|integer',
//         'rows.*.key' => 'required',
//         'rows.*.value' => 'required'
//     ];
// }
////controller
//public function store(ItemCreateRequest $request)
// {
//     $request->merge(['properties' => json_encode($request->rows)]);
//     return $this->repository->create($request->all());
// }
//public function show($id)
// {
//     return $this->repository->with('category')->findOrFail($id);
// }
//public function update(ItemCreateRequest $request, $id)
// {
//     $request->merge(['properties' => json_encode($request->rows)]);
//     $this->repository->findOrFail($id)->update($request->all());
// }
//public function destroy($id)
// {
//     $this->repository->findOrFail($id)->delete();
// }
//
//
//
/////
//Schema::create('settings', function (Blueprint $table) {
//$table->increments('id');
//$table->string('key');
//$table->text('value')->nullable();
//$table->timestamps();
//});
////
//store
//Setting::create([ 'key' => 'example', 'value' => 'Hello World', ]);
//update
//Setting::where('key', 'example')->update([ 'value' => 'My New Value', ]);
//////
//class ItemController extends Controller
//{
//
//protected $repository;
//
//
//public function __construct(Item $repository)
//{
//    $this->repository = $repository;
//    $this->middleware('auth:api');
//}
//
//public function index()
//{
//    return $this->repository->with('category')->get();
//    // return Item::paginate(20);
//}
//
//public function store(ItemCreateRequest $request)
//{
//    $request->merge(['properties' => json_encode($request->rows)]);
//    return $this->repository->create($request->all());
//}
//
//
//public function show($id)
//{
//    return $this->repository->with('category')->findOrFail($id);
//}
//
//
//public function edit($id)
//{
//    return $this->repository->findOrFail($id);
//}
//
//
//public function update(ItemCreateRequest $request, $id)
//{
//    $request->merge(['properties' => json_encode($request->rows)]);
//    $this->repository->findOrFail($id)->update($request->all());
//}
//
//
//public function destroy($id)
//{
//    $this->repository->findOrFail($id)->delete();
//}
//}
/////////
//$site_settings = Setting::all()->pluck('value','key');
//Collection {#790 ▼
//#items: array:6 [▼
// "GA_CODE" => "UA-xxxxxxxx"
// "credits_url" => "https://magutti.com"
// "GMAPS_KEY" => "UA-xxxxxxxx"
//
//]
//}
////
//data_get($site_settings,'credits_url')
////return https://magutti.com
/////////////////////////////////////////////////////////////////////////////////////// reserve رزرو
////todo باید به ازای هر بوکینگ که در امروز به بعد نمایش می دهد ۳۰ دقیقه مانده به رزرو را استاتوسش را تغییر دهیم
//
//public function index(Request $request)
//{
//$bookings = Booking::with('room')->get();
//$bookings->each(function ($booking) {
//    $time_start = $booking['time_start'];//time_start
//    $dateBooking = $booking['date'];
//    $dateNow = date('Y-m-d');
//    $time_before_reserve = $booking['time_before_reserve'];//time_before_reserve 30
//    $check = now()->diffInMinutes($time_start);//check 14:30 13:30 1 اختلافش
//    if ($check < $time_before_reserve && $dateBooking == $dateNow) {
//// holiday شوداگر تایم مانده به کلاس از ۳۰ بیشتر بود
//        $booking->update([
//            'reserve' => 'holiday'
//        ]);
//    }
//});
//return response()->json($bookings, Response::HTTP_OK);
//}
/////////////////////////////////////////////////////////////////////////////////////// addMinutes
//کاربر مثلا 90 وارد کرد بعنوان دقیقه حساب شود به اهر اضافه شود
//public function store(StoreBookingRequest $request)
//{
////        dd($request->all());
//    $data = $request->validated();
//    $time_start = $request->input('time_start');
//    $time_start = Carbon::createFromFormat('H:i', $time_start);
//    $time_end = $time_start->addMinutes($request->input('period_time'));
//    $data['time_end'] = $time_end;
//    Booking::query()->create($data);
//    return response()->json(['message' => 'created'], Response::HTTP_CREATED);
//}
//
/////////////////////////////////////////////////////////////////////////////////////// kay
////table
//Schema::create('accounts', function (Blueprint $table) {
//         $table->id();
//         $table->string('account');
//         $table->string('username');
//         $table->timestamps();
//     });
//
////controller
//class UserAccount extends Component
//{
// public $accounts, $account, $username, $account_id;
// public $updateMode = false;
// public $inputs = [];
// public $i = 1;
//
// public function add($i)
// {
//     $i = $i + 1;
//     $this->i = $i;
//     array_push($this->inputs ,$i);
// }
//
// public function remove($i)
// {
//     unset($this->inputs[$i]);
// }
//
// private function resetInputFields(){
//     $this->account = '';
//     $this->username = '';
// }
//
// public function store()
// {
//     $validatedDate = $this->validate([
//             'account.0' => 'required',
//             'username.0' => 'required',
//             'account.*' => 'required',
//             'username.*' => 'required',
//         ],
//         [
//             'account.0.required' => 'Account field is required',
//             'username.0.required' => 'Username field is required',
//             'account.*.required' => 'Account field is required',
//             'username.*.required' => 'Username field is required',
//         ]
//     );
//
//     foreach ($this->account as $key => $value) {
//         Account::create(['account' => $this->account[$key], 'username' => $this->username[$key]]);
//     }
//
//     $this->inputs = [];
//
//     $this->resetInputFields();
//
//     session()->flash('message', 'Account Added Successfully.');
// }
//
////blade
//                    @foreach ($inputs as $key => $value)
//<select class="form-select" aria-label="Default select example" wire:model="account.{{ $value }}">
//                             <option selected>Account</option>
//                             <option value="facebook">Facebook</option>
//                             <option value="instagram">Instagram</option>
//                             <option value="twitter">Twitter</option>
//                             <option value="github">Github</option>
//                         </select>
//
/////
//<form action="" method="post">
//<input type="text" name="attribute_name[]" value="One">
//<input type="text" name="attribute_name[]" value="Two">
//<input type="text" name="attribute_name[]" value="Three">
//<input type="submit" value="Submit">
//</form>
////controller
//foreach($request->attribute_name as $key => $value) {
//echo "Key : " . $key . ", Value : ". $value . "<br>";
//}
////
//Output :
//Key : 1, Value : One
//Key : 2, Value : Two
//Key : 3, Value : Three
//
/////
////table
//     Schema::create('forms', function (Blueprint $table) {
//         $table->id();
//         $table->string('name');
//         $table->json('schema');
//     });
//
//     Schema::create('submissions', function (Blueprint $table) {
//         $table->id();
//         $table->foreignId('form_id');
//         $table->json('data');
//     });
//
////
//فرمساز
//{
//"fields": [
// {
//   "key": "name",
//  "label": "Your name",
//   "field_type": "textfield",
//   "default_value": "Hello"
// },
// {
//   "key": "happy",
//   "field_type": "boolean",
//  "label": "Are you happy?"
// }
//]
//}
//میشه این
//{
//"name": "John",
//"happy": true
//}
//
//
//
//
/////
//{
//"key": "mail",
//"value": "test@exmaple.com"
//}
////form request
//public function rules (): array
// {
//     return [
//         'key' => ['required','string', Rule :: in ($ this-> keys)],
//         'value' => ['required'],
//         'name' => ['max: 15'],
//         'mail' => ['email'],
//         'gender' => [Rule :: in (Gender :: validateList ())],
//     ];;
// }
//
////controller
//public function __invoke (int $ id, UpdateRequest $ request): JsonResponse
// {
//     $ user = User :: find (id)-> get ();
//     $ user-> update ([[
//         $ request-> get ('key') => $ request-> get ('value')
//     ]);
//     return response ()-> json ($ user, 200);
// }
/////
////table
//     $table->string('title');
////controller
//public function store(Request $request)
// {
//     $request->validate([
//         'name.*.title' => 'required'
//     ]);
//
//     foreach ($request->name as $key => $value) {
//         Todo::create($value);
//     }
//
//     return back()->with('success', 'Todos Has Been Created Successfully.');
// }
//<tr>
//<td><input type="text" name="name[0][title]" placeholder="Enter title" class="form-control" /></td>
//<td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>
//</tr>
//
//////////////////////////////////////////////////////////////////// key
//
//هرچند تا بخوات نام اضافه کنه
//public function addMorePost(Request $request)
//{
//    $rules = [];
//
//    foreach($request->input('name') as $key => $value) {
//        $rules["name.{$key}"] = 'required';
//    }
//
//    $validator = Validator::make($request->all(), $rules);
//
//    if ($validator->passes()) {
//
//        foreach($request->input('name') as $key => $value) {
//            TagList::create(['name'=>$value]);
//        }
//
//        return response()->json(['success'=>'done']);
//    }
//
//    return response()->json(['error'=>$validator->errors()->all()]);
//}
//
//////////////////////////////////////////////////////////////////////////////////////////////////////////////// key value setting
//
//id key value
//1  site_name Lavarel
//2. site_title  LaravelCom
//Here is my controller about update
//
//Copy Code
//public function update(Request $request, Setting $setting){
//    $key = explode(',', $request->key);
//    $setting = Setting::whereIn('key', $key)->update([
//        'value' => $request->get('value')
//    ]);
//    dd($setting);
//    return 'Update Thanh Cong';
//}
//
//
//You need to have something like this in the view
//
//Copy Code
//@foreach ($settings as $setting)
//<input name="settings[{{ $setting->key }}]" value="{{ $setting->value }}">
//@endforeach
//then
//
//Copy Code
//foreach ($request->settings as $key => $value) {
//Setting::firstWhere('key', $key)->update([
//'value' => $value
//]);
//}
//
//
//
//
//
//
//
//
/////////
//Schema::create('system_settings', function (Blueprint $table) {
//$table->id('id');
//$table->string('type');
//$table->string('value')->nullable();
//$table->timestamps();
//});
////نگاه
//if ($request->has('name')) {
//$system = SystemSetting::where('type', $request->type_name)->first();
//$system->value = $request->name;
//$system->save();
//}
//if ($request->has('footer')) {
//$system = SystemSetting::where('type', $request->type_footer)->first();
//$system->value = $request->footer;
//$system->save();
//}
//if ($request->has('f_logo')) {
//$system = SystemSetting::where('type', $request->footer_logo)->first();
//$system->value = fileUpload($request->f_logo,'site');
//$system->save();
//}
/////
//Schema::create('settings', function (Blueprint $table) {
//$table->increments('id');
//$table->string('key');
//$table->text('value')->nullable();
//$table->timestamps(); });
//// setting
//class Setting extends Model {
//protected $fillable = ['key', 'value'];
//}
////appserviceprovider
//
//if (Schema::hasTable('settings')) { foreach (Setting::all() as $setting) { Config::set('settings.'.$setting->key, $setting->value); } }
////controller
//Public function store{
//Setting::create([ 'key' => 'example', 'value' => 'Hello World', ]);
//}
//Public function update
//Setting::where('key', 'example')->update([ 'value' => 'My New Value', ]);
//
//
//
////////////////////////////////////////////////////////
/////
///*all site setting*/
//public function siteSetting(){
//$s = SystemSetting::all();
//$site = new SystemSetting();
//foreach ($s as $item){
//    $sk =$item->type;
//    $site->$sk = $item->value;
//}
//return new SiteSettingResource($site);
//}
//
////////////////////////////////////////////////////////////////////////////////////// source
//class ArticleResource extends Resource
//{
// /**
//  * Transform the resource into an array.
//  *
//  * @param  \Illuminate\Http\Request
//  *
//  * @return array
//  */
// public function toArray($request)
// {
//     return [
//         'type'          => 'articles',
//         'id'            => (string)$this->id,
//         'attributes'    => [
//             'title' => $this->title,
//         ],
//         'relationships' => new ArticleRelationshipResource($this),
//         'links'         => [
//             'self' => route('articles.show', ['article' => $this->id]),
//         ],
//     ];
// }
//}
//
///////////////////////////////////////////////// tag تگ
//public function store(Request $request)
//{
//$blog = new Blog();
//$blog->category_id = $request->category_id;
//$blog->title = $request->name;
//$blog->img = $request->icon;
//$blog->body = $request->desc;
//$tag = explode(',', $request->tag);
//$tagC = array();
//foreach ($tag as $itemt) {
//    array_push($tagC, $itemt);
//}
//$blog->tags = json_encode($tagC);
//$blog->save();
//notify()->success(translate('Blog Content created successfully'));
//return back();
//}
//////////////////////////////////////////// status is active
//public function isActive(Request $request)
//{
//
//if (env('DEMO') === "YES") {
//    Alert::warning('warning', 'This is demo purpose only');
//    return back();
//}
//
//$blog = Blog::findOrFail($request->id);
//if ($blog->is_active == 1) {
//    $blog->is_active = 0;
//} else {
//    $blog->is_active = 1;
//}
//$blog->save();
//return response(['message' => translate('Blog content status is changed')], 200);
//}
/////
//تغییر استاتوس و همان مقدار که دارد در پیمنت شارژ میکند از ولت کسر شود
//public function status($id)
//{
//$payment = Payment::where('id', $id)->first();
//$payment->status = 'Confirm';
//$payment->status_change_date = Carbon::now();
//
////change the instructor balance'
//$ins = Instructor::where('user_id', $payment->user_id)->first();
//
////payment
//$payment->current_balance = $ins->balance;
//$ins->balance -= $payment->amount;//update the balance
//
//$payment->save();
//$ins->save();
//notify()->success(translate('Payment status is updated'));
//return back();
//}
////////////////////////////////////////////////// today  date
////trading course week
//$start = Carbon::today()->toDateTimeString();
//$end = Carbon::today()->subDays(7)->toDateTimeString();
//$tr//if trading_course is 0
//if ($trading_courses->count() == 0) {
//$trading_courses = $courses->shuffle()->take(12);
//}
//ading_courses = $courses->whereBetween('created_at', [$end, $start])->skip(6)->take(12);
//
////////////////////////////////////////////////// wish list
//* Wishlist store */
//public function wishlistStore(Request $request)
//{
//$rules = [
//    'studentId' => 'required',
//    'courseId' => 'required'
//];
//
//$customMessages = [
//    'studentId.required' => 'The Student  is required .',
//    'courseId.required' => 'The Course  is required.',
//
//];
//
//$validator = Validator::make($request->all(), $rules,$customMessages);
///*IF the validators fail*/
//if ($validator->fails()) {
//    return response($validator->errors(), 404);
//}
//$wishlist = new Wishlist();
//$wishlist->user_id = $request->studentId;
//$wishlist->course_id = $request->courseId;
//$wishlist->course_price = $request->coursePrice;
//$wishlist->save();
//$wishlist = Wishlist::with('course')->where('user_id',  $wishlist->user_id)->get();
//return WishlistResource::collection($wishlist)->additional(['success' => true, 'status' => 200]);
//}
/////
///*all wishlist*/
//public function wishList()
//{
//if (Auth::user()->user_type != "Student") {
//    \auth()->logout();
//    return response('Your credentials does not match.', 403);
//}
//$items = Wishlist::with('course')->where('user_id', Auth::id())->get();
//
////there are create wish  list
//$wishList = collect();
//foreach ($items as $item) {
//    $carts = new Demo();
//    $carts->id = $item->id;
//    $carts->course_id = $item->course->id;
//    $carts->title = Str::limit($item->course->title, 30);
//    if ($item->course->is_free == true) {
//        $carts->price = formatPrice(0);
//    } else {
//        if ($item->course->is_discount == true) {
//            $carts->price = formatPrice($item->course->discount_price);
//        } else {
//            $carts->price = formatPrice($item->course->price == null ? 0 : $item->course->price);
//        }
//    }
//    $carts->image = filePath($item->course->image);
//    $carts->link = route('course.single', $item->course->slug);
//    $wishList->push($carts);
//}
//$link = route('my.courses');
//$message = translate('Add to Cart');
//return response(['data' => $wishList, 'link' => $link, 'message' => $message], 200);
//}
///////////////////////////////////////////////// upload file
//
//public function store(Request $request)
//{
//
//if (env('DEMO') === "YES") {
//    Alert::warning('warning', 'This is demo purpose only');
//    return back();
//}
//
//$request->validate([
//    'title' => 'nullable',
//    'image' => 'required|mimes:jpeg,jpg,png,pdf,mp4,zip',
//],
//    [
//        'image.required' => 'File cannot be empty.',
//        'image.mimes' => 'Invalid file format.',
//    ]
//);
//
//
//
//$media = new MediaManager;
//$media->user_id = Auth::user()->id;
//$media->type = $request->type;
//$media->title = $request->title;
//
//
//$media->save();
//
//if ($request->hasFile('image')) {
//    $extension     =  $request->image -> getClientOriginalExtension();
//}
//
//try {
//
//    if ($extension == 'pdf') {
//        MediaManager::find($media->id)->update([
//            'image' => fileUpload($request->image, 'media_manager'),
//            'alt' => 'pdf'
//        ]);
//    }
//
//    if ($extension == 'zip') {
//        MediaManager::find($media->id)->update([
//            'image' => fileUpload($request->image, 'media_manager'),
//            'alt' => 'zip'
//        ]);
//    }
//
//    if ($extension == 'mp4') {
//
//        MediaManager::find($media->id)->update([
//            'image' => fileUpload($request->image, 'media_manager'),
//            'alt' => 'video'
//        ]);
//    }
//
//    if ($extension == "png" || $extension == 'jpg' || $extension == 'jpeg') {
//        if ($request->hasFile('image')) {
//            $photo_upload        =  $request->image;
//            $photo_extension     =  $photo_upload -> getClientOriginalExtension();
//            $photo_name          =  $media->id . "." . $photo_extension;
//
//            $storeDirectory = 'public/uploads/media_manager/';
//            $DBstoreDirectory = '/uploads/media_manager/';
//
//            if (! \File::isDirectory($storeDirectory)) {
//                $dir = \File::makeDirectory($storeDirectory, true);
//                $img = Image::make($photo_upload)->save(base_path($dir.$photo_name),100);
//            }else{
//                $img = Image::make($photo_upload)->save(base_path($storeDirectory.$photo_name),100);
//            }
//
//            $size = $img->filesize();
//            $height = Image::make($photo_upload)->height();
//            $width = Image::make($photo_upload)->width();
//            MediaManager::find($media->id)->update([
//                'image'          => $DBstoreDirectory.$photo_name,
//                'size'           => round($size/1024),
//                'resolution'     => $width .'x' . $height,
//                'alt'            => 'image'
//            ]);
//        }
//    }
//
//    notify()->success(translate('Uploaded successfully.'));
//    return back();
//
//} catch (\Throwable $th) {
//    notify()->error(translate('Something went wrong!'));
//    return back();
//}
//
//}
////update
//public function update(Request $request, $id)
//{
//
//if (env('DEMO') === "YES") {
//    Alert::warning('warning', 'This is demo purpose only');
//    return back();
//}
//
//$request->validate([
//    'title' => 'nullable',
//    'image' => 'mimes:jpeg,jpg,png,pdf,mp4,zip',
//],
//    [
//        'image.mimes' => 'Invalid file format.',
//    ]
//);
//
//
//try {
//    if ($request->hasFile('image')) {
//
//        $update_media = MediaManager::where('id',$id)->first();
//        $update_media->title = $request->title;
//        $update_media->type = $request->type;
//
//        $extension     =  $request->image -> getClientOriginalExtension();
//
//        $filename = public_path().$update_media->image;
//
//        if ($request->hasFile('image')) {
//            \File::delete($filename);
//        }
//
//        if ($extension == 'pdf') {
//            MediaManager::find($update_media->id)->update([
//                'image' => fileUpload($request->image, 'media_manager'),
//                'alt' => 'pdf'
//            ]);
//        }
//
//        if ($extension == 'zip') {
//            MediaManager::find($update_media->id)->update([
//                'image' => fileUpload($request->image, 'media_manager'),
//                'alt' => 'zip'
//            ]);
//        }
//
//
//        if ($extension == 'mp4') {
//
//            MediaManager::find($update_media->id)->update([
//                'image' => fileUpload($request->image, 'media_manager'),
//                'alt' => 'video'
//            ]);
//        }
//
//        if ($extension == "png" || $extension == 'jpg' || $extension == 'jpeg') {
//            if ($request->hasFile('image')) {
//                $photo_upload        =  $request->image;
//                $photo_extension     =  $photo_upload -> getClientOriginalExtension();
//                $photo_name          =  $update_media->id . "." . $photo_extension;
//
//                $storeDirectory = 'public/uploads/media_manager/';
//                $DBstoreDirectory = '/uploads/media_manager/';
//
//                if (! \File::isDirectory($storeDirectory)) {
//                    $dir = \File::makeDirectory($storeDirectory, true);
//                    $img = Image::make($photo_upload)->save(base_path($dir.$photo_name),100);
//                }else{
//                    $img = Image::make($photo_upload)->save(base_path($storeDirectory.$photo_name),100);
//                }
//
//                $size = $img->filesize();
//                $height = Image::make($photo_upload)->height();
//                $width = Image::make($photo_upload)->width();
//                MediaManager::find($update_media->id)->update([
//                    'image'          => $DBstoreDirectory.$photo_name,
//                    'size'           => round($size/1024),
//                    'resolution'     => $width .'x' . $height,
//                    'alt'            => 'image'
//                ]);
//            }
//
//            $update_media->save();
//
//            notify()->success(translate('Update changed successfully.'));
//            return back();
//
//        }
//
//        notify()->success(translate('Update changed successfully.'));
//        return back();
//
//    }else{
//        $update_media = MediaManager::where('id',$id)->first();
//        $update_media->title = $request->title;
//        $update_media->type = $request->type;
//        $update_media->image = $request->oldImage;
//        $update_media->save();
//        notify()->success(translate('Update changed successfully.'));
//        return back();
//    }
//} catch (\Throwable $th) {
//    notify()->success(translate('Something went wrong.'));
//    return back();
//}
//
//
//}
//
////////////////////////////////////////////////////////////////////////////////////////////////////////////// language
//public function translate_store(Request $request)
//{
//
//if (env('DEMO') === "YES") {
//    Alert::warning('warning', 'This is demo purpose only');
//    return back();
//}
//
//$language = Language::findOrFail($request->id);
//
////check the key have translate data
//$data = openJSONFile($language->code);
//foreach ($request->translations as $key => $value) {
//    $data[$key] = $value;
//}
//
////save the new keys translate data
//saveJSONFile($language->code, $data);
//notify()->success(translate('Translation saved.'));
//return back();
//}
//
////////////////////////////////////////////////////////////////////////////////////////////////// برای دانلود
//https://www.youtube.com/watch?v=ZrZLEBq_DSg&list=PLe30vg_FG4OQ ML6zWJZajy0kydyPHC9Ke
/////////////////////////////////////////////////////////////////////////////////////////////// sms
//
//$message = "salam";
//$mobile = '9165089950';
//$restClient = new Rest_Client('xescape', '2kkh7Gm36%#X91h');
////    $restClient->SendSMS($mobile, '02191307900', $message, false);
//$restClient->SendSMS($mobile, '9999150342', $message, false);
//$data = json_decode(Cache::get($mobile), true);
//return array($mobile, $data);
//
/////
//$mobile2='9034325329';
////اس ام اس به مجموعه دار 2 63424
//$a1='تست' ;//name room;
//$a2='جمعه ساعت 17'; //date and time
//$a3='5' ;//qty
//$a4='بهترین مهندس دنیا' ;//name;
//$a5='09028757456' ;//player phon
//$a6='100' ;//pish;
//ini_set("soap.wsdl_cache_enabled","0");
//$sms2 = new SoapClient("http://api.payamak-panel.com/post/Send.asmx?wsdl",array("encoding"=>"UTF-8"));
//$data2 = array(
//    "username"=>"xescape",
//    "password"=>"2kkh7Gm36%#X91h",
//    "text"=>array($a1,$a2,$a3,$a4,$a5,$a6),
//    "to"=>"$mobile2",
//    "bodyId"=>"63424");
//$send_Result2 = $sms2->SendByBaseNumber($data2)->SendByBaseNumberResult;
//echo $send_Result2;
//
/////
//try {
// date_default_timezone_set("Asia/Tehran");
//
// // your sms.ir panel configuration
//$APIKey = "9ab80d1d26e70f2f81b60d1d";
// $SecretKey = "*&TG#WTDGFVQAW!@3423GRS%RBH";
// $APIURL = "https://ws.sms.ir/";
//
// // message data
// $data = array(
//     "ParameterArray" => array(
//         array(
//             "Parameter" => "player_fname",
//             "ParameterValue" => $zb_fname
//         ),
//         array(
//             "Parameter" => "booktime",
//             "ParameterValue" => $zb_date_and_time
//         ),
//         array(
//             "Parameter" => "nameroom",
//             "ParameterValue" => $zb__name
//         )
//     ),
//     "Mobile" => $phone_number ,
//     "TemplateId" => "62468"
// );
//
// $SmsIR_UltraFastSend = new SmsIR_UltraFastSend($APIKey, $SecretKey, $APIURL);
// $UltraFastSend = $SmsIR_UltraFastSend->ultraFastSend($data);
////  var_dump($UltraFastSend);
//
//} catch (Exeption $e) {
// //echo 'Error UltraFastSend : '.$e->getMessage();
//}
//
//
///////////////////////////////////////////////////////////////////////////////// sms
//composer require ipecompany/smsirlaravel
/////////////////////////////////////////////////////////////////////////////////// json encode
//اگر جیسان دریافت نکرد ارایه خودکار بگیرد
//$table->json('address')->default(json_encode([]));
//////////////////////////////////////////////////////////////////////////////////
////table
//class OrderProduct extends Model
//{
//use HasFactory;
//protected $fillable = ['quantity','rate','order_id','product_id'];
//
//public function order(){
//    return $this->belongsTo(Order::class);
//}
//
//public function product(){
//    return $this->belongsTo(Product::class);
//}
//
//public function getAmountAttribute()
//{
//    return $this->quantity * $this->rate;
//}
//
//// OrderProduct.php
///////////////////////////////////////////////////////////////////////////////////
//Schema::create('cart_items', function (Blueprint $table) {
//$table->increments('id');
//$table->unsignedInteger('user_id');
//$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//$table->unsignedInteger('product_sku_id');
//$table->foreign('product_sku_id')->references('id')->on('product_skus')->onDelete('cascade');
//$table->unsignedInteger('amount');
//});
////User
//public function cartItems()
//{
//return $this->hasMany(CartItem::class);
//}
////product_sku
//public function decreaseStock($amount)
//{
//if ($amount < 0) {
//    throw new InternalException('减库存不可小于0');
//}
//
//return $this->newQuery()->where('id', $this->id)->where('stock', '>=', $amount)->decrement('stock', $amount);
//}
//
//public function addStock($amount)
//{
//if ($amount < 0) {
//    throw new InternalException('加库存不可小于0');
//}
//$this->increment('stock', $amount);
//}
////CartService
//class CartService
//{
//public function get()
//{
//    return Auth::user()->cartItems()->with(['productSku.product'])->get();
//}
//
//public function add($skuId, $amount)
//{
//    $user = Auth::user();
//    // 从数据库中查询该商品是否已经在购物车中
//    if ($item = $user->cartItems()->where('product_sku_id', $skuId)->first()) {
//        // 如果存在则直接叠加商品数量
//        $item->update([
//            'amount' => $item->amount + $amount,
//        ]);
//    } else {
//        // 否则创建一个新的购物车记录
//        $item = new CartItem(['amount' => $amount]);
//        $item->user()->associate($user);
//        $item->productSku()->associate($skuId);
//        $item->save();
//    }
//
//    return $item;
//}
//
//public function remove($skuIds)
//{
//    // 可以传单个 ID，也可以传 ID 数组
//    if (!is_array($skuIds)) {
//        $skuIds = [$skuIds];
//    }
//    Auth::user()->cartItems()->whereIn('product_sku_id', $skuIds)->delete();
//}
//}
////CartController
//public function add(AddCartRequest $request)
//{
//$this->cartService->add($request->input('sku_id'), $request->input('amount'));
//
//return [];
//}
//public function remove(ProductSku $sku, Request $request)
//{
//$this->cartService->remove($sku->id);
//
//return [];
//}
//
//
////////////////////////////////////////////////////////////////////////////////////////
//
//برای دانلود پکیج
//اونایی که نمی تونن پکیج دانلود کنن
//در ترمینال بزنین
//
//export HTTPS_PROXY_REQUEST_FULLURI=false
//
//:)
//////////////////////////////////////////////////////////////////////////////// api composer
//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
//////////////////////////////////////////////////////////////////////////////////// sort price
//public function index()
//{
//$pagination = 9;
//$categories = Category::all();
//
//if (request()->category) {
//    $products = Product::with('categories')->whereHas('categories', function ($query) {
//        $query->where('slug', request()->category);
//    });
//    $categoryName = optional($categories->where('slug', request()->category)->first())->name;
//} else {
//    $products = Product::take(12);
//    $categoryName = 'Featured';
//}
//
//if (request()->sort == 'low_high') {
//    $products = $products->orderBy('price')->paginate($pagination);
//} elseif (request()->sort == 'high_low') {
//    $products = $products->orderBy('price', 'desc')->paginate($pagination);
//} else {
//    $products = $products->paginate($pagination);
//}
//
//return view('shop')->with([
//    'products' => $products,
//    'categories' => $categories,
//    'categoryName' => $categoryName,
//]);
//}
//
//////////////////////////////////////////////////////////////////////////////////  foreach each
//$connections = ChatConnection::all();
//foreach ($connections as $con)
//{ if($con->last_connected_at > Carbon::now()->subMinutes(5)){ // Code } }
//Or refactor to this
//$connections = ChatConnection::all(); $connections->each(function($con){
//if($con->last_connected_at > Carbon::now()->subMinutes(5)){ // Code } });
//
////////////////////////////////////////////////////////////////////////////////// null
//Public function($id==null){
//$packageId = $id !== null ? $id : ((count($this->packages) + 1));
//}
//////////////////////////////////////////////////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////// time
//
/////
//کم کردن
//$time_before = now()->subMinute($time_before_reserve)->toDateTimeString();//13:30
//اختلاف دقیقه
//$check = now()->diffInMinutes($time_start);//check 14:30 13:30 1 اختلافش
//
/////
//Route::get('', function () {
//$date = date("Y-m-d H:i:s");
//$time = strtotime($date);
//$time = $time - (15 * 60);
//$date = date("Y-m-d H:i:s", $time);
//return $date;
//});
/////
//public function index()
//{
//    $currentDateTime = Carbon::now();
//    $newDateTime = Carbon::now()->subMinute();
//
//    print_r($currentDateTime);
//    print_r($newDateTime);
//}
/////add
//public function index()
//{
//    $currentDateTime = Carbon::now();
//    $newDateTime = Carbon::now()->addMinute();
//
//    print_r($currentDateTime);
//    print_r($newDateTime);
//}
//
////////////////////////////////////////////////////////////////////////////////////////////////// array to fied
//ارایه در یک فیلد
//$cart = session()->get('cart');
//   // if cart is empty then this the first product
//    if(!$cart) {
//        $cart = [
//                $id => [
//                    "name" => $product->name,
//                    "quantity" => 1,
//                    "price" => $product->price,
//                    "photo" => $product->photo
//                ]
//        ];
//$putCart = session()->put('cart',$cart);
////////////////////////////////////////////////////
//
////////////////////////////////////////////////////////////////////////////////////////////////// whats app
//واتس اپ
//Route::get('', function () {
// $token = "77ededef69c64320b98223f50865ac65";
// $url = "https://api.wallmessage.ir/api/sendMessage?token=" . $token;
//
// $postData = array(
//     "mobile" => "09364036828",
//     "message" => "mohsen mojadam"
// );
//
// // for sending data as json type
// $fields = json_encode($postData);
//
// $ch = curl_init($url);
// curl_setopt(
//     $ch,
//     CURLOPT_HTTPHEADER,
//     array(
//         'Content-Type: application/json'
//     )
// );
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
//
////        curl_setopt($ch, CURLOPT_PROXY, 'socks5://big:ben10@185.208.77.252:20001');
//
// $result = curl_exec($ch);
// curl_close($ch);
////        \Illuminate\Support\Facades\Log::info($result);
// return $result;
//});
////////////////////////////////////////////////////////////////////////////////////////////////// upload image
//public function resizeImage(Request $request)
// {
//     $this->validate($request, [
//         'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
//     ]);
//     $image = $request->file('file');
//     $input['file'] = time().'.'.$image->getClientOriginalExtension();
//
//     $destinationPath = public_path('/thumbnail');
//     $imgFile = Image::make($image->getRealPath());
//     $imgFile->resize(150, 150, function ($constraint) {
//         $constraint->aspectRatio();
//     })->save($destinationPath.'/'.$input['file']);
//     $destinationPath = public_path('/uploads');
//     $image->move($destinationPath, $input['file']);
//     return back()
//         ->with('success','Image has successfully uploaded.')
//         ->with('fileName',$input['file']);
// }
////////////////////////////////////////////////////////////////////////////////////////////////// exception
//اکسپشن
//catch (\Exception $exception) {
//return response()->json(['status'=>false,'message'=>$exception->getMessage()]);
//}
////////////////////////////////////////////////////////////////////////////////////////////////// key value
////table
//Schema::create('settings', function (Blueprint $table) {
//         $table->id();
//         $table->string('key')->unique();
//         $table->string('label');
//         $table->text('content')->nullable();
//         $table->boolean('autoload')->default(0);
//         $table->timestamps();
//     });
////interface
//interface SettingRepositoryInterface extends RepositoryInterface
//{
// public function find(int $id);
// public function list();
// public function saveGeneral(array $data);
// public function saveSocials(array $data);
// public function saveAddresses(array $data);
// public function update(array $data, int $id);
// public function createOrUpdate(array $data, $id = null);
// public function delete(int $id);
//}
//
////controller
//protected $settingRepository;
// public function __construct(SettingRepositoryInterface $settingRepository)
// {
//     $this->settingRepository = $settingRepository;
// }
// public function list()
// {
//     return $this->settingRepository->list();
// }
// public function filtered($request, $status)
// {
//     $settings = $this->settingRepository->filtered($request->only(['key', 'label', 'autoload']));
//     return view('settings.partials.table', compact('settings', 'status'))->render();
// }
// public function fetch($request)
// {
//     $label = $request->input('label');
//     $labels = explode('-', $label);
//     $fallback = $labels[2] ;
//     unset($labels[1]);
//     $general  = implode('-', $labels);
//     $setting = $this->settingRepository->sorted([$label, $general, $fallback], $request->input('position'));
//     return $setting ? $setting->content : ts_lang('No setting defined for this section.');
// }
// public function findById($id)
// {
//     return $this->settingRepository->find($id);
// }
// public function saveGeneralSetting($request)
// {
//     return $this->settingRepository->saveGeneral($request->only(['site_heading', 'site_title', 'site_description','weblog_heading', 'weblog_title', 'weblog_description', 'logo', 'products_heading', 'products_title', 'products_description']));
// }
// public function saveSocialsSetting($request)
// {
//     return $this->settingRepository->saveSocials($request->only(['app_bazaar', 'app_store', 'aparat','facebook', 'instagram', 'google_play', 'linkedin', 'pinterest', 'telegram', 'twitter', 'whats_app', 'youtube']));
// }
// public function saveAddressesSetting($request)
// {
//     return $this->settingRepository->saveAddresses($request->only(['site_about', 'phone_number', 'address','email']));
// }
// public function updateSetting($request, $id)
// {
//     DB::beginTransaction();
//     try {
//         $setting = $this->settingRepository->update($request->only(['heading', 'label', 'content', 'position']), $id);
//     } catch (Exception $e) {
//         DB::rollBack();
//         Log::info($e->getMessage());
//         throw new invalidArgumentException('Unable to update setting data');
//     }
//     DB::commit();
//     return $setting;
// }
// public function deleteById($id)
// {
//     DB::beginTransaction();
//     try {
//         $setting = $this->settingRepository->delete($id);
//     } catch (Exception $e)
//     {
//         DB::rollBack();
//         Log::info($e->getMessage());
//         throw new InvalidArgumentException('Unable to delete setting data');
//     }
//     DB::commit();
//     return $setting;
// }
////SettingRepository
// protected $setting;
// public function __construct(Setting $setting) {
//     $this->setting = $setting;
// }
// public function find(int $id) {
//     return $this->setting->findOrFail ( $id );
// }
// public function findBySlug(string $slug) {
//     return $this->published ()->whereSlug ( $slug )->firstOrFail ();
// }
// public function list() {
//     return Setting::pluck('content', 'key')->toArray();
// }
// public function filtered($filters) {
//     $setting = Setting::query ();
//     if (isset ( $filters ['key'] )) {
//         $key = $filters ['key'];
//         $setting->where ( 'key', 'LIKE', str_replace ( ' ', '%', " $key " ) );
//     }
//     if (isset ( $filters ['label'] )) {
//         $label = $filters ['label'];
//         $setting->where ( 'label', 'LIKE', str_replace ( ' ', '%', " $label " ) );
//     }
//     if (isset ( $filters ['autoload'] )) {
//         $status = $filters ['autoload'];
//         $setting->whereAutoload ( $status );
//     }
//     return $setting->get ();
// }
// public function saveGeneral(array $data) {
//     foreach($data as $key => $value)
//     {
//         $setting = Setting::where('key', $key)
//         ->update ([
//             'content' => $value,
//         ]);
//     }
// }
// public function saveSocials(array $data) {
//     foreach($data as $key => $value)
//     {
//         $setting = Setting::where('key', $key)
//         ->update ([
//                 'content' => $value,
//         ]);
//     }
//     return $setting;
// }
// public function saveAddresses(array $data) {
//     foreach($data as $key => $value)
//     {
//         $setting = Setting::where('key', $key)
//         ->update ([
//                 'content' => $value,
//         ]);
//     }
//     return $setting;
// }
// public function update(array $data, int $id) {
//     $setting = $this->setting->findOrFail ( $id )->update ( $data );
//     return $setting;
// }
//
// /**
//  * Update an existing setting or create it if not exist.
//  *
//  * @param array $data
//  * @param int $id
//  */
// public function createOrUpdate(array $data, $id = null) {
//     if (is_null ( $id )) {
//         return $this->setting->create ( $data );
//     }
//     return $this->setting::findOrFail ( $id )->update ( $data );
// }
//
// /**
//  * Deletes a setting.
//  *
//  * @param int $id
//  */
// public function delete(int $id)
// {
//     return Setting::destroy($id);
// }
//
//
/////
////table
//Schema::create('user_details', function (Blueprint $table) {
//$table->id();
//$table->foreignId('user_id')->constrained();
//$table->string('key')->nullable();
//$table->text('value')->nullable();
//$table->dateTime('created_at');
//$table->dateTime('updated_at');
//});
//// enum
//enum UserDetailEnum:string {
//case Location = 'location';
//case CompanyName = 'companyName';
//case levelExperience = 'levelExperience';
//case AverageRate = 'averageRate';
//}
////UserDetailRepository
//public function create($request)
//{
//$data['user_id'] = Auth::user()->id;
//
//if ($request->has('location')){
//    $data['key'] = UserDetailEnum::Location->value;
//    $data['value']=$request->input('location');
//}
//if ($request->has('companyName')){
//    $data['key'] = UserDetailEnum::CompanyName->value;
//    $data['value']=$request->input('companyName');
//}
//if ($request->has('levelExperience')){
//    $data['key'] = UserDetailEnum::levelExperience->value;
//    $data['value']=$request->input('levelExperience');
//}
//if ($request->has('averageRate')){
//    $data['key'] = UserDetailEnum::AverageRate->value;
//    $data['value']=$request->input('averageRate');
//}
//
//$userDetail = UserDetail::query()->create($data);
//return $userDetail;
//}
//
//
////////////////////////////////////////////////////////////////////////////////////////////////// many to many
////table
//Schema::create('answers_users', function (Blueprint $table) {
//$table->id();
//$table->foreignId('user_id')->constrained();
//$table->foreignId('question_id')->constrained();
//$table->foreignId('answer_id')->constrained();
//$table->string('value');
//$table->timestamps();
//
//});
////model
////answerModel
//class Answer extends Model
//{
//use HasFactory;
//
//protected $guarded = [];
//
//public function question()
//{
//    return $this->belongsToMany(Question::class)->withPivot('value');
//}
//
//
//public function getCreatedAtAttribute($value)
//{
//    return Carbon::parse($value)->format('Y-m-d H:i:s');
//}
//
//public function getUpdatedAtAttribute($value)
//{
//    return Carbon::parse($value)->format('Y-m-d H:i:s');
//}
//}
//
////controller
//public function all()
//{
//    return Answer::with(['question'])->get();
//}
//
//public function create($request)
//{
//    $data = $request;
//    $data['user_id'] = Auth::user()->id;
//    $answer = Answer::query()->create($data);
//    $answer->Question()->sync($request->input('question', []));
//    return $answer;
//}
//
//public function show($answer)
//{
//  return  $answer->load(['question']);
//
//}
//
//public function update($id, $request,$answer)
//{
//    $data = $request;
//    $data['user_id'] = Auth::user()->id;
//    $answer->query()->update($data);
//
////        $answer->update($request->all());
//    $answer->Question()->sync($request->input('question', []));
//    return $answer;
//}
//
//public function destroy($id)
//{
//  return  Answer::query()->delete($id);
//}
//////////////////////////////////////////////////////////////many to many
//app/Models/Product.php:
//class Product extends Model
//{
// public function shops()
// {
//     return $this->belongsToMany(Shop::class);
// }
//}
//
////Shop
//public function products()
//{
// return $this->belongsToMany(Product::class)
//     ->withPivot('products_amount', 'price')
//     ->withTimestamps();
//}
////
//foreach ($shop->products as $product)
//{
// echo $product->pivot->price;
//}
////ProductController
//$shop->products()->attach(1, ['products_amount' => 100, 'price' => 49.99]);
//
//
//
///////////////////////////////////// many to many
//public function show(Category $category)
// {
//     $posts = $category->posts()->paginate();
//
//     return view('landing', compact('posts'));
// }
////upload file
//$files = $request->file('image');
//
//$data = $request;
//$data['user_id'] = Auth::user()->id;
//$data['mim'] = $data->getMimeType();
//$data['width'] = $width;
//$data['height'] = $height;
//$data['size'] = $files->getSize();
//$data['path'] = $files->getPath();
//$data['type'] = $files->getType();
//$f= File::query()->update([
// $data
//]);
//$dir = 'uploads/files';
//$name = time() . '-' . $data->getClientOriginalName();
//$data->store($dir, $name);
//
//
////
//<?php $arr1 = array('foo' => 'bar'); $arr2 = array('baz' => 'bof'); $arr3 = $arr1 + $arr2; print_r($arr3);
//
///////
//
//Let's say you need a dropdown of choices
//Try this:
//namespace App; use Illuminate\Database\Eloquent\Model; class Customer extends Model { const PHONE_TYPES = [ [ 'label' => 'Cellular', 'value' => 'Cellular', ], [ 'label' => 'Home', 'value' => 'Home', ], [ 'label' => 'Work', 'value' => 'Work', ], ]; public function getPhoneTypesLabelAttribute() { return collect(static::PHONE_TYPES)->firstWhere('value', $this->phone_types)['label'] ?? ''; } }
//
//
//
//////
//$addedPost = Post::with(['product','postattribute.attribute.category','user.userDetails'])
//         ->whereId($postData['post_id'])
//         ->first();
//$favouritePost  = PostFavourite::isAlreadyAdded($postData['post_id'], Auth::id());
//
//$addedPost->put('favouritepost', $favouritePost);
//
//return  [
//'status_code'     =>    $status_code,
//'message'         =>    $message,
//'PostDetails'     =>    $addedPost
//];
///////////////////////////////////////////////
//
////figma
//https://www.figma.com/file/BCAhJLPFJAGfaIwuwXOEui/CanamX---Design?node-id=1019%3A41683
////draw
//https://desk.draw.io/a/solutions/articles/16000074659
//// pms
//https://pms.kingcode.app/projects/31
//// google meet
//https://drive.google.com/file/d/1jyq_vmQcRsnqunX6IyEqCfNcC2upb6bC/view
////git
//git config --global http.proxy 'socks5://big:ben10@185.208.77.252:20001'
///////////////////////////////////////////////////////////////////////////////////////////////////////////////// ids wherein
//چک کردن ارایه در رکویست
//
////request
//public function rules()
//{
//return [
//    'ids'   => 'required|array',
//    'ids.*' => 'exists:bookings,id',
//];
//}
//
////controller
//public function massDestroy(MassDestroyBookingRequest $request)
//{
//Booking::whereIn('id', request('ids'))->delete();
//return response(null, Response::HTTP_NO_CONTENT);
//}
//
///////////////////////////////////////////////////////////////////////////////
//
//پیامک شرکت
//{
//include 'payamak-sefid.php';
//try {
// date_default_timezone_set("Asia/Tehran");
//
// // your sms.ir panel configuration
//$APIKey = "9ab80d1d26e70f2f81b60d1d";
// $SecretKey = "*&TG#WTDGFVQAW!@3423GRS%RBH";
// $APIURL = "https://ws.sms.ir/";
////
//\n لوکیشن: \n \n https://www.google.com/maps/dir/$room_lat_wa,$room_long_wa/";
//$sms_client = new SoapClient('http://api.payamak-panel.com/post/schedule.asmx?wsdl', array('encoding' => 'UTF-8'));
//
//$parameters['username'] = "xescape";
//$parameters['password'] = "2kkh7Gm36%#X91h";
//$parameters['to'] = "$phone_number";
//$parameters['from'] = "9999150342";
//$parameters['text'] = "$cm_txt";
//
//
///////////////////////////////////////////////////////////////////////////////////////////// enum
////Enum
//enum UserDetailEnum:string {
//case Location = 'location';
//case CompanyName = 'companyName';
//case levelExperience = 'levelExperience';
//case AverageRate = 'averageRate';
//}
//
//
////Controller
//public function create($request)
//{
//
//if ($request->has('location')){
//    $data['key'] = UserDetailEnum::Location->value;
//    $data['value']=$request->input('location');
//}
//if ($request->has('companyName')){
//    $data['key'] = UserDetailEnum::CompanyName->value;
//    $data['value']=$request->input('companyName');
//}
//if ($request->has('levelExperience')){
//    $data['key'] = UserDetailEnum::levelExperience->value;
//    $data['value']=$request->input('levelExperience');
//}
//if ($request->has('averageRate')){
//    $data['key'] = UserDetailEnum::AverageRate->value;
//    $data['value']=$request->input('averageRate');
//}
//$userDetail = UserDetail::query()->create($data);
//return $userDetail;
//}
/////////////////////////////////////////////////////////////////////////////// upload
//public function store(StoreCategoryRequest $request)
//{
//$data = $request->validated();
//if ($request->file('image')) {
//$data = $this->upload($request, $data);
//}
//$data['user_id']=Auth::user();
//Category::query()->create($data);
//}
//protected function deleteFile($path)
//{
//    $file = public_path($path);
//    if (file_exists($file)) {
//        File::delete($file);
//    }
//}
//
//public function upload(StoreCategoryRequest $request, mixed $data): mixed
//{
//    $file = $request->file('image');
//    $filename = time() . $request->image->getClientOriginalName();
//    $file->storeAs('images', $filename);
//////            $file->move(public_path('public/Image'), $filename);
//    $data['image'] = $filename;
//    return $data;
//}
//
//////////////////////////////////////////////////////////////////////////////
//https://www.youtube.com/watch?v=q-Fl_Qcfy5o
//https://discord.gg/RMGhq4W2
//https://gitlab.com/savvytech/api-backend 404
//docker-compose exec php php artisan bagisto:publish
//https://www.figma.com/file/BCAhJLPFJAGfaIwuwXOEui/CanamX---Design?node-id=953%3A10918
//develop master bugfix feature
//اگر میخوای از پکیج های سوی استفاده کنی انها را در کامپوزر جیسانش ریکوایر کن
//
//docker-compose exec php php artisan bagisto:publish
/////////////////////////////////////////////////////////////////////////////////////////////////////// spatie media library
////store
//public function store(UserInfoRequest $request)
// {
//     $data = $request->all();
//     $data['user_id'] = Auth::user()->id;
//
//     $userInfo = UserInfo::query()->create($data);
//     if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
//         $userInfo->addMediaFromRequest('logo');
//     }
//     return (new AnswerResource($userInfo))
//         ->response()->json('created', Response::HTTP_CREATED);
// }
//public function update(Request $request, UserInfo $userInfo)
//{
//    $data = $request->all();
//    $data['user_id'] = Auth::user()->id;
//    $userInfo = UserInfo::query()->update($data);
//    $logo = $request->file('logo');
//    if ($request->hasFile('logo')) {
//        $userInfo->clearMediaCollection('logo');
//        $userInfo->addMedia($logo)->toMediaCollection('logo');
//    }
//    return (new AnswerResource($userInfo))
//        ->response()->json('created', Response::HTTP_CREATED);
//}
/////////////////////////////////////////////
//public function showUploadFile(Request $request) {
//   $file = $request->file('image');
//
//   //Display File Name
//   echo 'File Name: '.$file->getClientOriginalName();
//   echo '<br>';
//
//   //Display File Extension
//   echo 'File Extension: '.$file->getClientOriginalExtension();
//   echo '<br>';
//
//   //Display File Real Path
//   echo 'File Real Path: '.$file->getRealPath();
//   echo '<br>';
//
//   //Display File Size
//   echo 'File Size: '.$file->getSize();
//   echo '<br>';
//
//   //Display File Mime Type
//   echo 'File Mime Type: '.$file->getMimeType();
//
//   //Move Uploaded File
//   $destinationPath = 'uploads';
//   $file->move($destinationPath,$file->getClientOriginalName());
//}
//////////////////////////////////////////////
////////////////////////////////////////////// status
//اگر پسورد را کاربر وارد نکرده بود
//if (! $data['password']) {
//unset($data['password']);
//} else {
//$data['password'] = bcrypt($data['password']);
//}
//$data['status'] = isset($data['status']);
//مخالف استاتوس ست شده از کاربر
//$isStatusChangedToInactive = ! $data['status'] && (bool) $user->status;
//
///////////////////////////////////////////// guard api
////auth.php
//'guards' => [ 'web' => [
//'driver' => 'session', 'provider' => 'users', ],
//'api' => [
//'driver' => 'jwt-auth', 'provider' => 'users', ],
//'visitor_api' => [
//'driver' => 'jwt-auth', 'provider' => 'visitors', ], ],
////
//Route::group(['middleware' => ['web','auth:visitor_api'], 'prefix' => 'visitor'], function() { Route::get('/home', 'VisitorController@index')->name('home'); Route::get('/list', 'VisitorController@list')->name('list'); });
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Ankit Gupta July 23, 2021 at 6:07 pm
//Yes, it is possible to add them via map function.
//$faultParts = collect($request->input(‘faultParts’, []))
//->map(function ($part) {
//return [
//‘part_id’ => $part[“partId”],
//‘quantity’ => $part[“quantity”],
//‘need_replacement’ => $part[“needReplacement”],
//‘is_fixed’ => $part[“isFixed”],
//‘notes’ => $part[“notes”],
//];
//});
////Save machine categories…
//$fault->parts()->sync($faultParts);
///////////////////////////////////////////////////////////
//class Category extends Model
//{
//use HasFactory;
// /**
// * Get the comments for the blog post.
// */
//public function products()
//{
//    return $this->hasMany(Product::class);
//}
//}
////
//class Product extends Model
//{
//use HasFactory;
// protected $fillable = [
//    'name', 'price'
//];
//}
////
//public function index()
//{
//    $categories = Category::select("id", "name")
//                    ->withSum('products', 'price')
//                    ->get()
//                    ->toArray();
//    dd($categories);
//}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//class Order extends Model {
// protected $fillable = [
//     'user_id', 'sort_id', 'payed'
// ];
// public function user() {
//     return $this->belongsTo( User::class, 'user_id', 'id' );
// }
// public function sort() {
//     return $this->belongsTo( Sort::class, 'sort_id', 'id' );
// }
//}
///////
// $costs = Order::with('Sort')->where('payed', 0)->sum('price');
////////////////////////////////////////////////////////////////////////////////////////// one to many
//جمع قیمت فیلد اتاق
//$user->room()->sum(“price”);
/////////////////////////////////////////////////////////////////////////////////////////// one to many
//Schema::create('posts', function (Blueprint $table) {
//$table->increments('id');
//$table->string("name");
//$table->timestamps();
//});
////
//Schema::create('comments', function (Blueprint $table) {
//$table->increments('id');
//$table->integer('post_id')->unsigned();
//$table->string("comment");
//$table->timestamps();
//$table->foreign('post_id')->references('id')->on('posts')
//    ->onDelete('cascade');
//});
////
//
//class Post extends Model
//{
//public function comments()
//{
//    return $this->hasMany(Comment::class);
//}
//}
//class Comment extends Model
//{
//public function post()
//{
//    return $this->belongsTo(Post::class);
//}
//}
////Controller
//
//$post = Post::find(1);
//$comment = new Comment;
//$comment->comment = "Hi ItSolutionStuff.com";
//$post = $post->comments()->save($comment);
//Or
//$post = Post::find(1);
//$comment1 = new Comment;
//$comment1->comment = "Hi ItSolutionStuff.com Comment 1";
//$comment2 = new Comment;
//$comment2->comment = "Hi ItSolutionStuff.com Comment 2";
//$post = $post->comments()->saveMany([$comment1, $comment2]);
////CommentController
//$comment = Comment::find(1);
//$post = Post::find(2);
//$comment->post()->associate($post)->save();
//
////////////////////////////////////////// many to many
//Schema::create('users', function (Blueprint $table) {
//$table->increments('id');
//$table->string('name');
//$table->string('email')->unique();
//$table->string('password');
//$table->rememberToken();
//$table->timestamps();
//});
////
//Schema::create('roles', function (Blueprint $table) {
//$table->increments('id');
//$table->string('name');
//$table->timestamps();
//});
////
//Schema::create('role_user', function (Blueprint $table) {
//$table->integer('user_id')->unsigned();
//$table->integer('role_id')->unsigned();
//$table->foreign('user_id')->references('id')->on('users')
//    ->onDelete('cascade');
//$table->foreign('role_id')->references('id')->on('roles')
//    ->onDelete('cascade');
//});
////User
//public function roles()
//{
//    return $this->belongsToMany(Role::class, 'role_user');
//}
////Role
//class Role extends Model
//{
//public function users()
//{
//    return $this->belongsToMany(User::class, 'role_user');
//}
//}
////UserController
////index
//$user = User::find(1);
//dd($user->roles);
////store
//$user = User::find(2);
//$roleIds = [1, 2];
//$user->roles()->attach($roleIds);
//or      $student->subject()->detach(1);
/////StudentController
//public function store_subject(){
//     $subject = new Subject;
//     $subject->name = 'History';
//     $subject->save();
//     dd($subject);
// }
//
//
/////////////////////////////////////////////////////////////////////////////////////////// many to many  pivot
////2020_04_23_114847_create_event_user_table.php
//class CreateEventUserTable extends Migration
//{
//public function up()
//{
//    Schema::create('event_user', function (Blueprint $table) {
//        $table->primary(['user_id','event_id']);
//        $table->bigInteger('user_id')->unsigned();
//        $table->bigInteger('event_id')->unsigned();
//        $table->string('note');
//        $table->timestamps();
//        $table->foreign('user_id')
//            ->references('id')
//            ->on('users');
//        $table->foreign('event_id')
//            ->references('id')
//            ->on('events');
//    });
//}
////User
//public function events()
//{
//return $this->belongsToMany('App\Event')->withPivot('note')->withTimestamps();
//}
////Event
//public function users(){
//return $this->belongsToMany('App\User')->withTimestamps();
//}
////UserController
//public function store(Request $request)
//{
//$validator = $this->validateUser();
//if($validator->fails()){
//    return response()->json($validator->messages(), 422);
//}
//$user = User::create([
//    'name' => $request->get('name'),
//    'email' => $request->get('email'),
//    'password' => Hash::make($request->get('password')),
//]);
//return response()->json(['message'=>'User Created','data'=>$user],201);
//}
//
//public function book_event(Request $request, User $user, Event $event)
//{
//$note = '';
//if($request->note){
//    $note = $request->note;
//}
//if($user->events()->save($event, array('note' => $note))){
//    return response()->json(['message'=>'User Event Created','data'=>$event],200);
//}
//return response()->json(['message'=>'Error','data'=>null],400);
//}
////////////////////////////////////////////////////////////////////////////////////////////  many to many tag
//class Tag extends Model
//{
//protected $fillable = ['name'];
//public function articles()
//{
//    return $this->belongsToMany('App\Article');
//}
//}
////
//public function index()
//{
//$articles = Article::with('tags')->get();
//return view('articles.index', compact('articles'));
//}
//
//public function store(Request $request)
//{
//$article = Article::create($request->only(['title']));
//$tags = explode(",", $request->get('tags'));
//$tag_ids = [];
//foreach ($tags as $tag) {
//    $tag_db = Tag::where('name', trim($tag))->firstOrCreate(['name' => trim($tag)]);
//    $tag_ids[] = $tag_db->id;
//}
//$article->tags()->attach($tag_ids);
//return redirect()->route('articles.index');
//}
//
//////////////////////////////////////////////////////////////////////////////////////////// many to many
//اگر بخواهیم ایدی بصورت کد uuid  اینزرت شود
//RoleUser Model
//class RoleUser extends Pivot {
//use HasFactory;
//protected $primaryKey = 'id';
//protected $keyType = 'string';
//protected static function boot() {
//parent::boot(); self::creating(function ($model) {
//$model->id = (string)Str::uuid(); });
//} }
//////////////////////////////////////////////////////////////////////////////////////////// add minutes
//اضافه کردن دقیقه
////    $table->time('time_start')->comment('ساعت شروع');
//$time_start = Carbon::createFromFormat('H:i', "04:29");
//$time_end = $time_start->addMinutes("10");
//return $time_end;
//
/////////////////////////////////////////////////////////////////////////////////////////// key value
//Account::create([
//‘key’=>$validateData[‘key’],
//‘value’=>$validateData[‘value’],
//‘type’=>$validateData[‘type’]
//]);
/////////////////////////////////////////////////////////////////////////////////////////// key value
//public function up()
// {
//     Schema::create('settings', function (Blueprint $table) {
//         $table->id();
//         $table->string('title');
//         $table->text('value');
//         $table->timestamps();
//         $table->unique('title');
//     });
// }
////SettingController
////edit
//public function edit()
// {
//     $setting= Setting::where('title', 'prices')->first();
//     $setting_prices = json_decode($setting->value);//فیلد  فلان بده
//     return view('panel-v2.setting.form-prices', compact('setting_prices',
//     ));
// }
////update
//public function update(Request $request)  {
// $setting = [
//     'story' => [
//             'min' => $request->story_min,
//             'max' =>$request->story_max,
//               ],
//];
//$setting_json = json_encode($setting);
//$setting_prices = Setting::query()->where('title', 'prices')->update([
//'value' => $setting_json
//]);
//if ($setting_prices){
//return redirect()->back()->with('success', 'success');
//}else{
//return redirect()->back()->with('error', 'error');}
// }
/////
//$data = [
//         'status_code' => 200,
//         'status' => 'success',
//         'message' => 'webhook send successfully',
//         'extra_data' => [
//             'first_name' => 'Harsukh',
//             'last_name' => 'Makwana',
//         ],
//     ];
//     $json_array = json_encode($data);
//
///////////////////////////////////////////////////////////////////////////////////////////
//Schema::create('posts', function (Blueprint $table) {
//        $table->id();
//        $table->string('name');
//        $table->text('description');
//        $table->text('cat');
//        $table->timestamps();
//    });
//
////
//protected $fillable = ['name','cat','description'];
// /**
// * Set the categories
// *
// */
//public function setCatAttribute($value)
//{
//    $this->attributes['cat'] = json_encode($value);
//}
// /**
// * Get the categories
// *
// */
//public function getCatAttribute($value)
//{
//    return $this->attributes['cat'] = json_decode($value);
//}
////
//public function postData(Request $request)
// {
//     $input = $request->all();
//
//     Post::create($input);
//
//     dd('Post created successfully.');
// }
///////////////////////////////////////////////////////// auth
//
//
//
//    $this->middleware('auth:api', ['except' => ['indexAll']]);
//
//
//
//
//
/////////////////////////////////////////////////////////////// nilly web
//dev5sitebuilder
//dev5.sitebuilder@gmail.com
//Ya@89051
//Ya@890501
//git config --global user.name "dev5sitebuilder"
//git config --global user.email "dev5.sitebuilder@gmail.com"
//
////terello
//Ya@890501
//git config --global user.name "dev5"
//git config --global user.email "dev5.sitebuilder@gmail.com"
//
//git clone http://72.142.143.25/micro-services/articles.git
//
//
//
///////////////////////////////////////////////// singlton
////servceprovider
//زمانیکه کلاس صدا زده شد همان ابجکت ابتدایی بزار و ابجکت جدید نساز
//public function register()
//{
//$this->app->singleton(Current::class, function () {
//    return new Current();
//});
//}
////
//return Current::getCurrent();
////src/composer.json
//"repositories": {
//"currentnews": {
//    "type": "path",
//    "url": "packages/mohsen/current",
//    "options": {
//        "symlink": true
//    }
//}
//},
//"license": "MIT",
//"require": {
//"php": "^8.0.2",
//"guzzlehttp/guzzle": "^7.2",
//"laravel/framework": "^9.2",
//"laravel/sanctum": "^2.14.1",
//"laravel/tinker": "^2.7",
//"mohsen/current": "@dev"
//},
//
////composer.json
//"require": {},
//"autoload": {
//"psr-4": {
//    "Mohsen\\Current\\": "src/"
//}
//},
//"extra": {
//"laravel": {
//    "providers": [
//        "Mohsen\\Current\\CurrentServiceProvider"
//    ]
//}
//}
//
////
//Php artisan vendor:publish
/////////////////////////////////////
//$client = Http::get('https://api.currentsapi.services/v1/latest-news', [
//"apiKey" => config('current.api_key')
//]);
//return $client->json()['news'];
////config/current.php
//return [
//'api_key' => env('CURRENT_API_KEY', '')
//];
////env
//CURRENT_API_KEY=’kmvlxkmvldkcdvmlsdmv’
//
///////////////////////////////////////////////////////////////////////////////  throw
//اگر پیدا نکردی خطا نشان بده
//public function findBySlugOrFail($slug)
//{
//$category = $this->model->whereTranslation('slug', $slug)->first();
//if ($category) {
//    return $category;
//}
//throw (new ModelNotFoundException)->setModel(
//    get_class($this->model), $slug
//);
//}
///////////////////////////////////////////// firstWhere
//$flight = App\Flight::firstWhere('active', 1);
////
//Model::where(function ($query) {
// $query->where('a', '=', 1)
//       ->orWhere('b', '=', 1)->firstWhere('active', 1);
////
//$users = DB::table('users')->whereIn('id', array(1, 2, 3))->get()
////
//$user = User::where('mobile', Input::get('mobile'))->get();
//if (!$user->isEmpty()){
// $firstUser = $user->first()
//}
////
//$users = DB::table('users')->whereMonth('created_at', '12')->get();
/////
//اگر وارد کرده بود و مخالف داده خالی بود بده در غیر اینصورت ۹ پجینیت بده
//$params = request()->input();
//$perPage = isset($params['limit']) && ! empty($params['limit']) ? $params['limit'] : 9;
//////////////////////////////////////////// bool check true
//چک میکند ترو باشد
//protected $canBeCopied = true;
//
//public function canBeCopied(): bool
//{
//return $this->canBeCopied;
//}
//
//////////////////////////////////////////// check items
//اول کل داده از مدل مدنظر بگیر بعد بصورت کی ولیو کن بعد چک کن ایدی مالیات داخلش نباشد
//بعد چک کن ارایه تایپ از این موارد باشه و یا فیلد کد از همین نوع باشه
//اگر موارد بالا بود داده ها به متغیر مدنظر پوش شود
//data:[
//‘Category’:[
//{code:sku},
//{type:['select', 'multiselect']},
//{code:sku}
//]
//]
//public function getPartial()
//{
//$attributes = $this->model->all();
//$trimmed = [];
//foreach ($attributes as $key => $attribute) {
//    if (
//        $attribute->code != 'tax_category_id'
//        && (
//            in_array($attribute->type ,['select', 'multiselect'])
//            || $attribute->code == 'sku'
//        )
//    ) {
//        array_push($trimmed, [
//            'id'      => $attribute->id,
//            'name'    => $attribute->admin_name,
//            'type'    => $attribute->type,
//            'code'    => $attribute->code,
//            'options' => $attribute->options,
//        ]);
//    }
//}
//return $trimmed;
//}
///////////////////////////////////////////// upload image
//public function uploadImages($data, $category, $type = 'image')
// {
//     if (isset($data[$type])) {
//         $request = request();
//         foreach ($data[$type] as $imageId => $image) {
//             $file = $type . '.' . $imageId;
//             $dir = 'category/' . $category->id;
//             if ($request->hasFile($file)) {
//                 if ($category->{$type}) {
//                     Storage::delete($category->{$type});
//                 }
//                 $category->{$type} = $request->file($file)->store($dir);
//                 $category->save();
//             }
//         }
//     } else {
//         if ($category->{$type}) {
//             Storage::delete($category->{$type});
//         }
//         $category->{$type} = null;
//         $category->save();
//     }
// }
//
/////////////////////////////////////////////////////////////////////////////// insert
//DB::table('velocity_meta_data')->delete();
//
//DB::table('core_config')->insert([
//[
//    'code'         => 'general.content.shop.compare_option',
//    'value'        => '1',
//    'channel_code' => 'default',
//    'locale_code'  => 'en',
//    'created_at'   => $now,
//    'updated_at'   => $now,
//],
//
//
//////////////////////////////////////////////////////////////////////////////// count key array
//شمارنده کی ارایه
//$requestKeys = collect($request->all())->keys();
/////
//$data = $request->except('_token') foreach($data as $id => $value){
//echo "My id is ". $id . " And My value is ". $value; }
/////
//"arrayItems" => [ 2 => "12", 7 => "12" ]
//Now you can use foreach ($request->arrayItems as $key => $arrayItem) {...} or how ever it's required
//
//
//////////////////////////////////////////////////////////////////////////////// array json count value
//{"likes":[ {"user_id":1,"time":"12:04pm"},
//{"user_id":2,"time":"02:04pm"},
//{"user_id":67,"time":"11:04pm"},
//{"user_id":1,"time":"12:04pm"} ]}
//here's the php code
//<?php $jsonData = file_get_contents("data.json"); $data = json_decode($jsonData,true); $total = 0; foreach ($data["likes"] as $value) { if($value["user_id"]==1){ $total = $total+1; } } echo $total; ?>
<!--output will be-->
<!--2-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////// form builder any-->
<!--هرچندتا اینپوت باشد اینزرت می شود-->
<!--public function createForm(Request $request)-->
<!--{-->
<!--$name=$request->get('name');-->
<!--$birth=$request->get('birth');-->
<!--$age=$request->get('age');-->
<!--for ($i=0;$i<count($name);$i++){-->
<!--    $data=[-->
<!--      'form_id'=>1,-->
<!--      'name'=>$name,-->
<!--      'birth'=>$birth,-->
<!--      'age'=>$age,-->
<!--    ];-->
<!--    DB::table('Form_Child')->insert($data);-->
<!--}-->
<!--return back();-->
<!---->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////// reserve رزرو-->
<!--//کاربر انتخاب می کند-->
<!--public function appointment(Request $request) {-->
<!--    $appointment = new Appointment();-->
<!---->
<!--    $appointment->name = $request->name;-->
<!--    $appointment->email = $request->email;-->
<!--    $appointment->phone = $request->phone;-->
<!--    $appointment->doctor = $request->doctor;-->
<!--    $appointment->date = $request->date;-->
<!--    $appointment->message = $request->message;-->
<!--    $appointment->status = 'In progress';-->
<!--    if (Auth::id()) {-->
<!--        $appointment->user_id = Auth::user()->id;-->
<!--    }-->
<!-- $appointment->save();-->
<!--    return redirect()->back()->with('message', 'Request sent sucessfully, will get in touch with you soon. ');-->
<!--}-->
<!--//کاربر لیست رزرو خود را در پروفایلش میبیند-->
<!--public function myappointment() {-->
<!--   if(!Auth::id())-->
<!--        return redirect('/');-->
<!--    $appointment = new Appointment();-->
<!--    $userId = Auth::user()->id;-->
<!--    $appointments = $appointment::where('user_id', $userId)->get();-->
<!--    return view('user.myappointment', compact('appointments'));-->
<!--}-->
<!--//کاربر رزرو خود را کنسل میکند-->
<!--public function cancel($id) {-->
<!--    if(!Auth::id())-->
<!--        return redirect('/');-->
<!--    $appointment = Appointment::find($id);-->
<!--    $appointment->delete();-->
<!--    return redirect('myappointment')->with('message', 'Appointment cancelled.');-->
<!--}-->
<!--////////////////////////////////////////////////////// repository bajisto-->
<!--// repository-->
<!--namespace Webkul\User\Repositories;-->
<!--use Webkul\Core\Eloquent\Repository;-->
<!--class RoleRepository extends Repository-->
<!--{-->
<!--public function model(): string-->
<!--{-->
<!--    return 'Webkul\User\Contracts\Role';-->
<!--}-->
<!--}-->
<!--/// helper-->
<?php
//if (! function_exists('bouncer')) {
//    function bouncer()
//    {
//        return app()->make(\Webkul\User\Bouncer::class);
//    }
//}
//?>
<!---->
<!--////////////////////////////////////// sometimes-->
<!--اگر فیلد در ارایه بود اعتبارسنجی شود-->
<!--'email' => 'sometimes|required|email',-->
<!--///////////////////////////////////// address ادرس-->
<!--صادقیه خیابان ولیعصر کوچه  ۱۲ متری ششم -->
<!--///////////////////////////////////// count array json_decode-->
<!--$task_array = json_decode($json_tasks); count($task_array->task);-->
<!---->
<!---->
<!--///////////////////////////////////// webhook-->
<!--وب هوک-->
<!--class SendWebhookController extends Controller-->
<!--{-->
<!-- public function send(Request $request)-->
<!-- {-->
<!--     $url = 'https://webhook.site/2d5153b6-5cb3-4c5a-8d05-7c680b17924d';-->
<!--     $data = [-->
<!--         'status_code' => 200, -->
<!--         'status' => 'success',-->
<!--         'message' => 'webhook send successfully',-->
<!--         'extra_data' => [-->
<!--             'first_name' => 'Harsukh',-->
<!--             'last_name' => 'Makwana',-->
<!--         ],-->
<!--     ];-->
<!--     $json_array = json_encode($data);-->
<!--     $curl = curl_init();-->
<!--     $headers = ['Content-Type: application/json'];-->
<!---->
<!--     curl_setopt($curl, CURLOPT_URL, $url);-->
<!--     curl_setopt($curl, CURLOPT_POST, 1);-->
<!--     curl_setopt($curl, CURLOPT_POSTFIELDS, $json_array);-->
<!--     curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);-->
<!--     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);-->
<!--     curl_setopt($curl, CURLOPT_HEADER, 1);-->
<!--     curl_setopt($curl, CURLOPT_TIMEOUT, 30);-->
<!---->
<!--     $response = curl_exec($curl);-->
<!--     $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);-->
<!---->
<!--     curl_close($curl);-->
<!---->
<!--     if ($http_code >= 200 && $http_code < 300) {-->
<!--         echo "webhook send successfully.";-->
<!--     } else {-->
<!--         echo "webhook failed.";-->
<!--     }-->
<!-- }-->
<!--}-->
<!--// web-->
<!--Route::get('send-test-webhook', [SendWebhookController::class, 'send'])->name('send-test-webhook');-->
<!---->
<!---->
<!--/////////////////////////////////////-->
<!--public function update(Request $request, $id)-->
<!--{-->
<!--$employee = Employee::findOrFail($request->id);-->
<!--$employee->name = $request->name;-->
<!--$employee->last_name = $request->last_name;-->
<!--$employee->job = $request->job;-->
<!--$employee->phone = $request->phone;-->
<!--$employee->address = $request->address;-->
<!--$employee->age = $request->age;-->
<!---->
<!--$employee->save();-->
<!--return $employee;-->
<!--}-->
<!---->
<!--///////////////////////////////////// save to child-->
<!--سیو کردن در فرزند-->
<!--//Main-->
<!--public function items()-->
<!--{-->
<!--return $this->hasMany(Item::class, 'received_payment_id', 'id');-->
<!--}-->
<!--//Item -->
<!--public function main()-->
<!--{-->
<!--return $this->belongsTo(Main::class, 'received_payment_id', 'id');-->
<!--}-->
<!---->
<!--//-->
<!--public function store(Request $request)-->
<!--{-->
<!--$this->validate($request, [-->
<!--    'items' => 'required|array|min:1',-->
<!--    'items.*.item_code' => 'required|alpha_dash|max:255',-->
<!--    'items.*.description' => 'required|max:5000',-->
<!--    'items.*.unit_price' => 'required|numeric|min:0',-->
<!--    'items.*.qty' => 'required|integer|min:1',-->
<!--]);-->
<!---->
<!--$items = [];-->
<!---->
<!--$subTotal = 0;-->
<!--foreach($request->items as $item) {-->
<!--$items[] = new Item($item);-->
<!--$subTotal += $item['unit_price'] * $item['qty'];-->
<!--}-->
<!---->
<!--$invoice = DB::transaction(function() use ($request, $data, $items)-->
<!--{-->
<!--$invoice = new Main($data);-->
<!--$invoice->number = counter('invoice');-->
<!--$invoice->save();-->
<!---->
<!--$invoice->items()->saveMany($items);-->
<!--Counter::where('key', 'invoice')->increment('number');-->
<!--return $invoice;-->
<!--});-->
<!---->
<!--return response()-->
<!--->json([-->
<!--    'saved' => true-->
<!--]);-->
<!---->
<!--//////////////////////////////////// relation hasMany belongsto-->
<!--//User-->
<!--public function tasks() {-->
<!--return $this->hasMany(Task::class);-->
<!--}-->
<!--//Task-->
<!--public function user() {-->
<!--return $this->belongsTo(User::class);-->
<!--}-->
<!--//TaskController-->
<!--public function store(Request $request) {-->
<!--// validatino-->
<!--$this->validate($request, [-->
<!--    'name' => 'required|max:255',-->
<!--]);-->
<!--// create a new task based on user tasks relationship-->
<!--$task = $request->user()->tasks()->create([-->
<!--    'name' => $request->name,-->
<!--]);-->
<!--// return task with user object-->
<!--return response()->json($task->with('user')->find($task->id));-->
<!--}-->
<!--//////////////////////////////////// policy-->
<!--//AuthServiceProvider-->
<!--/* define policy */-->
<!--Gate::define('update-post', function ($user, $post) {-->
<!--return $user->id == $post->user_id;-->
<!--});-->
<!--//-->
<!---->
<!--///////////-->
<!--//AuthServiceProvider-->
<!--protected $policies = [-->
<!-- Post::class => PostPolicy::class-->
<!--];-->
<!---->
<!--//PostPoLicy-->
<!--class PostPolicy-->
<!--{-->
<!--use HandlesAuthorization;-->
<!---->
<!--/**-->
<!--* Determine whether the user can view the post.-->
<!--*-->
<!---->
<!--*/-->
<!--public function view(User $user, Post $post)-->
<!--{-->
<!-- return TRUE;-->
<!--}-->
<!---->
<!--/**-->
<!--* Determine whether the user can create posts.-->
<!---->
<!--*/-->
<!--public function create(User $user)-->
<!--{-->
<!-- return $user->id > 0;-->
<!--}-->
<!---->
<!--/**-->
<!--* Determine whether the user can update the post.-->
<!---->
<!--*/-->
<!--public function update(User $user, Post $post)-->
<!--{-->
<!-- return $user->id == $post->user_id;-->
<!--}-->
<!---->
<!--/**-->
<!--* Determine whether the user can delete the post.-->
<!--*/-->
<!--public function delete(User $user, Post $post)-->
<!--{-->
<!-- return $user->id == $post->user_id;-->
<!--}-->
<!--}-->
<!--//PostController-->
<!--public function update()-->
<!--{-->
<!-- // get current logged in user-->
<!-- $user = Auth::user();-->
<!---->
<!-- // load post-->
<!-- $post = Post::find(1);-->
<!---->
<!-- if ($user->can('update', $post)) {-->
<!--   echo "Current logged in user is allowed to update the Post: {$post->id}";-->
<!-- } else {-->
<!--   echo 'Not Authorized.';-->
<!-- }-->
<!--}-->
<!---->
<!--public function delete()-->
<!--{-->
<!-- // get current logged in user-->
<!-- $user = Auth::user();-->
<!--   -->
<!-- // load post-->
<!-- $post = Post::find(1);-->
<!--   -->
<!-- if ($user->can('delete', $post)) {-->
<!--   echo "Current logged in user is allowed to delete the Post: {$post->id}";-->
<!-- } else {-->
<!--   echo 'Not Authorized.';-->
<!-- }-->
<!--}-->
<!--/////-->
<!--اگر اجازه اپدیت داشت یا ادمین بود-->
<!--if ($user->can('update', $form)||Gate::allows('isAdmin')) {-->
<!---->
<!---->
<!--//////////////////////////////////// array check key request-->
<!--Route::get('',function (){-->
<!--$data=[-->
<!--  'data'=>[-->
<!--      'name'=>'a',-->
<!--      'age'=>'10'-->
<!--  ]-->
<!--] ;-->
<!---->
<!--foreach ($data as $key => $value){-->
<!--  if ($key[1]=='a'){-->
<!--      return 'yes';-->
<!--  }-->
<!--  return 'false';-->
<!--}-->
<!--});  //yes-->
<!--//-->
<!--Route::get('',function (){-->
<!--$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");-->
<!---->
<!--foreach($age as $x => $val) {-->
<!--    echo "$x = $val<br>";-->
<!--}-->
<!---->
<!--});-->
<!--//-->
<!--Route::get('',function (){-->
<!--$data = array(-->
<!--    "name"=>"mohsen",-->
<!--    "age"=>"37",-->
<!--    "file"=>"asd.jpg"-->
<!--);-->
<!---->
<!--foreach($data as $x => $val) {-->
<!--    if ($data["file"]){-->
<!--        return 'yes';-->
<!--    }-->
<!--    return 'false';-->
<!--}-->
<!---->
<!--});-->
<!---->
<!---->
<!--/////////////////////////////////// parseFormData-->
<!--function parseFormData($data, $formEntrie, $request)-->
<!--{-->
<!--$inputArray = array();-->
<!--foreach ($data as $key => $value) {-->
<!--    $formKey = $key;-->
<!--    $key = explode("_fb", $formKey);-->
<!--    $path = "";-->
<!--    //Check if the form entry is a file.-->
<!--    if ($key[1] == "_f") {-->
<!--        $request->hasFile($formKey) ? $path = $request->file($formKey)->store('files/' . $formEntrie) : $path = "";-->
<!--        $inputArray[$key[0]] = $path;-->
<!--    } else-->
<!--        $inputArray[$key[0]] = $value;-->
<!--}-->
<!--return json_encode($inputArray);-->
<!--}-->
<!--//////////////////////////////////// map-->
<!--$users->map(-->
<!--fn($user) => $user->first_name.' '.$user->last_name-->
<!--)-->
<!---->
<!--//////////////////////////////////// createdAt-->
<!--تبدیل تاریخ و ساعت-->
<!--public function getCreatedAtAttribute($value)-->
<!-- {-->
<!--     return Carbon::parse($value)->format('Y-m-d H:i:s');-->
<!-- }-->
<!---->
<!--///////////////////////////////////-->
<!--شرطی در insert-->
<!--$this->company = ! is_null($state_id) ? company($state_id) : $this->user->companies()->first();-->
<!---->
<!--//////////////////////////////////// myisam my inom-->
<!--https://stackoverflow.com/questions/56027785/docker-failed-to-install-curl-version-7-10-5-or-later-is-required-->
<!--//////////////////////////////////// python-->
<!--1-->
<!--میتونی از Symfony Process استفاده کنی-->
<!--میتونی به شکل زیر در لاراول نصبش کنی:-->
<!--composer require symphony/process-->
<!--و با کد زیر باید بتونی کد پایتون رو اجرا کنی (آدرس فایل رو کامل پاس بده):-->
<!---->
<!---->
<!--use Symfony\Component\Process\Process;-->
<!---->
<!---->
<!--use Symfony\Component\Process\Exception\ProcessFailedException;-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--$process = new Process(['python', '/path/to/your_script.py']);-->
<!---->
<!---->
<!--$process->run();-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--// executes after the command finishes-->
<!---->
<!---->
<!--if (!$process->isSuccessful()) {-->
<!---->
<!---->
<!--throw new ProcessFailedException($process);-->
<!---->
<!---->
<!--}-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--echo $process->getOutput();-->
<!---->
<!---->
<!---->
<!--/////////////////////////////////// upload pic-->
<!--public function update(Request $request, $id)-->
<!--{-->
<!--//-->
<!--$request->validate([-->
<!--    'name' => ['required','string', 'max:255'],-->
<!--    'email' => ['required','string', 'email', 'max:255',Rule::unique('users')->ignore($id)],-->
<!--    'avatar' => ['required','mimes:jpeg,bmp,png,PNG,JPG,jpg,JPEG','max:9000'],-->
<!--    'mobile' => ['required','numeric','min:10',Rule::unique('users')->ignore($id)]-->
<!--]);-->
<!---->
<!--$name = null;-->
<!--$newImageName = null;-->
<!---->
<!--//check if file attached-->
<!--if($file = $request->file('avatar')){-->
<!--    $tmp = explode('.', $file->getClientOriginalName());//get client file name-->
<!--    $name = $file->getClientOriginalName();-->
<!--    $newImageName = round(microtime(true)).'.'.end($tmp);-->
<!--    $file->move(storage_path('app\public\profile-pic'), $newImageName);-->
<!--}-->
<!--$user = User::find(Auth::user()->id);-->
<!--$newImage = null;-->
<!--$newImage = $newImageName == null? $user->avatar:$newImageName;-->
<!--$user->update(array_merge($request->all(),['avatar' => $newImage]));-->
<!---->
<!--return redirect()->route('profile.index')->with('success','Profile Updated Successfully!');-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////// password confirmed-->
<!---->
<!--$request->validate([-->
<!--'password' => 'required|confirmed|min:6'-->
<!--]);-->
<!--//-->
<!--<div class="form-group row">-->
<!--<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>-->
<!--<div class="col-md-6">-->
<!--<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->
<!--@error('password')-->
<!--<span class="invalid-feedback" role="alert">-->
<!--<strong>{{ $message }}</strong>-->
<!--        </span>-->
<!--@enderror-->
<!--</div>-->
<!--</div>-->
<!--<div class="form-group row">-->
<!--<label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>-->
<!--<div class="col-md-6">-->
<!--    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">-->
<!--</div>-->
<!--</div>-->
<!---->
<!--//////////////////////////////////-->
<!--Route::group(["prefix" => "{$api_version}"], function() {-->
<!--// register auth routes-->
<!--Route::prefix('auth')-->
<!--    ->group(base_path('routes/api/auth.php'));-->
<!--// register users routes-->
<!--Route::prefix('users')-->
<!--    ->group(base_path('routes/api/users.php'));-->
<!--// register articles routes-->
<!--Route::prefix('articles')-->
<!--    ->group(base_path('routes/api/articles.php'));-->
<!--});-->
<!---->
<!--///////////////////////////////////////////////////////////-->
<!--public function setTransactionResultAttribute($value)-->
<!--{-->
<!--$this->attributes['transaction_result'] = json_encode($value);-->
<!--}-->
<!---->
<!--public function getTransactionResultAttribute()-->
<!--{-->
<!--return json_decode($this->attributes['transaction_result']);-->
<!--}-->
<!--////////////////////////////////////////////////////////////// reference_number-->
<!--'reference_number' => str::random(15),-->
<!--//////////////////////////////////////////////////////////////// collection-->
<!--$array = Model::pluck('score_qty')->toArray();-->
<!--$collection = collect($array);-->
<!--$average = $collection->avg();-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////// shetabit-->
<!--Schema::create('payments', function (Blueprint $table) {-->
<!--$table->id();-->
<!--$table->unsignedBigInteger('user_id')->nullable(false);-->
<!--$table->string('amount')->nullable(false);-->
<!--$table->string('discount_code')->nullable(true);-->
<!--$table->string('gateway')->nullable(false)->default('zarinpal');-->
<!--$table->boolean('payment_status')->nullable(true);-->
<!--$table->string('transaction_id')->nullable(true);-->
<!--$table->string('reference_number')->nullable(true);-->
<!--$table->longText('description')->nullable(true);-->
<!--$table->timestamps();-->
<!--});-->
<!--//-->
<!--"shetabit/payment": "^4.0"-->
<!--//-->
<!--public function user(){-->
<!--return $this->belongsTo(User::class);-->
<!--}-->
<!--//config-->
<!--'merchantId' => '0038d225-f2d7-4b89-a06a-79384d2f3c7d',-->
<!--'callbackUrl' => 'http://shomaedu.ir/payment/gateway/zarinpal/call-back',-->
<!--'description' => 'شبکه ملی آموزش - شما'-->
<!---->
<!--//PaymentStatusDefinition-->
<!--class PaymentStatusDefinition-->
<!--{-->
<!--const PAYMENT_SUCCESS = 1;-->
<!--const PAYMENT_FAILED = 0;-->
<!--const ZARRINPAL_NOT_OK_STATUS = 'NOK';-->
<!--const ZARRINPAL_OK_STATUS = 'OK';-->
<!--}-->
<!---->
<!--use App\Models\Payment as InternalPayment;-->
<!--use App\Models\Payment;-->
<!--//PaymentController-->
<!--private $amount = 1400000;-->
<!--private $discountText = '';-->
<!--private $gateway = 'zarinpal';-->
<!--public function pay(Request $request)-->
<!--{-->
<!--$user = Auth::user();-->
<!--if($request->has('discount') && strlen($request->input('discount')) > 5){-->
<!--    $this->checkDiscountForPayment($request->input('discount'));-->
<!--}-->
<!--ذخیره در دیتابیس-->
<!--$myPayment = new InternalPayment();-->
<!--$myPayment->amount = $this->amount;-->
<!--$myPayment->discount_code = $this->discountText;-->
<!--$myPayment->user_id = $user->id;-->
<!--$myPayment->gateway = $this->gateway;-->
<!--$myPayment->save();-->
<!--return Payment::purchase(-->
<!--    (new Invoice)->amount($this->amount),-->
<!--    function($driver, $transactionId) use ($myPayment){-->
<!--        $myPayment->transaction_id = $transactionId;-->
<!--        $myPayment->save();-->
<!--    }-->
<!--)->pay()->render();-->
<!--}-->
<!--public function zarinpalCallback(Request $request)-->
<!--{-->
<!--$transaction_id = $request->get('Authority');-->
<!--$paymentStatus = $request->get('Status');-->
<!--$payment = InternalPayment::where(['transaction_id' => $transaction_id, 'gateway' => $this->gateway])->first();-->
<!--if(!$payment){-->
<!--    return redirect()->route('get.dashboard_home');-->
<!--}-->
<!--if($paymentStatus == PaymentStatusDefinition::ZARRINPAL_NOT_OK_STATUS){-->
<!--    $payment->payment_status = PaymentStatusDefinition::PAYMENT_FAILED;-->
<!--    $payment->save();-->
<!--    return view('dashboard.payment.result', ['status'=> PaymentStatusDefinition::PAYMENT_FAILED, 'amount' => $payment->amount]);-->
<!--}-->
<!--if(!is_null($payment->payment_status)){-->
<!--    return view('dashboard.payment.result', ['status'=> $payment->payment_status,'amount' => $payment->amount, 'reference_number' => $payment->reference_number ]);-->
<!--}-->
<!--try {-->
<!--    $receipt = Payment::amount(intval($payment->amount))->transactionId($payment->transaction_id)->verify();-->
<!--    $payment->payment_status = PaymentStatusDefinition::PAYMENT_SUCCESS;-->
<!--    $payment->reference_number = $receipt->getReferenceId();-->
<!--    $payment->save();-->
<!--    return view('dashboard.payment.result', ['status'=> $payment->payment_status, 'reference_number' => $payment->reference_number, 'amount' => $payment->amount, ]);-->
<!--} catch (\Exception $exception) {-->
<!--    Log::critical('payment unsuccessful error: . ', ['error' => $exception->getMessage()]);-->
<!--    $payment->payment_status = PaymentStatusDefinition::PAYMENT_FAILED;-->
<!--    $payment->save();-->
<!--    return view('dashboard.payment.result', ['status'=> $payment->payment_status, 'amount' => $payment->amount,]);-->
<!--}-->
<!--}-->
<!--چک کردن تخفیف -->
<!--public function checkDiscount(Request $request)-->
<!--{-->
<!--$discountText = $request->get('discount');-->
<!--$discountObj = DiscountCode::where(['code' => $discountText])->first();-->
<!--if(!$discountObj){-->
<!--    return  JsonResponse::create([-->
<!--        'success'    =>   'Nok'-->
<!--        ]);-->
<!--}-->
<!--return JsonResponse::create([-->
<!--        'success'    =>   'OK',-->
<!--        'value'     =>  $discountObj->value-->
<!--    ]);-->
<!--}-->
<!--//Roote-->
<!--Route::get('/dashboard/payment/invoice', 'PaymentController@invoice')->name('payment-invoice');-->
<!--Route::post('/dashboard/payment/discount-check', 'PaymentController@checkDiscount');-->
<!--Route::post('/payment/do-pay', 'PaymentController@pay')->name('payment.action');-->
<!--Route::get('/payment/gateway/zarinpal/call-back', 'PaymentController@zarinpalCallback');-->
<!--///////////////////////////////////////////////////////////////////  shetabbit-->
<!--/**-->
<!--* put your gatewat merchant key here.-->
<!--* use "zibal" for test-->
<!--*/-->
<!--define("ZIBAL_MERCHANT_KEY","zibal");-->
<!---->
<!---->
<!--define("ZIBAL_CALLBACK_URL","http://yourapiurl.com/callback.php");-->
<!---->
<!--/**-->
<!--* connects to zibal's rest api-->
<!--* @param $path-->
<!--* @param $parameters-->
<!--* @return stdClass-->
<!--*/-->
<!--function postToZibal($path, $parameters)-->
<!--{-->
<!--$url = 'https://gateway.zibal.ir/v1/'.$path;-->
<!--$ch = curl_init();-->
<!--curl_setopt($ch, CURLOPT_URL, $url);-->
<!--curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));-->
<!--curl_setopt($ch, CURLOPT_POST, 1);-->
<!--curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($parameters));-->
<!--curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);-->
<!--$response  = curl_exec($ch);-->
<!--curl_close($ch);-->
<!--return json_decode($response);-->
<!--}-->
<!---->
<!--/**-->
<!--* returns a string message based on result parameter from curl response-->
<!--* @param $code-->
<!--* @return String-->
<!--*/-->
<!--function resultCodes($code)-->
<!--{-->
<!--switch ($code)-->
<!--{-->
<!--    case 100:-->
<!--        return "با موفقیت تایید شد";-->
<!---->
<!--    case 102:-->
<!--        return "merchant یافت نشد";-->
<!---->
<!--    case 103:-->
<!--        return "merchant غیرفعال";-->
<!---->
<!--    case 104:-->
<!--        return "merchant نامعتبر";-->
<!---->
<!--    case 201:-->
<!--        return "قبلا تایید شده";-->
<!---->
<!--    case 105:-->
<!--        return "amount بایستی بزرگتر از 1,000 ریال باشد";-->
<!---->
<!--    case 106:-->
<!--        return "callbackUrl نامعتبر می‌باشد. (شروع با http و یا https)";-->
<!---->
<!--    case 113:-->
<!--        return "amount مبلغ تراکنش از سقف میزان تراکنش بیشتر است.";-->
<!---->
<!--    case 201:-->
<!--        return "قبلا تایید شده";-->
<!---->
<!--    case 202:-->
<!--        return "سفارش پرداخت نشده یا ناموفق بوده است";-->
<!---->
<!--    case 203:-->
<!--        return "trackId نامعتبر می‌باشد";-->
<!---->
<!--    default:-->
<!--        return "وضعیت مشخص شده معتبر نیست";-->
<!--}-->
<!--}-->
<!---->
<!--/**-->
<!--* returns a string message based on status parameter from $_GET-->
<!--* @param $code-->
<!--* @return String-->
<!--*/-->
<!--function statusCodes($code)-->
<!--{-->
<!--switch ($code)-->
<!--{-->
<!--    case -1:-->
<!--        return "در انتظار پردخت";-->
<!---->
<!--    case -2:-->
<!--        return "خطای داخلی";-->
<!---->
<!--    case 1:-->
<!--        return "پرداخت شده - تاییدشده";-->
<!---->
<!--    case 2:-->
<!--        return "پرداخت شده - تاییدنشده";-->
<!---->
<!--    case 3:-->
<!--        return "لغوشده توسط کاربر";-->
<!---->
<!--    case 4:-->
<!--        return "‌شماره کارت نامعتبر می‌باشد";-->
<!---->
<!--    case 5:-->
<!--        return "‌موجودی حساب کافی نمی‌باشد";-->
<!---->
<!--    case 6:-->
<!--        return "رمز واردشده اشتباه می‌باشد";-->
<!---->
<!--    case 7:-->
<!--        return "‌تعداد درخواست‌ها بیش از حد مجاز می‌باشد";-->
<!---->
<!--    case 8:-->
<!--        return "‌تعداد پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد";-->
<!---->
<!--    case 9:-->
<!--        return "مبلغ پرداخت اینترنتی روزانه بیش از حد مجاز می‌باشد";-->
<!---->
<!--    case 10:-->
<!--        return "‌صادرکننده‌ی کارت نامعتبر می‌باشد";-->
<!---->
<!--    case 11:-->
<!--        return "خطای سوییچ";-->
<!---->
<!--    case 12:-->
<!--        return "کارت قابل دسترسی نمی‌باشد";-->
<!---->
<!--    default:-->
<!--        return "وضعیت مشخص شده معتبر نیست";-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////// isNotFilled-->
<!--اگر فیلد پر نکرده بود قبلی بزار-->
<!--'password'   => $request->isNotFilled('password')-->
<!--? $user->password-->
<!--: $request->input('password'),-->
<!---->
<!--////////////////////////////////////////////////////////////////// payment admi-->
<!---->
<!--//todo  ولت   مبلغ وارد شده کاربر به درگاه می رود به زرین کنترلر-->
<!--public function store(WalletRequest $request)-->
<!--{-->
<!--    //validate max amount of money 50000000-->
<!--    $amount = $request->amount;-->
<!--    if ($amount > 500000000) {-->
<!--        return redirect()->back()->with('error', 'حداکثر میزان پول مجاز برای سفارش در درگاه بانک میباشد');-->
<!--    }-->
<!--    return Wallet::pay(-->
<!--        $request->input('amount'),-->
<!--        'شارژ کیف پول دستی از طرف کاربر'-->
<!--    );-->
<!--}-->
<!--//WALLET-->
<!--class Wallet-->
<!--{-->
<!--public static function pay(int $amount, string $description)-->
<!--{-->
<!--//        $pay = Payment::zarinpal()->pay($amount, $description);-->
<!--    $pay = Zarinpal::pay($amount, $description);-->
<!--//        return Payment::zarinpal()->startPay($pay->authority);-->
<!--    return Zarinpal::startPay($pay->authority);-->
<!--}-->
<!--}-->
<!--//attribute-->
<!--class Attributes-->
<!--{-->
<!--public int $code;-->
<!--public string $message;-->
<!--public ?string $authority;-->
<!--public string $feeType;-->
<!--public int $fee;-->
<!--public ?string $cardHash;-->
<!--public ?string $cardPan;-->
<!--public ?int $refId;-->
<!--private bool $successful;-->
<!--//todo استاتوس-->
<!--public function __construct(array $attributes)-->
<!--{-->
<!--    $this->successful = empty($attributes['errors']);-->
<!---->
<!--    if ($this->failed()) {-->
<!--        $errors = $attributes['errors'];-->
<!--        $this->code = $errors['code'];-->
<!--        $this->message = $errors['message'];-->
<!--//            $this->message = $errors['status'];-->
<!---->
<!--        return;-->
<!--    }-->
<!---->
<!--    $data = $attributes['data'];-->
<!---->
<!--    $this->code = $data['code'];-->
<!--    $this->message = $data['message'];-->
<!--//        $this->message = $data['status'];//status-->
<!--    $this->authority = $data['authority'] ?? null;-->
<!--    $this->refId = $data['ref_id'] ?? null;-->
<!--    $this->cardHash = $data['card_hash'] ?? null;-->
<!--    $this->cardPan = $data['card_pan'] ?? null;-->
<!--    $this->feeType = $data['fee_type'];-->
<!--    $this->fee = $data['fee'];-->
<!--}-->
<!---->
<!--public function failed(): bool-->
<!--{-->
<!--    return ! $this->successful();-->
<!--}-->
<!---->
<!--public function successful(): bool-->
<!--{-->
<!--    return true === $this->successful;-->
<!--}-->
<!--//TODO لیست ارور های زرین پال-->
<!--public function getError($code = null)-->
<!--{-->
<!--    return match ($code ?? $this->code) {-->
<!--        -9  => 'خطای اعتبار سنجی',-->
<!--        -10 => 'ای پی و يا مرچنت كد پذيرنده صحيح نيست',-->
<!--        -11 => 'مرچنت کد فعال نیست لطفا با تیم پشتیبانی ما تماس بگیرید',-->
<!--        -12 => 'تلاش بیش از حد در یک بازه زمانی کوتاه.',-->
<!--        -15 => 'ترمینال شما به حالت تعلیق در آمده با تیم پشتیبانی تماس بگیرید',-->
<!--        -16 => 'سطح تاييد پذيرنده پايين تر از سطح نقره اي است.',-->
<!--        100 => 'عملیات موفق',-->
<!--        -30 => 'اجازه دسترسی به تسویه اشتراکی شناور ندارید',-->
<!--        -31 => 'حساب بانکی تسویه را به پنل اضافه کنید مقادیر وارد شده واسه تسهیم درست نیست',-->
<!--        -32 => 'نامشخص',-->
<!--        -33 => 'درصد های وارد شده درست نیست',-->
<!--        -34 => 'مبلغ از کل تراکنش بیشتر است',-->
<!--        -35 => 'تعداد افراد دریافت کننده تسهیم بیش از حد مجاز است',-->
<!--        -40 => 'Invalid extra params, expire_in is not valid.',-->
<!--        -50 => 'مبلغ پرداخت شده با مقدار مبلغ در وریفای متفاوت است',-->
<!--        -51 => 'پرداخت ناموفق',-->
<!--        -52 => 'خطای غیر منتظره با پشتیبانی تماس بگیرید',-->
<!--        -53 => 'اتوریتی برای این مرچنت کد نیست',-->
<!--        -54 => 'اتوریتی نامعتبر است',-->
<!--        101 => 'تراکنش وریفای شده',-->
<!--    };-->
<!--}-->
<!--}-->
<!--//pay-->
<!--class Pay extends Model-->
<!--{-->
<!--use HasFactory;-->
<!---->
<!--//validate-->
<!---->
<!--public function scopeByAuthority(Builder $query, string $authority): Builder-->
<!--{-->
<!--    return $query->where('authority', $authority);-->
<!--}-->
<!--//todo اینجا کنسل-->
<!--public function setCanceled(): bool-->
<!--{-->
<!--    return $this->update(['status' => 'انصراف از پرداخت']);-->
<!--}-->
<!---->
<!--public function successful(): bool-->
<!--{-->
<!--    return in_array((int)$this->code, [-->
<!--        100,-->
<!--        101,-->
<!--    ]);-->
<!--}-->
<!---->
<!--public function successfulOnce(): bool-->
<!--{-->
<!--    return 100 === $this->code;-->
<!--}-->
<!---->
<!--public function displayAmount()-->
<!--{-->
<!--    return price($this->amount);-->
<!--}-->
<!---->
<!--public function failed(): bool-->
<!--{-->
<!--    return ! $this->successful();-->
<!--}-->
<!---->
<!--public function amountVAT()-->
<!--{-->
<!--    return $this->amount * 1.09;-->
<!--}-->
<!---->
<!--public function displayable_amount()-->
<!--{-->
<!--    $amount = number_format($this->amount);-->
<!---->
<!--    return "$amount ریال";-->
<!--}-->
<!---->
<!--public function verify()-->
<!--{-->
<!--//        $pay = Payment::zarinpal()->verify(-->
<!--    $pay = Zarinpal::verify(-->
<!--        $this->amount,-->
<!--        $this->authority-->
<!--    );-->
<!---->
<!--    $this->refresh();-->
<!---->
<!--    return $pay;-->
<!--}-->
<!---->
<!--public function campaigns(): BelongsToMany-->
<!--{-->
<!--    return $this->belongsToMany(Campaign::class, 'campaign_pays_pivot', 'pay_id', 'campaign_id');-->
<!--}-->
<!--}-->
<!--//verifyController-->
<!--class VerifyController extends Controller-->
<!--{-->
<!--public function __invoke(Request $request, int $id)-->
<!--{-->
<!--    /** @var Factor $factor */-->
<!--    $factor = Factor::owned()->findOrFail($id);-->
<!---->
<!--    if ($request->isNotFilled('Authority')) {-->
<!--        return back();-->
<!--    }-->
<!---->
<!--    $pay = Pay::byAuthority($request->input('Authority'))->firstOrFail();-->
<!--    $pay->verify();-->
<!---->
<!--    if ($pay->successful()) {-->
<!--        $pay->update(['status' => 'پرداخت موفق']);-->
<!--        $factor->setPaid();-->
<!--    }-->
<!---->
<!--    return view('payment.panel.verify.show', [-->
<!--        'pay'    => $pay,-->
<!--        'factor' => $factor,-->
<!--    ]);-->
<!--}-->
<!--}-->
<!--//factor-->
<!--public function setPaid(): static-->
<!--{-->
<!--$this->update(['status' => FactorStatus::PAID->value]);-->
<!---->
<!--return $this;-->
<!--}-->
<!--//factorstatus-->
<!--enum FactorStatus: string-->
<!--{-->
<!--case INIT = 'init';-->
<!--case PAID = 'paid';-->
<!---->
<!--public function fa(): string-->
<!--{-->
<!--    return match ($this) {-->
<!--        self::INIT => 'پرداخت نشده',-->
<!--        self::PAID => 'پرداخت شده',-->
<!--    };-->
<!--}-->
<!---->
<!--public function paid(): bool-->
<!--{-->
<!--    return 'paid' === $this->value;-->
<!--}-->
<!--//User-->
<!--public function pays(): HasMany-->
<!--{-->
<!--return $this->hasMany(Pay::class, 'user_id');-->
<!--}-->
<!--public function setBalance(int $amount): bool-->
<!--{-->
<!--Log::info('setBalance', [$amount]);-->
<!--if (0 === $amount) {-->
<!--    return false;-->
<!--}-->
<!---->
<!--if ($amount < 0) {-->
<!--    $this->forceWithdraw(abs($amount));-->
<!--}-->
<!---->
<!--if ($amount > 0) {-->
<!--    $this->deposit($amount);-->
<!--}-->
<!---->
<!--return true;-->
<!--}-->
<!---->
<!--//todo پرداخت کمپین قیمت از حساب کاربر کم شود و وارد درگاه شود-->
<!--public function checkout()-->
<!--{-->
<!--$pay = \App\Services\Payment\Payment::zarinpal()->pay(-->
<!--    $this->invoice()->getTotal() - user()->balance,-->
<!--    "پرداخت کمپین - $this->title"-->
<!--);-->
<!---->
<!--$pay->campaigns()->attach([$this->id]);-->
<!---->
<!--return \App\Services\Payment\Payment::zarinpal()->startPay($pay->authority);-->
<!--}-->
<!--////////////////////////////////////////////////////////////////// scope date-->
<!--public function scopeArrived(Builder $query)-->
<!--{-->
<!--$startAt = now()->startOfDay()->format('Y-m-d H:i:s');-->
<!--$startTime = now()->format('H:i');-->
<!--return $query->where('starts_at', '<=', $startAt) ->where('start_time', '<=',        $startTime);}-->
<!--///////////////////////////////////////////////////////////////// date cast-->
<!--protected $casts = [-->
<!--'starts_at'  => 'date',-->
<!--'start_time' => 'datetime:H:i',-->
<!--];-->
<!--public function getStartsAtFaAttribute()-->
<!--{-->
<!--return jdate($this->attributes['starts_at'])->format('Y-m-d');-->
<!--}-->
<!---->
<!--public function getStartsAtFaTimeAttribute()-->
<!--{-->
<!--return jdate($this->attributes['start_time'])->format('H:i');-->
<!--}-->
<!---->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////// multiple file-->
<!--class Product extends Model-->
<!--{-->
<!--use HasFactory;-->
<!--protected $guarded =[];-->
<!--public function images(){-->
<!--return $this->hasMany(Image::class);-->
<!--}-->
<!--}-->
<!--//ProductController-->
<!--public function store(Request $req){-->
<!--$data = $req->validate([-->
<!--'title'=>'required',-->
<!--'price'=>'required'-->
<!--]);-->
<!--$new_product = Product::create($data);-->
<!--if($req->has('images')){-->
<!--foreach($req->file('images')as $image){-->
<!--$imageName = $data['title'].'-image-'.time().rand(1,1000).'.'.$image->extension();-->
<!--$image->move(public_path('product_images'),$imageName);-->
<!--Image::create([-->
<!--'product_id'=>$new_product->id,-->
<!--'image'=>$imageName-->
<!--]);-->
<!--}-->
<!--}-->
<!--return back()->with('success','Added');-->
<!--}-->
<!--//////////////////////////////////////////////////////////////// multiple file-->
<!--$table->string(‘filenames’);-->
<!--//File-->
<!--Public function setFileNamesAttribute($value){-->
<!--$this->attributes[‘filenames’]=json_encode($value);-->
<!--}-->
<!--//Controller-->
<!--$files=[];-->
<!--if($request->hasFile(‘filenames)){-->
<!--foreach($request->file(‘filenames’) as $file){-->
<!--$name=time().rand(1,100).’.’.$file->extention();-->
<!--$file->move(public_path(‘files’),$name);-->
<!--// //Store in Storage Folder-->
<!-- // $request->image->storeAs('files',$name);-->
<!-- // // Store in S3-->
<!-- // $request->image->storeAs('files', $name, 's3');-->
<!--$files[]=$name;-->
<!--}-->
<!--}-->
<!--$file=new File;-->
<!--$file->filenames=$files;-->
<!--$file->save();-->
<!--/////////////////////////////////////////////////////////////// addMinutes-->
<!--اضافه کردن دقیقه-->
<!--now()->addMinutes(10)-->
<!--//////////////////////////////////////////////////////////////// collect flatten-->
<!--چند تا ارایه داریم میخوایم یکیشون کنیم-->
<!--public function __invoke(Request $request)-->
<!--{-->
<!--$request->validate(['targets_id' => 'required|array']);-->
<!---->
<!--$users = collect($request->input('targets_id'))->map(function ($id) {-->
<!--    return TelegramUser::term('peer_id', $id)->maxsize()->source('id')->collect()->pluck('id')->toArray();-->
<!--})->flatten()->toArray();-->
<!---->
<!--$mobiles = $this->inquiry->mobiles($users, 'telegram');-->
<!---->
<!--return apiResponse()->ok($mobiles);-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////// not found id-->
<!--وجود ندارد -->
<!--$check=Room::query()->find($id);-->
<!--if (is_null($check)) {-->
<!--return response()->json(['message' => "not true"], Response::HTTP_NOT_FOUND);-->
<!--}-->
<!--////////////////////////////////////////////////////////////////// json-->
<!--$string = ' { "area": [ { "area": "kothrud" }, { "area": "katraj" } ] } '; $area = json_decode($string, true); foreach($area['area'] as $i => $v) { echo $v['area'].'<br/>'; }-->
<!--Output:-->
<!--kothrud katraj-->
<!---->
<!--////////////////////////////////////////////////////////////////// ?-->
<!--{{local}}api/register?mobile_number=09034325329&password=123456789-->
<!--//////////////////////////////////////////////////////////////// total calculate-->
<!--class CalculateTotalPrice-->
<!--{-->
<!-- public static function TotalPrice( $ticket_price,$drinks_price, $snacks_price,  $fast_food_price,$drinks_quantity, -->
<!--     $snacks_quantity,-->
<!--     $fast_food_quanity-->
<!-- ): float|int-->
<!-- {-->
<!--     return $ticket_price + ($drinks_price * $drinks_quantity) + ($snacks_price * $snacks_quantity) +-->
<!--         ($fast_food_price * $fast_food_quanity);-->
<!-- }-->
<!--////////////////////////////////////////////////////////////// multiple upload-->
<!--if ($files = $request->file('image')) {-->
<!--         foreach ($files as $file) {-->
<!--             $image_name = time();-->
<!--             $ext = strtolower($file->getClientOriginalExtension());-->
<!--             $image_full_name = $image_name . '.' . $ext;-->
<!--             $upload_path =public_path('public/image');-->
<!--             $image_url = $upload_path . $image_full_name;-->
<!--             $file->move($upload_path, $image_full_name);-->
<!--             $data['image'] =implode('|',$image_url) ;-->
<!--         }-->
<!--     }-->
<!--/////////////////////////////////////////////////////////////// policy-->
<!--php artisan make:policy PostPolicy --model=Post-->
<!--//AuthServiceProvider-->
<!--class AuthServiceProvider extends ServiceProvider-->
<!--{-->
<!-- protected $policies = [-->
<!--     Post::class => PostPolicy::class,-->
<!-- ];-->
<!--//PostPolicy-->
<!--class PostPolicy-->
<!--{-->
<!-- public function update(User $user, Post $post)-->
<!-- {-->
<!--     return $user->id === $post->user_id;-->
<!-- }-->
<!--}-->
<!--//controller-->
<!--public function update(Request $request, Post $post)-->
<!--{-->
<!--$this->authorize('update', $post);-->
<!---->
<!--// The current user can update the blog post...-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////////// sms-->
<!---->
<!--namespace App\Services\SMS;-->
<!---->
<!---->
<!--class SmsClient-->
<!--{-->
<!---->
<!-- private $username = "09127336255";-->
<!-- private $password = "ramz5518";-->
<!---->
<!-- public function sendMessage( $number, $message)-->
<!-- {-->
<!---->
<!---->
<!--     $postdata = http_build_query(-->
<!--         array(-->
<!--             'username'     => $this->username,-->
<!--             'password'     => $this->password,-->
<!--             'message'       =>  $message,-->
<!--             'numbers'      => $number,-->
<!--             'senderNumber' => "blacklist",-->
<!--             'sendType'     => "1",-->
<!--         )-->
<!--     );-->
<!---->
<!--     $opts = array('http' =>-->
<!--                       array(-->
<!--                           'method'  => 'POST',-->
<!--                           'header'  => 'Content-Type: application/x-www-form-urlencoded',-->
<!--                           'content' => $postdata-->
<!--                       )-->
<!--     );-->
<!---->
<!--     $context = stream_context_create($opts);-->
<!---->
<!--     $result = file_get_contents('https://niksms.com/fa/PublicApi/PtpSms', false, $context);-->
<!---->
<!-- }-->
<!--}-->
<!--////////////////////////////////////////////////////////////// format date -->
<!--     $withdraw->sent_for_bank_time = date('Y-m-d H:i:s');-->
<!--/////////////////////////////////////////////////////////////// tax-->
<!--         $invoice->tax_percent = env('VAT')+0;-->
<!--////////////////////////////////////////////////////////////// check date discount-->
<!--چک کردن تاریخ تخفیف اگر انقضا تاریخ بیشتر از تاریخ فعلی بود و تاریخ شروع کمتر از تاریخ فعلی بود-->
<!--     $discount = Discount-->
<!--           ::where('code', $request->discount_code)-->
<!--           ->where('expire_time', '>=', date('Y-m-d H:i:s'))-->
<!--            ->where('start_time', '<=', date('Y-m-d H:i:s'))-->
<!--            ->first();-->
<!--////            dd($discount);-->
<!---->
<!--////////////////////////////////////////////////////////////// seeder-->
<!--Php artisan make:seeder AdminSeeder-->
<!--$user=[-->
<!--[-->
<!--‘name’=>’mohsen’,-->
<!--],-->
<!--[-->
<!--‘name’=>’mohsen’,-->
<!--],-->
<!--];-->
<!--User::insert($user);-->
<!--/////////////////////////////////////////////////////////////// otp -->
<!--ارسال sms تایید به کاربر -->
<!--$table->string('mobile_no')->nullable()->after('username');-->
<!--Schema::create('verification_codes', function (Blueprint $table) {-->
<!--$table->id();-->
<!--$table->bigInteger('user_id');-->
<!--$table->string('otp');-->
<!--$table->timestamp('expire_at')->nullable();-->
<!--$table->timestamps();-->
<!--});-->
<!---->
<!---->
<!--//-->
<!--class AuthOtpController extends Controller-->
<!--{-->
<!--// Return View of OTP Login Page-->
<!--public function login()-->
<!--{-->
<!--    return view('auth.otp-login');-->
<!--}-->
<!---->
<!--// Generate OTP-->
<!--public function generate(Request $request)-->
<!--{-->
<!--    # Validate Data-->
<!--    $request->validate([-->
<!--        'mobile_no' => 'required|exists:users,mobile_no'-->
<!--    ]);-->
<!---->
<!--    # Generate An OTP-->
<!--    $verificationCode = $this->generateOtp($request->mobile_no);-->
<!---->
<!--    $message = "Your OTP To Login is - ".$verificationCode->otp;-->
<!--    # Return With OTP-->
<!---->
<!--    return redirect()->route('otp.verification', ['user_id' => $verificationCode->user_id])->with('success',  $message);-->
<!--}-->
<!---->
<!--public function generateOtp($mobile_no)-->
<!--{-->
<!--    $user = User::where('mobile_no', $mobile_no)->first();-->
<!---->
<!--    # User Does not Have Any Existing OTP-->
<!--    $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();-->
<!---->
<!--    $now = Carbon::now();-->
<!---->
<!--    if($verificationCode && $now->isBefore($verificationCode->expire_at)){-->
<!--        return $verificationCode;-->
<!--    }-->
<!---->
<!--    // Create a New OTP-->
<!--    return VerificationCode::create([-->
<!--        'user_id' => $user->id,-->
<!--        'otp' => rand(123456, 999999),-->
<!--        'expire_at' => Carbon::now()->addMinutes(10)-->
<!--    ]);-->
<!--}-->
<!---->
<!--public function verification($user_id)-->
<!--{-->
<!--    return view('auth.otp-verification')->with([-->
<!--        'user_id' => $user_id-->
<!--    ]);-->
<!--}-->
<!---->
<!--public function loginWithOtp(Request $request)-->
<!--{-->
<!--    #Validation-->
<!--    $request->validate([-->
<!--        'user_id' => 'required|exists:users,id',-->
<!--        'otp' => 'required'-->
<!--    ]);-->
<!---->
<!--    #Validation Logic-->
<!--    $verificationCode   = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();-->
<!---->
<!--    $now = Carbon::now();-->
<!--    if (!$verificationCode) {-->
<!--        return redirect()->back()->with('error', 'Your OTP is not correct');-->
<!--    }elseif($verificationCode && $now->isAfter($verificationCode->expire_at)){-->
<!--        return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');-->
<!--    }-->
<!---->
<!--    $user = User::whereId($request->user_id)->first();-->
<!---->
<!--    if($user){-->
<!--        // Expire The OTP-->
<!--        $verificationCode->update([-->
<!--            'expire_at' => Carbon::now()-->
<!--        ]);-->
<!---->
<!--        Auth::login($user);-->
<!---->
<!--        return redirect('/home');-->
<!--    }-->
<!---->
<!--    return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');-->
<!--}-->
<!---->
<!--/////////////////////////////////////////////////////////////// password-->
<!--   $request->validate([-->
<!--        'name' => 'required|string|max:255',-->
<!--        'email' => 'nullable|string|email|max:255|unique:users',-->
<!--        'mobile_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',-->
<!--        'password' => 'required|string|min:6',-->
<!--    ]);-->
<!--//        dd($request);-->
<!---->
<!--    $user = User::query()->create($request->all());-->
<!--//model-->
<!--public function setPasswordAttribute($value){-->
<!-- $this->attributes['password'] = bcrypt($value);-->
<!--}-->
<!--/////////////////////////////////////////////////////////////// ids spead operator-->
<!--تعدادی ارایه ارسال شود بعد بتوان حذف کرد …-->
<!--public function massDestroy(MassDestroyEventRequest $request)-->
<!-- {-->
<!--     Event::whereIn('id', request('ids'))->delete();-->
<!---->
<!--     return response(null, Response::HTTP_NO_CONTENT);-->
<!---->
<!-- }-->
<!--//////////////////////////////////////////////////////////// -->
<!--اضافه کردن دقیقه-->
<!--$horaCheck_in = 14;-->
<!--$horaCheck_out = 12;-->
<!--$fechaentrada = Carbon::parse($request->txtFecha)->addHours($horaCheck_in)->toDateTimeString();-->
<!--$fechaSalida = Carbon::parse($request->txtFechaSalida)->addHours($horaCheck_out)->toDateTimeString();-->
<!---->
<!--///////////////////////////////////////////////////////////////-->
<!---->
<!--/////////////////////////////////////////////////////////////// builder-->
<!--{{builder()->key('contact_phone')}}</p>-->
<!---->
<!--@extends(render_view("layouts.master"))-->
<!---->
<!--// layouts-->
<!--@include(render_view("layouts.header"))-->
<!--@yield('content')-->
<!--@include(render_view("layouts.footer"))-->
<!---->
<!--// asset route-->
<!--<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">-->
<!---->
<!--<li><a href="{{route('contact-us')}}" class="font-14 font-bold">Contact us</a></li>-->
<!---->
<!--//-->
<!--<span class="font-bold" onclick="window.open('{{route('cart')}}')">cart</span>-->
<!--{{builder()->cart()->get()->count()>0?"(".builder()->cart()->get()->count().")":""}}-->
<!--//-->
<!--@php($categories = builder()->categories()->all())-->
<!---->
<!--@foreach(array_chunk($categories,2) as $category_chunk)-->
<!---->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////// redis-->
<!--QUEUE_CONNECTION=redis-->
<!--REDIS_HOST=redis-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////// check parameter property public-->
<!--چک کردن وجود ارگومان-->
<!--public $INIT = 'init';-->
<!--public $ COMPLETE = 'complate';-->
<!--public function updateStatus($order_id, $status)-->
<!--{-->
<!--if( ! ($status == $this->INIT || $status == $this->COMPLETE )-->
<!--{-->
<!--return false;-->
<!--}-->
<!--if(!$order)-->
<!--{-->
<!--return false;-->
<!--}-->
<!--}-->
<!--///-->
<!--if(! $item)-->
<!--{-->
<!--return null;-->
<!--}-->
<!--///////////////////////////////////////////////////////////////// date-->
<!--$table->dateTime('completed_at')->nullable();-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////// get data by id-->
<!--زمانیکه دیتا گرفتیم می توانیم تک تک فیلدهای اونو بگیریم-->
<!--public function total($order_id)-->
<!--{-->
<!--$items = OrderItem::where('order_id', $order_id)->get();-->
<!--$total = 0;-->
<!--foreach($items as $item)-->
<!--{-->
<!--$total += $item->count * $item->price;-->
<!--}-->
<!---->
<!--return $total;-->
<!--}-->
<!--///////////////////////////////////////////////////////////////// method in other class-->
<!--استفاده از متد در کلاس دی\ر-->
<!--//Controller-->
<!--public static function getAllCategory()-->
<!--{-->
<!--$category = new Category();-->
<!--$menu = $category->getAllParentWithChild();-->
<!--return $menu;-->
<!--}-->
<!--//Category-->
<!--public static function getAllParentWithChild(){-->
<!--return Category::with('child_cat')->where('is_parent',1)->where('status','active')->orderBy('title','ASC')->get();-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////////////////// report-->
<!--گزارش-->
<!--public function report($orderNumber)-->
<!--{-->
<!---->
<!--$data = Order::query()->whereIn('order_number', ...$orderNumber);-->
<!--$daily = $data->where('created_at', '>=', Carbon::now()->subDay())->count();-->
<!--$monthly = $data->where('created_at', '>=', Carbon::now()->subMonth())->count();-->
<!--$yearly = $data->where('created_at', '>=', Carbon::now()->subYear())->count();-->
<!--return response()->json([$daily, $monthly, $yearly], Response::HTTP_OK);-->
<!---->
<!--}-->
<!--///-->
<!--گزارش هزینه در هر سال-->
<!--public function incomeChart(Request $request){-->
<!--$year=\Carbon\Carbon::now()->year;-->
<!--// dd($year);-->
<!--$items=Order::with(['cart_info'])->whereYear('created_at',$year)->where('status','delivered')->get()-->
<!--->groupBy(function($d){-->
<!--return \Carbon\Carbon::parse($d->created_at)->format('m');-->
<!--});-->
<!--// dd($items);-->
<!--$result=[];-->
<!--foreach($items as $month=>$item_collections){-->
<!--foreach($item_collections as $item){-->
<!--$amount=$item->cart_info->sum('amount');-->
<!--// dd($amount);-->
<!--$m=intval($month);-->
<!--// return $m;-->
<!--isset($result[$m]) ? $result[$m] += $amount :$result[$m]=$amount;-->
<!--}-->
<!--}-->
<!--$data=[];-->
<!--for($i=1; $i <=12; $i++){-->
<!--$monthName=date('F', mktime(0,0,0,$i,1));-->
<!--$data[$monthName] = (!empty($result[$i]))? number_format((float)($result[$i]), 2, '.', '') : 0.0;-->
<!--}-->
<!--return $data;-->
<!---->
<!---->
<!--///گزارش قیمت تمام اوردهای با استاتوس خرید شده-->
<!--public static function earningPerMonth()-->
<!--{-->
<!--$month_data = Order::where('status', 'delivered')->get();-->
<!--// return $month_data;-->
<!--$price = 0;-->
<!--foreach ($month_data as $data) {-->
<!--$price = $data->cart_info->sum('price');-->
<!--}-->
<!--return number_format((float)($price), 2, '.', '');-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////// stock parent to child to chaild-->
<!--رفتن به فرزند فرزند-->
<!--به ازای هر تعداد خرید کاربر از موجودی انبار کم شود-->
<!--//Order-->
<!--public function cart(){-->
<!--return $this->hasMany(Cart::class);-->
<!--}-->
<!--//Cart-->
<!--protected $fillable=['user_id','product_id','order_id','quantity','amount','price','status'];-->
<!--public function product()-->
<!--{-->
<!--return $this->belongsTo(Product::class, 'product_id');-->
<!--}-->
<!--//OrderController-->
<!--$order=Order::find($id);-->
<!--if($request->status=='delivered'){-->
<!---->
<!--foreach($order->cart as $cart){-->
<!---->
<!--$product=$cart->product;-->
<!---->
<!--$product->stock -=$cart->quantity; به ازای هر تعداد یکی از انبار کم کن-->
<!---->
<!--$product->save();-->
<!--}-->
<!--}-->
<!--/////////////////////////////////////////////////////////////////// session foreach-->
<!--cache redis session foreach-->
<!--نحوه گرفتن دیتا از سشن-->
<!--$total_prod=0;-->
<!--if(session('cart')){-->
<!--foreach(session('cart') as $cart_items){-->
<!--$total_prod+=$cart_items['quantity'];تعداد را از سشن بگیر اضافه کن-->
<!--}-->
<!--}-->
<!--//////////////////////////////////////////////////////////////// card-->
<!--$cart = new Cart;-->
<!--$cart->user_id = auth()->user()->id;-->
<!--$cart->product_id = $product->id;-->
<!--$cart->price = ($product->price - ($product->price * $product->discount) / 100);-->
<!--$cart->quantity = $request->quant[1];-->
<!--$cart->amount = ($product->price * $request->quant[1]);-->
<!--if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return back()->with('error', 'Stock not sufficient!.');-->
<!--// return $cart;-->
<!--$cart->save();-->
<!---->
<!--public static function totalCartPrice($user_id = '')-->
<!--{-->
<!--if (Auth::check()) {-->
<!--    if ($user_id == "") $user_id = auth()->user()->id;-->
<!--    return Cart::where('user_id', $user_id)->where('order_id', null)->sum('amount');-->
<!--} else {-->
<!--    return 0;-->
<!--}-->
<!--}-->
<!--public static function cartCount($user_id = '')-->
<!--{-->
<!---->
<!--if (Auth::check()) {-->
<!--    if ($user_id == "") $user_id = auth()->user()->id;-->
<!--    return Cart::where('user_id', $user_id)->where('order_id', null)->sum('quantity');-->
<!--} else {-->
<!--    return 0;-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////////// Notification-->
<!--ارسال به نوتیفیکیشن دیتابیس برودکست ایمیل-->
<!--//Controller-->
<!--$users=User::where('role','admin')->first();-->
<!--$order=new Order();-->
<!--$details=[-->
<!--'title'=>'New order created',-->
<!--'actionURL'=>route('order.show',$order->id),-->
<!--'fas'=>'fa-file-alt'-->
<!--];-->
<!--Notification::send($users, new StatusNotification($details));-->
<!---->
<!--// StatusNotification.php-->
<!--private $details;-->
<!---->
<!--public function __construct($details)-->
<!--{-->
<!--$this->details=$details;-->
<!--}-->
<!--public function via($notifiable)-->
<!--{-->
<!--return ['database','broadcast'];-->
<!--}-->
<!--public function toMail($notifiable)-->
<!--{-->
<!--return (new MailMessage)-->
<!--->subject('Status Notification')-->
<!--->from(env('MAIL_USERNAME','test@gmail.com'),'E-shop')-->
<!--->line($this->details['title'])-->
<!--->action('View Order', $this->details['actionURL'])-->
<!--->line('Thank you!');-->
<!--}-->
<!--public function toArray($notifiable)-->
<!--{-->
<!--return [-->
<!--'title'=>$this->details['title'],-->
<!--'actionURL'=>$this->details['actionURL'],-->
<!--'fas'=>$this->details['fas']-->
<!--];-->
<!--}-->
<!--public function toBroadcast($notifiable)-->
<!--{-->
<!--return new BroadcastMessage([-->
<!--'title' => $this->details['title'],-->
<!--'actionURL' => $this->details['actionURL'],-->
<!--'url' => route('admin.notification', $this->id),-->
<!--'fas' => $this->details['fas'],-->
<!--'time' => date('F d, Y h:i A')-->
<!--]);-->
<!--}-->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////// date submount addmount-->
<!--$dt = Carbon::now();-->
<!---->
<!--var_dump($dt->toDateTimeString() == $dt);          // bool(true) => uses     __toString()-->
<!--echo $dt->toDateString();                          // 1975-12-25-->
<!--echo $dt->toFormattedDateString();                 // Dec 25, 1975-->
<!--echo $dt->toTimeString();                          // 14:15:16-->
<!--echo $dt->toDateTimeString();                      // 1975-12-25 14:15:16-->
<!--echo $dt->toDayDateTimeString();                   // Thu, Dec 25, 1975 2:15 PM-->
<!--//-->
<!--return Post::all()->groupBy(function($post) {-->
<!--$post->created_at->format('F');-->
<!--});-->
<!--همچنین از کربن هم میشه استفاده کرد:-->
<!---->
<!--Order::where('created_at', '>=', Carbon::now()->subMonth())->get();-->
<!---->
<!--//پنج ماه قبل-->
<!--public function index()-->
<!-- {-->
<!--     $currentDateTime = Carbon::now();-->
<!--     $newDateTime = Carbon::now()->subMonths(5);-->
<!--     print_r($currentDateTime);-->
<!--     print_r($newDateTime);-->
<!-- }-->
<!--//یک ماه بعد-->
<!--public function index()-->
<!-- {-->
<!--     $currentDateTime = Carbon::now();-->
<!--     $newDateTime = Carbon::now()->addMonth();-->
<!--     print_r($newDateTime);//    [date] => 2020-12-05 04:29:35.435474-->
<!--}-->
<!--//-->
<!--$to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2015-5-5 3:30:34');-->
<!--$from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2016-6-6 9:30:34');-->
<!--$diff_in_months = $to->diffInMonths($from);-->
<!--print_r($diff_in_months); // Output: 1-->
<!---->
<!--////////////////////////////////////////////////////////////////// incom product-->
<!--گزارش خرید محصول به تفکیک روز ماه و سال-->
<!---->
<!--https://stackoverflow.com/questions/63565089/making-report-in-laravel-by-day-month-year-->
<!--https://stackoverflow.com/questions/40529355/laravel-eloquent-group-by-month-year-->
<!--https://www.tutsmake.com/laravel-get-current-date-week-month-wise-year-data/-->
<!--##for grouping you can use it like these-->
<!---->
<!--public function day(){-->
<!--$products= OrderProduct::select(-->
<!--             DB::raw('DAY(created_at) as day'),DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('day','product_id')->get();-->
<!--}-->
<!--public function month(){-->
<!--$products= OrderProduct::select(-->
<!--             DB::raw('MONTHNAME(created_at) as month'),-->
<!--             DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('month','product_id')->get();-->
<!--}-->
<!--public function year(){-->
<!--$products= OrderProduct::select(-->
<!--             DB::raw('YEAR(created_at) as year'),-->
<!--            DB::raw('sum(line_total) as total_line') , 'product_id','qty','line_total','created_at')->groupBy('year','product_id')->get();-->
<!--}-->
<!--//-->
<!--$res= ModelName::where('someColumn','test')-->
<!--   ->get()-->
<!--   ->groupBy(function($val) {-->
<!--   return Carbon::parse($val->created_at)->format('Y');-->
<!--});-->
<!--//-->
<!--format('M-Y')-->
<!--//-->
<!--User::whereMonth('created_at', date('m'))-->
<!--->whereYear('created_at', date('Y'))-->
<!--->get(['name','created_at']);-->
<!--/////////////////////////////////////////////////////////////////// copon-->
<!---->
<!---->
<!--class CouponsController extends Controller-->
<!--{-->
<!--public function store(Request $request)-->
<!--{-->
<!--$coupon = Coupon::where('code', $request->coupon_code)->first();-->
<!---->
<!--if (!$coupon) {-->
<!--return back()->withErrors('Invalid coupon code. Please try again.');-->
<!--}-->
<!---->
<!--dispatch_now(new UpdateCoupon($coupon));-->
<!---->
<!--return back()->with('success_message', 'Coupon has been applied!');-->
<!--}-->
<!---->
<!--public function destroy()-->
<!--{-->
<!--session()->forget('coupon');-->
<!---->
<!--return back()->with('success_message', 'Coupon has been removed.');-->
<!--}-->
<!---->
<!--///-->
<!--public function up()-->
<!--{-->
<!--Schema::create('coupons', function (Blueprint $table) {-->
<!--$table->id();-->
<!--$table->string('code')->unique();-->
<!--$table->enum('type',['fixed','percent'])->default('fixed');-->
<!--$table->decimal('value',20,2);-->
<!--$table->enum('status',['active','inactive'])->default('inactive');-->
<!--$table->timestamps();-->
<!--});-->
<!--}-->
<!---->
<!--public function store(Request $request)-->
<!--{-->
<!--// return $request->all();-->
<!--$this->validate($request,[-->
<!--'code'=>'string|required',-->
<!--'type'=>'required|in:fixed,percent',-->
<!--'value'=>'required|numeric',-->
<!--'status'=>'required|in:active,inactive',-->
<!--'Tariff' => 'boolean',-->
<!--'update-date' => ['nullable','date'],-->
<!--'order_id' => ['required', 'exists:orders,id'],-->
<!--'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',-->
<!---->
<!---->
<!--]);-->
<!--$data=$request->all();-->
<!--$status=Coupon::create($data);-->
<!--if($status){-->
<!--request()->session()->flash('success','Coupon Successfully added');-->
<!--}-->
<!--else{-->
<!--request()->session()->flash('error','Please try again!!');-->
<!--}-->
<!--return redirect()->route('coupon.index');-->
<!--}-->
<!--public function update(Request $request, $id)-->
<!--{-->
<!--$coupon=Coupon::find($id);-->
<!--$this->validate($request,[-->
<!--'code'=>'string|required',-->
<!--'type'=>'required|in:fixed,percent',-->
<!--'value'=>'required|numeric',-->
<!--'status'=>'required|in:active,inactive'-->
<!--]);-->
<!--$data=$request->all();-->
<!---->
<!--$status=$coupon->fill($data)->save();-->
<!--if($status){-->
<!--request()->session()->flash('success','Coupon Successfully updated');-->
<!--}-->
<!--else{-->
<!--request()->session()->flash('error','Please try again!!');-->
<!--}-->
<!--return redirect()->route('coupon.index');-->
<!---->
<!--}-->
<!--public function couponStore(Request $request){-->
<!---->
<!--$coupon=Coupon::where('code',$request->code)->first();-->
<!---->
<!--if(!$coupon){-->
<!--request()->session()->flash('error','Invalid coupon code, Please try again');-->
<!--return back();-->
<!--}-->
<!--if($coupon){-->
<!--$total_price=Cart::where('user_id',auth()->user()->id)->where('order_id',null)->sum('price');-->
<!---->
<!--session()->put('coupon',[-->
<!--'id'=>$coupon->id,-->
<!--'code'=>$coupon->code,-->
<!--'value'=>$coupon->discount($total_price)-->
<!--]);-->
<!--request()->session()->flash('success','Coupon successfully applied');-->
<!--return redirect()->back();-->
<!--}-->
<!--}-->
<!--//////////////////////////////////////////////////////////// slug-->
<!---->
<!--$data=$request->all();-->
<!---->
<!--$slug=Str::slug($request->title);-->
<!--$count=Post::where('slug',$slug)->count();-->
<!--if($count>0){-->
<!--$slug=$slug.'-'.date('ymdis').'-'.rand(0,999);-->
<!--}-->
<!--$data['slug']=$slug;-->
<!---->
<!--///////////////////////////////////////////////////////////// tag-->
<!--اگر چند تا داشت و بزار در غیر اینصورت نال بزار-->
<!--$tags=$request->input('tags');-->
<!--if($tags){-->
<!--$data['tags']=implode(',',$tags);-->
<!--}-->
<!--else{-->
<!--$data['tags']='';-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// date-->
<!--تبدیل تاریخ به زمان درست-->
<!---->
<!---->
<!--public function getCreatedAtAttribute($value)-->
<!--{-->
<!--return Carbon::parse($value)->format('Y-m-d H:i:s');-->
<!--}-->
<!---->
<!---->
<!--$date = Carbon::parse('2020-11-23T13:26:02.000Z')->toDateTimeString();-->
<!--dd($date); // 2020-11-23 13:26:02-->
<!--////////////////////////////////////////////////////////////  array_merge-->
<!--اضافه کردن رکویس به رکویس دیگر-->
<!--$user = User::create(array_merge($request->all(),['password' => bcrypt($request->password)]));-->
<!---->
<!--//////////////////////////////////////////////////////////// income گزارش ماهیانه-->
<!--// Income chart-->
<!--public function incomeChart(Request $request){-->
<!--$year=\Carbon\Carbon::now()->year;-->
<!--// dd($year);-->
<!--$items=Order::with(['cart_info'])->whereYear('created_at',$year)->where('status','delivered')->get()-->
<!--->groupBy(function($d){-->
<!--return \Carbon\Carbon::parse($d->created_at)->format('m');-->
<!--});-->
<!--// dd($items);-->
<!--$result=[];-->
<!--foreach($items as $month=>$item_collections){-->
<!--foreach($item_collections as $item){-->
<!--$amount=$item->cart_info->sum('amount');-->
<!--// dd($amount);-->
<!--$m=intval($month);-->
<!--// return $m;-->
<!--isset($result[$m]) ? $result[$m] += $amount :$result[$m]=$amount;-->
<!--}-->
<!--}-->
<!--$data=[];-->
<!--for($i=1; $i <=12; $i++){-->
<!--$monthName=date('F', mktime(0,0,0,$i,1));-->
<!--$data[$monthName] = (!empty($result[$i]))? number_format((float)($result[$i]), 2, '.', '') : 0.0;-->
<!--}-->
<!--return $data;-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// wishlist چک کردن انبار-->
<!--$wishlist = new Wishlist;-->
<!--$wishlist->user_id = auth()->user()->id;-->
<!--$wishlist->product_id = $product->id;-->
<!--$wishlist->price = ($product->price-($product->price*$product->discount)/100);-->
<!--$wishlist->quantity = 1;-->
<!--$wishlist->amount=$wishlist->price*$wishlist->quantity;-->
<!--اگر انبار کمتر از تعداد درخواستی بود-->
<!--if ($wishlist->product->stock < $wishlist->quantity || $wishlist->product->stock <= 0) return back()->with('error','Stock not sufficient!.');-->
<!--$wishlist->save();-->
<!--///-->
<!--public function update(Request $request, $id)-->
<!--{-->
<!--$order=Order::find($id);-->
<!--$this->validate($request,[-->
<!--'status'=>'required|in:new,process,delivered,cancel'-->
<!--]);-->
<!--$data=$request->all();-->
<!--// return $request->status;-->
<!--if($request->status=='delivered'){-->
<!--foreach($order->cart as $cart){-->
<!--$product=$cart->product;-->
<!--// return $product;-->
<!--از انبار کم کن-->
<!--$product->stock -=$cart->quantity;-->
<!--$product->save();-->
<!--}-->
<!--}-->
<!--$status=$order->fill($data)->save();-->
<!--if($status){-->
<!--request()->session()->flash('success','Successfully updated order');-->
<!--}-->
<!--else{-->
<!--request()->session()->flash('error','Error while updating order');-->
<!--}-->
<!--return redirect()->route('order.index');-->
<!--}-->
<!--//////////////////////////////////////////////////////////// required_if-->
<!--اگر فلان تایپ فرستاد-->
<!--"sale_price" => "required_if:list_type,==,selling"-->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////// ordernumber-->
<!--کد یونیک اوردر-->
<!---->
<!--$order_data['order_number']='ORD-'.strtoupper(Str::random(10));-->
<!---->
<!--ORD-PMIQF5MYPK-->
<!--//////////////////////////////////////////////////////////// search-->
<!--public function index(): View-->
<!--{-->
<!--$this->authorize('access_review');-->
<!---->
<!--$reviews = Review::with('product', 'user')-->
<!--->when(\request()->keyword != null, function ($query) {-->
<!--$query->search(\request()->keyword);-->
<!--})-->
<!--->when(\request()->status != null, function ($query) {-->
<!--$query->whereStatus(\request()->status);-->
<!--})-->
<!--->orderBy(\request()->sortBy ?? 'id', \request()->orderBy ?? 'desc')-->
<!--->paginate(\request()->limitBy ?? 10);-->
<!--return view('backend.reviews.index', compact('reviews'));-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////// session-->
<!--گرفتن مقدار از کش یا سشن-->
<!--$data = [];-->
<!--if(session('coupon')){-->
<!--$data['shipping_discount'] = session('coupon')['value'];-->
<!--}-->
<!---->
<!--///-->
<!--public function index()-->
<!--{-->
<!--if(!Session::has('cart')){-->
<!--return view('cart.index',['products'=>null]);-->
<!--}-->
<!--$oldCart= Session::get('cart');-->
<!--$cart= new Cart($oldCart);-->
<!--$products = $cart->items;-->
<!--$totalPrice = $cart->totalPrice;-->
<!--$totalQuantity= $cart->totalQuantity;-->
<!--return view('cart.index', compact ('products','totalPrice','totalQuantity'));-->
<!--}-->
<!--///////////////////////////////////////////////////////////// encode-->
<!--$array=[{-->
<!--“name”:”mohsen”,-->
<!--‘age’:”20”-->
<!--}];-->
<!--$v=json_encode($array);-->
<!---->
<!--$v=serialaize($array);-->
<!--///////////////////////////////////////////////////////////// order details-->
<!--if ($order) {-->
<!--//checking the order to make sure whether it needs an added product increase its quantity-->
<!--$orderDetail = OrderDetail::where('order_id', $order->id)-->
<!--->where('product_id', $product->id)-->
<!--->first();-->
<!---->
<!--//if the product exists, its quantity is increased-->
<!--if ($orderDetail) {-->
<!--$orderDetail->price = $product->price;-->
<!--$orderDetail->quantity = $orderDetail->quantity + $quantity; به تعداد قبلی اضافه کن-->
<!--}-->
<!--//otherwise, the order details is created from the product received-->
<!--else {-->
<!--$orderDetail = new OrderDetail();-->
<!--$orderDetail->order_id = $order->id;-->
<!--$orderDetail->product_id = $product->id;-->
<!--$orderDetail->price = $product->price;-->
<!--$orderDetail->quantity = $quantity;-->
<!--$orderDetail->status = 1;-->
<!--}-->
<!---->
<!--$orderDetail->save();-->
<!---->
<!--///////////////////////////////////////////////////////////// empty paraneter-->
<!--اگر ارگومان مقدارش نال بود صفربرگردان-->
<!--if (empty($orders)) return 0;-->
<!--///-->
<!--$list = LinkList::where('slug', $slug)->first();-->
<!-- if (!$list) {-->
<!--     abort(404);-->
<!-- }-->
<!--////////////////////////////////////////////////////////////// date scope-->
<!---->
<!--public function scopeOfDates($query, $from, $to = '')-->
<!--{-->
<!--if (trim($from) == '' && trim($to) == '') {-->
<!--return;اگر مقدار نداشت کاری نکن-->
<!--}-->
<!--if (trim($from) != '' && trim($to) != '') {-->
<!--return $query->whereBetween(\DB::raw('DATE(orders.created_at)'), [$from, $to]);-->
<!--} elseif (trim($from) != '' && trim($to) == '') {-->
<!--return $query->where(\DB::raw('DATE(orders.created_at)'), $from);-->
<!--} elseif (trim($from) == '' && trim($to) != '') {-->
<!--return $query->where(\DB::raw('DATE(orders.created_at)'), $to);-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////// request status-->
<!--'status'=>'required|in:active,inactive'-->
<!---->
<!--//////////////////////////////////////////////////////////////////// user orders-->
<!--خرید کاربر احراز شده-->
<!--public function index()-->
<!--{-->
<!--// $orders = auth()->user()->orders; // n + 1 issues-->
<!---->
<!--$orders = auth()->user()->orders()->with('products')->get(); // fix n + 1 issues-->
<!---->
<!--return view('my-orders')->with('orders', $orders);-->
<!--}-->
<!--//-->
<!---->
<!--public function show(Order $order)-->
<!--{-->
<!--if (auth()->id() !== $order->user_id) {-->
<!--return back()->withErrors('You do not have access to this!');-->
<!--}-->
<!---->
<!--$products = $order->products;-->
<!---->
<!--return view('my-order')->with([-->
<!--'order' => $order,-->
<!--'products' => $products,-->
<!--]);-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////// order-->
<!--گرفتن اوردر و ذخیره در دو جدول دیگر-->
<!--public function createOrder(User $user, array $requestData): Order-->
<!--{-->
<!--$orderLabel = $this->config->get('app.order_prefix') . '_' . time();-->
<!--$order = new Order();-->
<!--$this->dbConnection->transaction(function() use ($orderLabel, $requestData, $user, $order) {-->
<!--$order->commentary = '';-->
<!--$order->total = $requestData['subtotal'];-->
<!--$order->status = 'pending payment';-->
<!--$order->order_label = $orderLabel;-->
<!--$order->user_id = $user->id;-->
<!--$order->save();-->
<!---->
<!--$products = $requestData['product_ids'];-->
<!--$orderData = [];-->
<!--$relatedProductIds = [];-->
<!--for ($i = 0; $i < count($products); $i++) {-->
<!--/** @var Product $product */-->
<!--$product = $this->mProduct->find($products[$i]);-->
<!--$price = $product->price;-->
<!--$orderData[] = new OrderData([-->
<!--'order_id' => $order->id,-->
<!--'product_id' => $products[$i],-->
<!--'is_related_product' => $requestData['isRelatedProduct'][$i],-->
<!--'price' => $price,-->
<!--'qty' => $requestData['productQty'][$i],-->
<!--]);-->
<!---->
<!--if ($requestData['isRelatedProduct'][$i] == 1) {-->
<!--$relatedProductIds[] = (int)$requestData['isRelatedProduct'][$i];-->
<!--}-->
<!--}-->
<!--$this->mRelatedProduct->whereIn('id', $relatedProductIds)->increment('points', 5);-->
<!--$order->orderData()->saveMany($orderData);-->
<!--$dispatch = new Dispatch([-->
<!--'order_id' => $order->id,-->
<!--'shipping_method_id' => $requestData['shippingMethodId'],-->
<!--]);-->
<!--$order->dispatches()->saveMany([$dispatch]);-->
<!--$payment = new Payment([-->
<!--'order_id' => $order->id,-->
<!--'payment_method_id' => $requestData['paymentMethodId'],-->
<!--]);-->
<!--$order->dispatches()->saveMany([$payment]);-->
<!--});-->
<!---->
<!--return $order;-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////// cookie-->
<!--کوکی-->
<!--public function store(){-->
<!--$cookie=cookie(‘jwt’,$jwt,60*24);-->
<!--return response([‘message’=>’success’])->withCookie($cookie);}-->
<!---->
<!--public function store(){-->
<!--$cookie=cookie::forget(‘jwt’);-->
<!--return response([‘message’=>’success’])->withCookie($cookie);}-->
<!---->
<!--////////////////////////////////////////////////////////////////////// enum-->
<!--class AdminPaymentMethodStatuses-->
<!---->
<!--{-->
<!---->
<!--public const DISABLED = 0;-->
<!---->
<!--public const ENABLED = 1;-->
<!---->
<!--public const MISSED_IN_CFG = 2;-->
<!---->
<!--public const MISSED_IN_DB = 3;-->
<!---->
<!--public const STATUSES = [-->
<!---->
<!--0 => 'Disabled',-->
<!---->
<!--1 => 'Enabled',-->
<!---->
<!--2 => 'Missing from the config',-->
<!---->
<!--3 => 'Missing from the DB'-->
<!--];-->
<!---->
<!--}-->
<!--////////////////////////////////////////////////////////////////// field price-->
<!--گرفتن قیمت محصول باایدی-->
<!--public function getProductPriceById(int $id): float-->
<!--{-->
<!--$item = $this->findOrFail($id);-->
<!--return $item->price;-->
<!--}-->
<!--const STATUS_INITIALIZED = 0;-->
<!--$table->unsignedInteger('status')->default(Payment::STATUS_INITIALIZED);-->
<!---->
<!--//model-->
<!--public function setStatusById(int $id, bool $status): void-->
<!---->
<!--{-->
<!---->
<!--$this->where('id', $id)->update(['enable' => $status]);-->
<!---->
<!--}-->
<!--/////////////////////////////////////////////////////////////////// blade-->
<!--<td>{{ !is_null($actividad->user)?$actividad->user->name:'' }}</td>-->
<!--//////////////////////////////////////////////////////////////// policy-->
<!--فقط استاتوس برابر فلان بود نمایش بده-->
<!--artisan make:policy StoryPolicy --model=Story-->
<!--class StoryPolicy {-->
<!--use HandlesAuthorization;-->
<!--public function view(User $user, Story $story) {-->
<!--if ($story->visibility == 'visible') {-->
<!--return true; } else { return $story->user_id == $user->id; }-->
<!--} }-->
<!--///-->
<!--class AuthServiceProvider extends ServiceProvider-->
<!--{-->
<!--public function boot () {-->
<!--// to keep the code in one-line, used App namespace.-->
<!--// closure is replaced with ClassName@methodName format.-->
<!--Gate::define('edit-post', 'App\CustomPolicy@editPost');-->
<!--}-->
<!--}-->
<!--//////////////////////////////////////////////////////////// status update-->
<!--public function changeStatus(int $id, bool $status): void-->
<!--{-->
<!--/** @var PaymentMethod $method */-->
<!--$method = $this->mPaymentMethod->findOrFail($id);-->
<!--$method->enabled = $status;-->
<!--$method->save();-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////// array push-->
<!---->
<!--public function testOrder()-->
<!--{-->
<!--$items = array();-->
<!---->
<!--$item = new OrderItem();-->
<!--$item->good_id = 1;-->
<!--$item->price = 34.8;-->
<!--$item->count = 3;-->
<!--$item->color = 'red';-->
<!--$item->size = '12';-->
<!---->
<!--$item2 = new OrderItem();-->
<!--$item2->good_id = 1;-->
<!--$item2->price = 34.8;-->
<!--$item2->count = 3;-->
<!--$item2->color = 'red';-->
<!--$item2->size = '12';-->
<!--array_push($items, $item);-->
<!--array_push($items, $item2);-->
<!---->
<!---->
<!--$order = $this->order->order($items, 1);-->
<!---->
<!--$this->assertTrue($order instanceof Order);-->
<!--}-->
<!--/////////////////////////////////////////////////////////////////////// order-->
<!--public function order(array $items, $user_id)-->
<!--{-->
<!--$order = new Order();-->
<!--$items_number = 0;-->
<!--$items_total = 0;-->
<!---->
<!--$order->user_id = $user_id;-->
<!--$order->state = $this->INIT;-->
<!--$order->items_number = 0;-->
<!--$order->items_total = 0;-->
<!---->
<!--$order->save();-->
<!---->
<!--foreach($items as $item)-->
<!--{-->
<!--$item->total_price = $item->count * $item->price;-->
<!--$items_number += $item->count;-->
<!--$items_total += $item->total_price;-->
<!--$item->order_id = $order->id;-->
<!---->
<!--$item->save();-->
<!--}-->
<!---->
<!--$this->updateOrder($order->id);-->
<!---->
<!--return $order;-->
<!--}-->
<!--///-->
<!--public function updateQty($item_id, $qty)-->
<!--{-->
<!--$item = OrderItem::findOrFail($item_id);-->
<!---->
<!--if($qty <= 0)-->
<!--{-->
<!--$this->removeItem($item->order_id, $item_id);-->
<!--}-->
<!---->
<!---->
<!--if(! $item)-->
<!--{-->
<!--return null;-->
<!--}-->
<!---->
<!--$item->count = $qty;-->
<!--$item->total_price = $item->price * $item->count;-->
<!--$item->save();-->
<!---->
<!--$this->updateOrder($item->order_id);-->
<!---->
<!--return $item;-->
<!--}-->
<!--///-->
<!--public function removeItem($order_id, $item_id)-->
<!--{-->
<!--$order = Order::findOrFail($order_id);-->
<!---->
<!--$item = OrderItem::findOrFail($item_id);-->
<!---->
<!--if(! ($order->id == $item->order_id))-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--if(! $item)-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--$item->delete();-->
<!---->
<!--$this->updateOrder($order_id);-->
<!---->
<!--return true;-->
<!--}-->
<!--///-->
<!--public function updateStatus($order_id, $status)-->
<!--{-->
<!--if( ! ($status == $this->INIT || $status == $this->COMPLETE-->
<!--|| $status == $this->OBLIGATION || $status == $this->PROCESSING))-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--$order = $this->getOrder($order_id);-->
<!---->
<!--if(!$order)-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--$order->state = $status;-->
<!--$order->save();-->
<!---->
<!--return true;-->
<!--}-->
<!--///-->
<!--public function deleteOrder($order_id)-->
<!--{-->
<!--$order = $this->getOrder($order_id);-->
<!---->
<!--if(! $order)-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--OrderItem::where('order_id', $order->id)->delete();-->
<!---->
<!--$order->delete();-->
<!---->
<!--return true;-->
<!--}-->
<!--///-->
<!--public function updateOrder($order_id)-->
<!--{-->
<!--$order = Order::findOrFail($order_id);-->
<!---->
<!--if(! $order)-->
<!--{-->
<!--return false;-->
<!--}-->
<!---->
<!--$order->items_total = $this->total($order_id);-->
<!--$order->items_number = $this->count($order_id);-->
<!---->
<!--$order->save();-->
<!---->
<!--return true;-->
<!--}-->
<!--///-->
<!--public function total($order_id)-->
<!--{-->
<!--$items = OrderItem::where('order_id', $order_id)->get();-->
<!--$total = 0;-->
<!---->
<!--foreach($items as $item)-->
<!--{-->
<!--$total += $item->count * $item->price;-->
<!--}-->
<!---->
<!--return $total;-->
<!--}-->
<!--/// گرفتن تعداد اوردر خرید-->
<!--public function count($order_id)-->
<!--{-->
<!--$items = OrderItem::where('order_id', $order_id)->get();-->
<!---->
<!--$count = 0;-->
<!---->
<!--foreach($items as $item)-->
<!--{-->
<!--$count += $item->count;-->
<!--}-->
<!---->
<!--return $count;-->
<!--}-->
<!--//////////////////////////////////////////////////////////////// حقخحثقفغ-->
<!--*/-->
<!--public $INIT = 'init';-->
<!---->
<!---->
<!--public $OBLIGATION = 'obligation';-->
<!---->
<!---->
<!--public $PROCESSING = 'processing';-->
<!---->
<!---->
<!--public $COMPLETE = 'complete';-->
<!--$order=new Order;-->
<!--$order->state = $this->INIT;-->
<!--///////////////////////////////////////////////////////////////// json-->
<!--{-->
<!--"name":"salam",-->
<!--"description":"fffff"-->
<!--}-->
<!---->
<!---->
<!--{-->
<!--"rial": "1000",-->
<!--"dollar": "1000"-->
<!--}-->
<!--//////////////////////////////////////////////////////////////// update status-->
<!--if (isset($request->flag)) {-->
<!--Article::find($id)->update([-->
<!--'flag' => !$request->flag-->
<!--]-->
<!--);-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////////-->
<!--///-->
<!--$v=Category::query()->with('article')->where('content','a')->get();-->
<!--select * from `categories` where `content` = a-->
<!---->
<!--///-->
<!--$v=Article::query()->with('categories')->where('content','a')->get();-->
<!--select * from `articles` where `content` = a-->
<!---->
<!--{-->
<!--"id": 1,-->
<!--"client_id": 1,-->
<!--"category_id": 1,-->
<!--"title": "a",-->
<!--"content": "a",-->
<!--"description": "a",-->
<!--"visit": "free",-->
<!--"flag": 0,-->
<!--"data_additional": null,-->
<!--"original_img": null,-->
<!--"thumb_img": null,-->
<!--"number_visit": null,-->
<!--"time_last_visit": null,-->
<!--"created_at": null,-->
<!--"updated_at": null,-->
<!--"categories": null-->
<!--}-->
<!---->
<!--$v=Category::query()->withWhereHas('articles',function($query){-->
<!--$query->where('content', 'a');-->
<!--})->get();-->
<!---->
<!--select * from `categories` where exists (select * from `articles` where `articles`.`categories_id` = `categories`.`id` and `content` = a)-->
<!--{-->
<!--"id": 1,-->
<!--"title": "a",-->
<!--"language_id": 1,-->
<!--"created_at": null,-->
<!--"updated_at": null,-->
<!--"articles": [-->
<!--{-->
<!--"id": 1,-->
<!--"client_id": 1,-->
<!--"category_id": 1,-->
<!--"title": "a",-->
<!--"content": "a",-->
<!--"description": "a",-->
<!--"visit": "free",-->
<!--"flag": 0,-->
<!--"data_additional": null,-->
<!--"original_img": null,-->
<!--"thumb_img": null,-->
<!--"number_visit": null,-->
<!--"time_last_visit": null,-->
<!--"created_at": null,-->
<!--"updated_at": null-->
<!--}-->
<!--]-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////// json-->
<!--ست کردن جیسان در فیلد استرینگ-->
<!--// Create a new Pickup entry-->
<!--$pickup = App\Pickup::create([-->
<!-- 'default' => true,-->
<!-- 'shifts' => '[1, 5, 7]', // you can easily assign an actual integer array here-->
<!-- 'status_id' => 1-->
<!--]);-->
<!--/////////////////////////////////////////////////////////////////// array_column-->
<!--//json string-->
<!--$json = '[{"id": "1", "quantity": "2"}, {"id": "2", "quantity": "5"}, {"id": "3", "quanity": "10"}]';-->
<!---->
<!--//convert json to array-->
<!--$json_toArray = json_decode($json,true);-->
<!---->
<!--//get id values from array-->
<!--//If you are using php 5.5+ this will work, if you are using an older version you can use -->
<!--//array_map method like this: $array_ids = array_map(function ($array) {return $array['id'];}, $json_toArray);-->
<!--$array_ids = array_column($json_toArray, 'id');-->
<!---->
<!--//Finally execute the query-->
<!---->
<!--//Using Eloquent-->
<!--$result = Items::whereIn('id', $array_ids)->select('price')->get();-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////////// value-->
<!--Model::where('id', 1)->pluck('name', 'surname');-->
<!--Model::where('id', 1)->value('name');-->
<!--$getPrice=$price->value('price');-->
<!--$check=$price->whereIn('price->rial',['1000'])->get();-->
<!--$price=PriceArticle::query()->find(1)->value('price')['rial'];-->
<!---->
<!--Model::find($id, ['name', 'mohsen']);-->
<!--////////////////////////////////////////////////////////////////// relation-->
<!--هرکاربر تعدادی پست دارد hasmany-->
<!--$user->posts()->where('active', 1)->get();-->
<!--$comment = Post::find(1)->comments()->where('title', 'foo')->first();-->
<!--$user->posts()->where('active', 1)->orWhere('votes', '>=', 100)->get();-->
<!---->
<!--$posts = Post::whereHas('comments', function (Builder $query) {-->
<!--$query->where('content', 'like', 'code%');-->
<!--})->get();-->
<!--$posts = Post::whereRelation('comments', 'is_approved', false)->get();-->
<!---->
<!--$books = Book::with('author')->get();-->
<!---->
<!--$books = Book::with('author.contacts')->get();-->
<!---->
<!--$books = Book::with('author:id,name,book_id')->get();-->
<!--$users = User::withWhereHas('posts', function ($query) {-->
<!--$query->where('title', ‘a’);-->
<!--)->get();-->
<!---->
<!--هرکاربر یک تلفن دارد hasone-->
<!--$phone = User::find(1)->phone;-->
<!--//-->
<!--has many-->
<!--پست هایی که کاربرخاص دارد بده-->
<!--$users = User::where('vip', true)->get();-->
<!--$posts = Post::whereBelongsTo($users)->get();-->
<!--///-->
<!--کاربری که پست دارد-->
<!--User::has(‘posts’)->get();-->
<!--///-->
<!--پستهایی که کامنت آن شبیه محتوا خاص هست-->
<!--$posts=Post::whereHas(‘comments’,function(Builder $query){-->
<!--$query->where(‘content’,’like’,’code%’);})->get();-->
<!--})-->
<!--//////////////////////////////////////////////////////////////////// search-->
<!--$products = Product::query()->withCount('likes')-->
<!--->selectRaw('ifNull(`discount`, `price`) as `final_price`');-->
<!---->
<!--if (isset($request->min)) {-->
<!--$products->having('final_price', '>=', $request->min);-->
<!--}-->
<!--if (isset($request->category)) {-->
<!--$products->whereRelation('categories', 'name', 'LIKE', $request->category);-->
<!--}-->
<!--//کمترین و بیشترین-->
<!--if (!empty(request('price')) && request('price') == 'more-expensive') {-->
<!--$project->orderBy('price', 'DESC');-->
<!--}-->
<!--if (!empty(request('price')) && request('price') == 'less-expensive') {-->
<!--$project->orderBy('price', 'ASC'); }-->
<!---->
<!--public function productshop(Request $request)-->
<!-- {-->
<!--     #Get minimum and maximum price to set in price filter range-->
<!--     $min_price = Product::min('price');-->
<!--     $max_price = Product::max('price');-->
<!--     //dd('Minimum Price value in DB->'.$min_price,'Maximum Price value in DB->'.$max_price);-->
<!---->
<!--     #Get filter request parameters and set selected value in filter-->
<!--     $filter_min_price = $request->min_price;-->
<!--     $filter_max_price = $request->max_price;-->
<!--      -->
<!--     #Get products according to filter-->
<!--     if($filter_min_price && $filter_max_price){-->
<!--         if($filter_min_price >0 && $filter_max_price >0)-->
<!--         {-->
<!--         $products = Product::select('product_name','product_image','price','selling_price')->whereBetween('price',[$filter_min_price,$filter_max_price])->get();-->
<!--       }-->
<!--     } -->
<!--     #Show default product list in Blade file-->
<!--     else{-->
<!--         $products = Product::select('product_name','product_image','price','selling_price')->get();-->
<!--     }-->
<!--     return view('pricefilter.index',compact('products','min_price','max_price','filter_min_price','filter_max_price'));-->
<!-- }-->
<!---->
<!--//////////////////////////////////////////////////////////////////// job-->
<!--public function store(Request $request)-->
<!--{-->
<!--$podcast = Podcast::create(/* ... */);-->
<!--ProcessPodcast::dispatch($podcast)-->
<!--->delay(now()->addMinutes(10));}-->
<!--///-->
<!--$schedule->job(new Heartbeat)->everyFiveMinutes();-->
<!--///-->
<!--* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1-->
<!---->
<!--///-->
<!--class Kernel extends ConsoleKernel-->
<!---->
<!--protected function schedule(Schedule $schedule)-->
<!--protected function schedule(Schedule $schedule)-->
<!--{-->
<!-- $schedule->command('quote:daily')-->
<!-- ->daily()->timezone(‘America/New_York’);;        -->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////////// array field json-->
<!---->
<!--$data = new Data; -->
<!--$data->Name = json_encode($request->DataName);-->
<!--$data->save();-->
<!---->
<!--$data = json_decode(Data::find(1)->Name);-->
<!---->
<!---->
<!--///-->
<!--[{"fa":"زبان فارسی"},{"en":"زبان انگلیس"}]-->
<!--protected $fillable = ['title'];-->
<!---->
<!--protected $casts = [-->
<!--'title' => 'array'-->
<!--];-->
<!--$table->json('title');-->
<!--///-->
<!--App\User::where('meta->country', 'India')->get()-->
<!--App\User::where('meta->skills', 'like',  '%Vue%')->get()-->
<!--App\User::whereRaw('JSON_CONTAINS(meta->"$.skills", \'["Laravel"]\')')->get();-->
<!--App\User::select('id', 'name', 'meta->gender as sex', 'meta->skills as skills')->get()-->
<!--$user = App\User::first();-->
<!--$user->meta = [ 'bio' => [ 'full' => 'Lorem ipsum dolor sit amet...' ] ];-->
<!--$user->save();-->
<!--///update-->
<!--$user = App\User::find(2)-->
<!--$user->update(['meta->bio->summery' => 'New sort bio goes here, pretty neat hah!'])-->
<!--//create-->
<!--$user['meta->bio->summery'] = 'New sort bio goes here, pretty neat hah!'-->
<!--$user->save();-->
<!--///-->
<!--[{"id": 1,"client_id": 1,"category_id": 1,"title": "1","content": "1","description": "1","visit": "free","flag": 0,"data_additional": null,"original_img": null,"thumb_img": null,"number_visit": null,"time_last_visit": "2024-10-19","created_at": null,"updated_at": "2022-08-19T16:34:30.000000Z"}]-->
<!---->
<!---->
<!--///-->
<!--$array = array("my", "litte", "array", 2);-->
<!---->
<!--$serialized_array = serialize($array);-->
<!--$unserialized_array = unserialize($serialized_array);-->
<!--//-->
<!--public function getattributesAttribute($value)-->
<!--{ return json_decode(json_decode($value)); }-->
<!---->
<!--//////////////////////////////////////////////////////////////////// queue-->
<!--اول جاب می نویسی بعد در اسکجول زمان مشخص رانش میکینی-->
<!--php artisan optimize && php artisan config:clear-->
<!--php artisan schedule:run-->
<!--php artisan queue:work-->
<!--php artisan queue:work-->
<!--//console/Kernel-->
<!--class Kernel extends ConsoleKernel-->
<!--{-->
<!--protected function schedule(Schedule $schedule)-->
<!--{-->
<!--if (!DB::table('branches')->count()) $schedule->job(new ProcessBranchesJob);-->
<!--$schedule->job(new ProcessBranchesJob)->dailyAt("00:00");-->
<!--}-->
<!--}-->
<!--//Job/ProcessBranchesJob-->
<!--$response=Http::get()-->
<!--$response = json_decode($response, true);-->
<!--foreach ($response["list"] as $value) {-->
<!--Agent::updateOrCreate(-->
<!--[-->
<!--'id' => $value['code'],-->
<!--],-->
<!--[-->
<!--'provinceName' => $value['provinceName'],-->
<!--'cityName' => $value['cityName'],-->
<!--'statusTitle' => ($value['statusTitle'] == 'فعال') ? 1 : null,-->
<!--'cityID' => City::findByCityName($value['cityName'])->id ?? null,-->
<!--]-->
<!--///////////////////////////////////////////////////////////////////// each-->
<!--در جدول کاربران اونایی اکتیوشون فالز بود ترو کن-->
<!--DB::table('users')->where('active', false)-->
<!--->lazyById()->each(function ($user) {-->
<!--DB::table('users')-->
<!--->where('id', $user->id)-->
<!--->update(['active' => true]);-->
<!--});-->
<!--///////////////////////////////////////////////////////////////////// DB::raw-->
<!--دیبی رو-->
<!--Raw Expressions-->
<!---->
<!--$users = DB::table('users')-->
<!--->select(DB::raw('count(*) as user_count, status'))-->
<!--->where('status', '<>', 1)-->
<!--->groupBy('status')-->
<!--->get();-->
<!--///-->
<!--$orders = DB::table('orders')-->
<!--->selectRaw('price * ? as price_with_tax', [1.0825])-->
<!--->get();-->
<!--///-->
<!--$id = DB::table('users')->insertGetId(-->
<!--['email' => 'john@example.com', 'votes' => 0]-->
<!--);-->
<!---->
<!--///////////////////////////////////////////////////////////////////// cache redis-->
<!--Redis::transaction(function ($redis) {-->
<!--$redis->incr('user_visits', 1);-->
<!--$redis->incr('total_visits', 1);-->
<!--});-->
<!---->
<!--اگر در کش ایپی و دیوایس نبود برو بشمار و در کش ایپی و دیوایس را ذخیره کن-->
<!--artisan make:event ArticleEvent-->
<!--protected $dispatchEvents=[-->
<!--‘created’=>PostCreated::class-->
<!--];-->
<!--//-->
<!--PostCreated::class=>[-->
<!--PostCacheLIstener::class-->
<!--]-->
<!--//-->
<!--Event::dispatch(new PostCreated());-->
<!---->
<!--$visit=Cache::increment(‘visit’);-->
<!--$ip=request->ip();-->
<!--$device=getClientDevice();-->
<!--if(!Cache ::has(‘vist’))-->
<!---->
<!--///-->
<!--Redis::set('name', 'Taylor');-->
<!---->
<!--dd(Redis::get('visit'));-->
<!--////-->
<!--$products = cache('products', function () {-->
<!--return Product::with('category')->get();-->
<!--});-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////// proxy reverse-->
<!--پراکسی ریورس-->
<!--سروری است که پشت فایروال قرار میگیرد و درخواست ها را از شبکه اینترنت دریافت کرده و آنها را به سرور های موجود در شبکه داخلی ارسال میکند-->
<!--آن باعث می شود که کاربران درخواست کننده سرویس از سمت اینترنت از طرف آن سرور احرازهویت شوند-->
<!--با استفاده از قابلیت لود بالانسینگ درخواست هایی که به سمت وب سرور های موجود در-->
<!--شبکه داخلی هدایت می شوند توسط ریورس پراکسی سرور سمت سروری که لود کاری کمتری دارد ارسال می شود-->
<!--// سمت سروی که لود کاری کمتری دارد ارسال میشود.-->
<!--ناشناس ماندن یکی از اساسی ترین دلایل راه اندازی یک پراکسی ریورس-->
<!--سرور های در نقش پراکسی ریورس به خوبی عملیات کشینگ انجام می دهند-->
<!--اطلاعات می توانند داده های ورودی و خروجی را نیز فشرده سازی کنند که این کار سرعت جریان ترافیک ورودی و خروجی شبکه را بین کلاینت وسرور افزایش دهد-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////// cache varnish-->
<!--روی یک سرور اختصاصی پیکربندی کنید و بدین ترتیب مطمئن می شوید که سرور اصلی از درخواست های زیاد کاربران تاثیر نمی گیرد.-->
<!--کشینگ معمولا با نگهداری خروجی از قبل محاسبه شده یک برنامه در حافظه یا روی دیسک کار می کند و باعث می شود که محاسبات سنگین با هر درخواستی که از سوی کاربر می آید به طور مداوم محاسبه نشود.-->
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--public function up()-->
<!--{-->
<!--Schema::create('invoices', function (Blueprint $table) {-->
<!--$table->increments('id');-->
<!---->
<!--# Data obtained through the API response of PayPal-->
<!--$table->string('customer_email')->nullable();-->
<!--$table->string('customer_id')->nullable();-->
<!--$table->string('country_code')->nullable();-->
<!--$table->string('payment_id')->nullable();-->
<!--$table->string('currency')->nullable();-->
<!--$table->string('payment_status')->nullable();-->
<!--$table->double('price', 2);-->
<!--$table->timestamps();-->
<!--});-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////////////// validate lang-->
<!--Route::prefix('{lang?}')->group(function () {-->
<!--Route::get('awake', 'ApiController@awake');-->
<!--});-->
<!--از اون طرف توی construct فایل App\Http\Controllers که کنترلر هاتون ازش ارث بری میکنن کد زیر رو بنویسید تا پارامتری که کاربر توی Route برای شما ارسال کرده به عنوان زبان اصلی برنامه انتخاب بشه ( بجز این ، راه های دیگه ای هم تا اینجای کار توی اینترنت هست اگر سرچ کنید )-->
<!--public function __construct(Request $request)-->
<!--{-->
<!-- \App::setLocale($request->route('lang'));-->
<!--}-->
<!---->
<!--public function awake() { return __('messages.im_awake'); }-->
<!--مثلا یبار XXX.com/api/fa/awake یبار هم XXX.com/api/en/awake-->
<!---->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// javascript-->
<!--////////// dom-->
<!--DOM-->
<!--Document Object Model (DOM) یک رابط است که یک سند HTML را به عنوان یک ساختار درختی در نظر می گیرد که در آن هر گره یک شی است که بخشی از سند را نشان می دهد. DOM یک سند مانند درخت منطقی از گره ها را نشان می دهد-->
<!--هنگامی که گره های مجازی شروع به تغییر می کنند، Vue وضعیت جدید و قدیمی را مقایسه می کند و تصمیم می گیرد که آیا DOM نیاز به به روز رسانی دارد یا خیر-->
<!--رندر قالب کامپوننت دو مرحله دارد-->
<!---->
<!--— مرحله 1 کامپایل-->
<!--زمانی است که ما الگوی خود را در یک تابع رندر کامپایل می کنیم-->
<!---->
<!---->
<!--- مرحله 2 اجرای تابع رندر است-->
<!--که گره DOM مجازی را ایجاد می کند که در نهایت به DOM که در مرورگر خود خواهیم دید ختم می شود.-->
<!---->
<!---->
<!--با هر تغییر Vue ابتدا virtual DOM را به روز رسانی می کند. بعد از به روز رسانی Virtual DOM آن را به DOM اصلی مقایسه می کند و اگر واقعا تغییری ایجاد شده بود، آن را در DOM واقعی پیاده سازی می کند. بدین صورت اگر Hello به Hello تغییر کند، در اصل تغییری رخ نداده و بنابراین DOM اصلی دست نمی خورد. در ضمن از آنجایی که virtual DOM به روز رسانی شده است، یک نسخه به روز از DOM اصلی را نیز داریم (همان Virtual DOM) که می تواند در مقایسه های بعدی استفاده شود! در تصویر زیر شکلی کلی از این مفهوم را می بینید:-->
<!---->
<!--/////////////////////-->
<!---->
<!---->
<!--Watcher ها به عنوان event listener ها نگاه کنید.-->
<!--/////////////////// مهبث زغزمث-->
<!--اول ابجکت از ویو میگیریم before create بعد داده ها و رویدادها را به ابجکت ویو پاس میدیم createdبعد ویو باید کدهای html ما را دریافت کند قبل از انکه کدهای ما رو dom  سوار شوند اجرا می شوند beforMount -->
<!--حالا عمل مقایسه با dom  صورت میگیرد beforeUpdate اگر تغییری بود updated-->
<!--befor cretedاول ابجکت از ویو میگیریم-->
<!--createdبعد داده ها و رویدادها را به ابجکت ویو پاس میدهیم-->
<!--beforMountبعد کدها اچ تی ام ال را ویو دریافت میکند روی دام ویو سوار می شوند قبل از اجرا در دام اصلی-->
<!--beforUpdatedبعد اگر کدها اچ تی ام ال تغییر کرده باشند چک میکند-->
<!--updatedدر صورت نیاز تغییر میکند-->
<!--beforeDestroyed اگر تغییر کرد-->
<!---->
<!---->
<!---->
<!--چرخه زندگی شیء Vue-->
<!--اولین قدم از چرخه زندگی شیء Vue با اجرا شدن دستور new Vue (همان constructor کلاس Vue) آغاز می شود. سپس اولین «متد چرخه زندگی» یا lifecycle method اجرا می شود که beforeCreate نام دارد. این تابع مسئول انجام برخی از کار ها «قبل از ساخته شدن شیء Vue» است. سپس داده ها و رویداد هایی را که تعریف کرده ایم (در همان شیء به عنوان آرگومان پاس می دهیم) initialize می شوند (یعنی آماده سازی اولیه و تنظیم و تعریف می شوند). در نهایت نمونه این کلاس که همان شیء Vue است ساخته می شود. این شیء توسط lifecycle method بعدی به نام created ساخته می شود. بنابراین تا اینجای کار یک نمونه از کلاس Vue را ساخته ایم.-->
<!--در مرحله بعد Vue باید کدهای HTML ما را دریافت کند. این کدها یا به خصوصیت template پاس داده شده اند که خب از همانجا دریافت می شوند و یا اینکه از el استفاده کرده ایم. اگر از el استفاده کرده باشیم، Vue همان قسمت را از فایل HTML ما برمی دارد و مشکلی نیست. حالا lifecycle method بعدی اجرا می شود که beforeMount نام دارد. این متد دقیقا قبل از آنکه کدهای HTML ما (همان Template ما – چه از خصوصیت template گرفته شده باشد چه از el) روی DOM واقعی سوار شوند، اجرا می شود. در مرحله بعد مقدار el با قالب کامپایل شده HTML ما یکی می شود (همه را مخلوط می کند تا یک کد یکدست HTML داشته باشیم) اما هنوز هم کدهای ما روی DOM واقعی سوار نشده اند.-->
<!--اگر یادتان باشد به شما گفتم که کدهای HTML ای که می نویسیم باید توسط Vue پردازش شوند و کد HTML واقعی نیستند. زمانی که می گویم «قالب کامپایل شده» یعنی همان قالب HTML ای که توسط Vue پردازش می شود. مثلا باید دستورات bind و v-if و {{ title }} و غیره را پردازش کند تا کدهای HTML ما تبدیل به کد HTML واقعی شوند. قالب کامپایل شده یعنی همین کدهای HTML واقعی و آماده شده توسط Vue. در آخرین مرحله از چرخه زندگی شیء Vue نیز قالب کامپایل شده روی DOM اصلی سوار می شود! از یک نظر می توانیم به این مرحله، مرحله آخر بگوییم اما از آنجایی که Vue تغییر داده ها را زیر نظر می گیرد، قسمت آخر چرخه هیچ وقت نمی میرد.-->
<!--اگر داده ای تغییر کند یک lifecycle method دیگر به نام beforeUpdate اجرا می شود و پس از اینکه DOM به روز رسانی شد و تغییر کرد lifecycle method بعدی به نام updated اجرا می شود. در نهایت اگر شیء Vue بخواهد از بین برود، دقیقا قبل از اینکه از بین برود، متد beforeDestroyed را اجرا می کند و زمانی که نابود شد (بعد از نابودی) هم متد destroyed اجرا می شود.-->
<!---->
<!---->
<!--////////// mixin-->
<!--یک میکسین یک آبجکت ساده هست که اعضای اون دقیقا همون چیزهایی هست که می‌تونیم توی یک کامپوننت تعریف کنیم. مثلا دیتا و کامپوننتس حالا در هر کامپوننت بخواهیم می توانیم استفاده کنیم-->
<!--//mixins.js-->
<!--ما می‌خوایم متد clone رو بصورت عمومی در دسترس قرار بدیم. ابتدا یک فایل درست می‌کنیم به اسم mixins.js و توی اون یک آبجکت بصورت زیر export می‌کنیم:-->
<!--export default {-->
<!--methods: {-->
<!-- clone(obj) {-->
<!--   return JSON.parse(JSON.stringify(obj));-->
<!-- }-->
<!--}-->
<!--}-->
<!--// umbrella-->
<!--Vue.component('umbrella', {-->
<!--mixins: [ myMixin ],-->
<!--data() {-->
<!-- user: {}-->
<!--}-->
<!--mounted() {-->
<!-- const user = this.clone(this.user);-->
<!-- // ...-->
<!--},-->
<!--computed: {-->
<!-- user() {-->
<!--   return this.clone(this.user);-->
<!-- }-->
<!--}-->
<!--});-->
<!--//////////-->
<!--دستوراتی مانند v-if و v-on همگی directive هستند -->
<!--////////// life cycle-->
<!--اولین قدم از چرخه زندگی شیء Vue با اجرا شدن دستور new Vue (همان constructor کلاس Vue) آغاز می شود. سپس اولین «متد چرخه زندگی» یا lifecycle method اجرا می شود که beforeCreate نام دارد. این تابع مسئول انجام برخی از کار ها «قبل از ساخته شدن شیء Vue» است. سپس داده ها و رویداد هایی را که تعریف کرده ایم (در همان شیء به عنوان آرگومان پاس می دهیم) initialize می شوند (یعنی آماده سازی اولیه و تنظیم و تعریف می شوند). در نهایت نمونه این کلاس که همان شیء Vue است ساخته می شود. این شیء توسط lifecycle method بعدی به نام created ساخته می شود. بنابراین تا اینجای کار یک نمونه از کلاس Vue را ساخته ایم.-->
<!--در مرحله بعد Vue باید کدهای HTML ما را دریافت کند. این کدها یا به خصوصیت template پاس داده شده اند که خب از همانجا دریافت می شوند و یا اینکه از el استفاده کرده ایم. اگر از el استفاده کرده باشیم، Vue همان قسمت را از فایل HTML ما برمی دارد و مشکلی نیست. حالا lifecycle method بعدی اجرا می شود که beforeMount نام دارد. این متد دقیقا قبل از آنکه کدهای HTML ما (همان Template ما – چه از خصوصیت template گرفته شده باشد چه از el) روی DOM واقعی سوار شوند، اجرا می شود. در مرحله بعد مقدار el با قالب کامپایل شده HTML ما یکی می شود (همه را مخلوط می کند تا یک کد یکدست HTML داشته باشیم) اما هنوز هم کدهای ما روی DOM واقعی سوار نشده اند.-->
<!--اگر یادتان باشد به شما گفتم که کدهای HTML ای که می نویسیم باید توسط Vue پردازش شوند و کد HTML واقعی نیستند. زمانی که می گویم «قالب کامپایل شده» یعنی همان قالب HTML ای که توسط Vue پردازش می شود. مثلا باید دستورات bind و v-if و {{ title }} و غیره را پردازش کند تا کدهای HTML ما تبدیل به کد HTML واقعی شوند. قالب کامپایل شده یعنی همین کدهای HTML واقعی و آماده شده توسط Vue. در آخرین مرحله از چرخه زندگی شیء Vue نیز قالب کامپایل شده روی DOM اصلی سوار می شود! از یک نظر می توانیم به این مرحله، مرحله آخر بگوییم اما از آنجایی که Vue تغییر داده ها را زیر نظر می گیرد، قسمت آخر چرخه هیچ وقت نمی میرد.-->
<!--اگر داده ای تغییر کند یک lifecycle method دیگر به نام beforeUpdate اجرا می شود و پس از اینکه DOM به روز رسانی شد و تغییر کرد lifecycle method بعدی به نام updated اجرا می شود. در نهایت اگر شیء Vue بخواهد از بین برود، دقیقا قبل از اینکه از بین برود، متد beforeDestroyed را اجرا می کند و زمانی که نابود شد (بعد از نابودی) هم متد destroyed اجرا می شود-->
<!---->
<!--//////////-->
<!--//////////-->
<!--//////////-->
<!--//////////-->
<!--////////// vue route-->
<!--router-link :to=”{name:’about’}”>-->
<!--<p>{{$route.params.id}}</p>ایدی دریافت میکنه-->
<!--backward(){-->
<!--$this.$router.go(-1)-->
<!--}-->
<!--redirect(){-->
<!--this.$router.push({name:’HOME’})-->
<!--}-->
<!--router view محل روتهایی که رندر میشه-->
<!--window.location.href=’/’ کارتو انجام دادی برو به-->
<!--///////////////////////////////////////////////////////////////////////////////////// web-->
<!--وب چیست-->
<!--dns-->
<!--domain name system-->
<!--نام دامین اسم یکتا است که به وبسایت اشاره می کند و سیستمی هست که این اتصال را برقرار می کند زمانیکه شما وبسایتی را ایجاد می کنید برای ثبت دامنه آن باید نامی را مشخص کنید که به سایت شما اشاره کند-->
<!--برای اینکه یک دامنه بتواند به وبسایت اشاره کند در قدم اول بایستی در دی ان اس سرور اضافه شود دی ان اس سرور یک دیتابیس بزرگ است که شامل مجموعه ای از دامین ها و ایپی ها مرتبط می باشد بعنوان مثال اگر دامین گوگل باشد سایت به ایپی با ادرس 64.233.167.99 اشاره می کند-->
<!--لایه نمایش که سرور هست که درخواست کاربران به آن می رود و پس پاسخ مناسب به کاربر بازگشت داده می شود-->
<!--لایه اپلیکیشن درخواست هایی که به لایه نمایش می رود دریافت می کند بر روی داده کار می کند-->
<!--لایه دسترسی به داده زمانیکه کاربر به داده ای نیاز دارد یا داده ای برای ذخیره سازی ارسال می کند این داده به لایه اپلیکیشن ازسال می شود-->
<!--از طریق انجین ایکس یا اپاچه می تونیم درخواست ها را به وبسرویس بفرستیم-->
<!--اپاچه یک فرایند محور و یک ترید برای هر درخواست ایجاد می کند-->
<!--انجین ایکس یک معماری مبتنی بر رویداد ایوینت درایون تا بتواند چندین درخواست را در یک ترید مدیریت کند-->
<!--/////////////////////////////////////////////////////////////////////////////////////docker-->
<!--Get container id:-->
<!--docker ps-->
<!---->
<!--Access container:-->
<!--docker exec -it *<id_container>* bash-->
<!---->
<!--Logs:-->
<!--docker log *<id_container>* -f-->
<!---->
<!--Remove all containers and volumes:-->
<!--// This command remove all container and volumes of your computer-->
<!--docker-compose down && docker system prune -a -f && docker volume prune -f-->
<!---->
<!--//-->
<!--docker ps --filter status=running-->
<!--// stop container-->
<!--docker stop $(docker ps --filter status=running -q)-->
<!--// delete countainer-->
<!--docker container prune-->
<!---->
<!---->
<!--//-->
<!--docker ps -a-->
<!--docker rm -f 8927c751983f-->
<!--//-->
<!--docker rm $(docker ps -q -a)-->
<!--docker stop $(docker ps -qa)-->
<!--from php8 alpine – workdir var/www/html – run chmod 777 -R ./* - run docker-php-ext-install -RUN pecl install xdebug-->
<!--build context:./dockerfile-container_name-port volumes:./src:/var/www/html-depends_on-networks-->
<!--///////////////////////////////////////////////////////////////////////////////////// php fpm jit-->
<!--اسکریپت اپیکش بایکوت زندانجین اکزکیوت-->
<!--//////////////////////////////////////////////////////////////////////////// git-->
<!--// گیت اسکواچ چندتا کامیت پرت داری میخوای همشو یکی کنی-->
<!---ریبیس مرتب سازی مرج بدون نگاه کردن به هیستوری-->
<!--- ریورت کامیت کردی ولی پوش نکردی حالا میخوای کامیت عوض کنی بدون تغییر در لاگ-->
<!--گیت ریست پوش کردی میخوای برگردانی به استیج-->
<!--git blame-->
<!--از دستور برای بررسی محتویات خط به خط یک فایل و بررسی این که آخرین بار چه خطی اصلاح شده و نویسنده ی تغییر ها چه کسی است، استفاده می شود-->
<!---->
<!---->
<!--ایندکس گذاری زیاد پرفورمنس میاره پایین-->
<!--// سرعت بیلد پایین باشد باید اون کامندهای پر کار برد را اول داکر بزاری-->
<!--//چرا نباید از فارینکی استفاده کرد در کریت و اپدیت کاهش پرفورمنس هست-->
<!--زمانیکه رکویست کاربر می فرسته چه اتفاقتی میفته تا صفحه شما بالا بیاد-->
<!--توکن ساخته میشه می شود اطلاعات کاربر دربیاریم-->
<!--public function boot()-->
<!--{-->
<!--View::composer('admin.require.header', function($view) {-->
<!--$view->with([-->
<!--'notifications' => Auth::user()->notifications(),-->
<!--'unreadNotifications' => Auth::user()->unreadNotifications(),-->
<!--]);-->
<!--});-->
<!--}-->
<!--'providers' => [-->
<!--/*-->
<!--* Laravel Framework Service Providers...-->
<!--*/-->
<!--App\Providers\NotificationServiceProvider::class,-->
<!--]-->
<!--//blade-->
<!--@foreach($notifications as $notif)-->
<!--<li>-->
<!--<div href="#" class="p-3 list-group-item d-flex align-items-center link-1 hide-show-toggler">-->
<!--<div>-->
<!--<figure class="avatar avatar-sm m-r-15">-->
<!--<span class="avatar-title bg-info-bright text-info rounded-circle">-->
<!--<i class="{{$notif->data['icon']}} font-size-20"></i>-->
<!--</span>-->
<!--</figure>-->
<!--</div>-->
<!--</li>-->
<!--@endforeach-->
<!--////////////////////////////////////////////////////////////////////////////////////-->
<!--DOM-->
<!--Document Object Model (DOM) مرورگر هنگامی که هر صفحه html را نمایش می دهد، یک لیست درختی از اجزای درون صفحه را ایجاد می کند که به آن DOM می گویند.-->
<!--رابطه DOM با جاوا اسکریپت در چیست؟-->
<!--هنگامی که جاوا اسکریپت در صفحه تغییرات ایجاد می کند تگ های بروزشده و فرزندانش مجددا render می شوند تا ظاهر اپلیکیشن بروز شود. به طور مثال یک کلاس به یک تگ div اضافه شده است تا رنگ پشت تگ را عوض کنید. با این تغییر کل تگ های درون div باید مجدد باز نویسی شوند و سپس صفحه مجدد رندر می شود.-->
<!--با رندر مجدد یک تگ و فرزند های آن، برای لحظاتی کندی در سیستم مشاهده می شود. فرض کنید اگر تگ body در مثال بالا دچار تغییر شود نصف صفحه مجددا باید رندر شود، بنابراین هر چقدر که تعداد تگ های html شما بیشتر باشد بروزرسانی DOM برای شما گران تر خواهد شد و عملکرد و سرعت وب سایت کاهش پیدا خواهد کرد.-->
<!--Virtual DOM کاری می کنند تا با تغییر یک تگ فقط خود آن تگ و آنهایی که تاثیر دیده اند تغییر کنند و دیگر نیازی نیست که تمام فرزندان یک تگ مجددا رندر شوند.-->
<!--Virtual DOM چگونه سریعتر است؟-->
<!--زمانی که یک element جدید به UI اضافه می شود، یک virtual DOM که به شکل یک درخت نمایش داده می شود، ایجاد می شود.هر element  یک گره(node) از درخت است.اگر وضعیت هر یک از این element ها تغییر پیدا کند، یک درخت virtual DOM  جدید ایجاد می شود.این درخت با virtual DOM قبلی مقایسه می شود.زمانی که این کار انجام می شود، virtual DOM بهترین روش ممکن برای ایجاد تغییرات به DOM واقعی را محاسبه می کند.این کار تضمین میکند که حداقل عملیات در DOM واقعی صورت گیرد. پس هزینه های بروزرسانی DOM واقعی را کاهش می دهد.-->
<!--همانطور که در تصویر زیر می بینید در سمت چپ از virtual DOM استفاده شده است و در این حالت فقط آن کامپوننتی که تغییر کرده است ویرایش شده است ولی در سمت راست که از Virtual DOM استفاده نشده است و مستقیم DOM ویرایش شده است تمام زیر شاخه های کامپوننت، بازنویسی شده اند.-->
<!--در سایت های بزرگ تعداد عناصر صفحه به قدری زیاد است که virtual DOM بسیار باعث بهینه شدن می شود.-->
<!--///////////////////////////////////////////////////// -->
<!--one to many-->
<!--//Answer-->
<!--public function question(): BelongsTo-->
<!-- {-->
<!--     return $this->belongsTo(Question::class);-->
<!-- }-->
<!--//AnswerController-->
<!--public function store(Request $request): JsonResponse-->
<!-- {-->
<!--     $request->validate([-->
<!--         'content' => 'required',-->
<!--         'question_id' => 'required',-->
<!--     ]);-->
<!--     $this->answer->store($request);-->
<!--    auth()->user()->increment('score', 10);-->
<!--     return \response()->json([-->
<!--         'message' => 'answer submitted successfully'-->
<!--     ], Response::HTTP_CREATED);-->
<!-- }-->
<!--//AnswerRepository-->
<!--public function store(Request $request)-->
<!-- {-->
<!--     Question::find($request->question_id)->answers()->create([-->
<!--         'content' => $request->input('content'),-->
<!--         'user_id' => auth()->id()-->
<!--     ]);-->
<!-- }-->
<!--///////////////////////////////////////////////////// traite image-->
<!--public function create(StoreEmployeeRequest $request)-->
<!--{-->
<!--if ($request->image) {-->
<!--$this->createUpload($request);-->
<!--}-->
<!--Employee::create($request->validated());-->
<!--return response()->json(['message' => 'successfully'], Response::HTTP_CREATED);-->
<!--}-->
<!--//-->
<!--trait Upload-->
<!--{-->
<!--public function createUpload(StoreEmployeeRequest $request): void-->
<!--{-->
<!--$name = time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];-->
<!--Image::make($request->image)->save(public_path('img/public/') . $name);-->
<!--$request->merge(['image' => $name]);-->
<!--}-->
<!--public function existsFile(mixed $currentPhoto): void-->
<!--{-->
<!--$employeeImage = public_path('img/public/') . $currentPhoto;-->
<!--if (file_exists($employeeImage)) {-->
<!--@unlink($employeeImage);-->
<!--}-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////// service provider-->
<!--وقتی که برنامه ما اجرا میشه لاراول اول پرووایدر های ما لود میکنه و بعد برنامه اصلیمون میاد لود میکنه به این ترتیب وقتی برنامه اصلی لود شد هر چیزی که نیاز داره برای استفاده آمادست .-->
<!--هر چیزی غیر از بایند کردن باید توی متد بوت انجام بدید ، ، مثلا وقتی میخوایی از ایونت لیسنر ها استفاده کنی یا وقتی میخوایی از میدلور ها تو کدت استفاده کنی باید این کار توی متد بوت انجام بدی .-->
<!--/////////////////////////////////////////////////////////////////////////////////////// str-->
<!--strpos برای جستجو اول کارکتر داخل یک رشته بکار می رود و-->
<!--echo strpos(“hello world”,”world”); // 6-->
<!--///-->
<!--substr فقط کارکتر می شمارد حذف می کند بقیش حساب می کند-->
<!--echo substr(‘hello mohsen’,6); //ohsen-->
<!--///////////////////////////////////////////////////////////////////////////////////-->
<!--{} brace آکولاد     : colon-->
<!--[] bracket براکت  ; semicolon-->
<!--. dot-->
<!--/////////////////////////////////////////////////////////////////////////////////// call_user_func-->
<!--داخل متد ارگومان بفرس-->
<!--function x($value){-->
<!--echo “the $value”-->
<!--}-->
<!--call_func_user(‘x’,”mohsen”) // the mohsen-->
<!--/////////////////////////////////////////////////////////////////////////////////// FormRequest-->
<!--public function authorize()-->
<!--{-->
<!--return auth()->check();-->
<!--}-->
<!--//ProductController-->
<!--public function store(ProductRequest $request, Product $model)-->
<!--{-->
<!--$model->create($request->all());-->
<!--return redirect()->route('products.index')->withStatus('Product created.');-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////// cache کش-->
<!--php artisan cache :table-->
<!--cache driver:database-->
<!--Cache::put('key', 'value', $seconds);-->
<!--//-->
<!--فرض کنید می خواهید تمامی کاربران را از cache بازیابی نمایید یا در صورت عدم وجود کاربران مورد درخواست، آن ها را از پایگاه داده واکشی کرده و در cache ذخیره کنید-->
<!--Cache::rememberForever('users', function () {//تمام کاربرانی که در جدول کاربران وجود دارد در کش ذخیره کن-->
<!--return DB::table('users')->get();-->
<!--});-->
<!--// -->
<!--شمارش بازدید بعد اپدیت-->
<!--$viewCount = Cache::increment('viewCount');-->
<!--Article::query()->update(['viewCount' => $viewCount]);-->
<!---->
<!--///-->
<!--Cache::get('key');-->
<!--Cache::has('key');-->
<!--Cache::pull('key');-->
<!--///-->
<!--class FeeObserver-->
<!--{-->
<!--public function created(Fee $fee): void-->
<!--{-->
<!--cache()->forget('_fee_all_');-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// filterFiles-->
<!--مقادیر خالی در ارایه داده شده را حذف کنید-->
<!--protected function filterFiles($files)-->
<!--{-->
<!--if (! $files) {-->
<!--return;-->
<!--}-->
<!---->
<!--foreach ($files as $key => $file) {-->
<!--if (is_array($file)) {-->
<!--$files[$key] = $this->filterFiles($files[$key]);//کی های آرگومان دریافت شده در این متد را در متغیر بزار-->
<!--}-->
<!---->
<!--if (empty($files[$key])) { // اگر این ارگومان کی نداشت کی ان را حذف کن-->
<!--unset($files[$key]);-->
<!--}-->
<!--}-->
<!---->
<!--return $files;-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////////// user permission sql-->
<!--1a-users.sql-->
<!--CREATE TABLE `users` (-->
<!--`user_email` varchar(255) NOT NULL,-->
<!--`user_password` varchar(255) NOT NULL,-->
<!--`role_id` int(11) NOT NULL-->
<!--) ENGINE=InnoDB DEFAULT CHARSET=utf8;-->
<!---->
<!--ALTER TABLE `users`-->
<!--ADD PRIMARY KEY (`user_email`);-->
<!---->
<!--1b-database.sql-->
<!--CREATE TABLE `roles` (-->
<!--`role_id` int(11) NOT NULL,-->
<!--`role_name` varchar(255) NOT NULL-->
<!--) ENGINE=InnoDB DEFAULT CHARSET=utf8;-->
<!---->
<!--ALTER TABLE `roles`-->
<!--ADD PRIMARY KEY (`role_id`),-->
<!--ADD UNIQUE KEY `role_name` (`role_name`);-->
<!---->
<!--ALTER TABLE `roles`-->
<!--MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;-->
<!---->
<!--A3) PERMISSIONS TABLES-->
<!--1b-database.sql-->
<!--CREATE TABLE `permissions` (-->
<!--`perm_id` int(11) NOT NULL,-->
<!--`perm_mod` varchar(5) NOT NULL,-->
<!--`perm_desc` varchar(255) NOT NULL-->
<!--) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;-->
<!---->
<!--ALTER TABLE `permissions`-->
<!--ADD PRIMARY KEY (`perm_id`),-->
<!--ADD KEY `perm_mod` (`perm_mod`);-->
<!---->
<!--ALTER TABLE `permissions`-->
<!--MODIFY `perm_id` int(11) NOT NULL AUTO_INCREMENT;-->
<!---->
<!--A4) ROLE PERMISSIONS TABLES-->
<!--1b-database.sql-->
<!--CREATE TABLE `roles_permissions` (-->
<!--`role_id` int(11) NOT NULL,-->
<!--`perm_id` int(11) NOT NULL-->
<!--) ENGINE=InnoDB DEFAULT CHARSET=utf8;-->
<!---->
<!--ALTER TABLE `roles_permissions`-->
<!--ADD PRIMARY KEY (`role_id`,`perm_id`);-->
<!---->
<!--1c-dummy.sql-->
<!--INSERT INTO `roles` (`role_id`, `role_name`) VALUES-->
<!--(1, 'Administrator'),-->
<!--(2, 'Power User');-->
<!---->
<!--1c-dummy.sql-->
<!--INSERT INTO `permissions` (`perm_id`, `perm_mod`, `perm_desc`) VALUES-->
<!--(1, 'USR', 'Access users'),-->
<!--(2, 'USR', 'Create new users'),-->
<!--(3, 'USR', 'Update users'),-->
<!--(4, 'USR', 'Delete users');-->
<!---->
<!--1c-dummy.sql-->
<!--INSERT INTO `roles_permissions` (`role_id`, `perm_id`) VALUES-->
<!--(1, 1),-->
<!--(1, 2),-->
<!--(1, 3),-->
<!--(1, 4),-->
<!--(2, 1);-->
<!---->
<!---->
<!---->
<!--1c-dummy.sql-->
<!--INSERT INTO `users` (`user_email`, `user_password`, `role_id`) VALUES-->
<!--('john@doe.com', '123456', 1),-->
<!--('jane@doe.com', '123456', 2);-->
<!---->
<!---->
<!--$user = $DB->fetch(-->
<!--"SELECT * FROM `users` JOIN `roles` USING (`role_id`) WHERE `user_email`=?",-->
<!--[$_POST["email"]]-->
<!--);-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////// request is-->
<!--هرچه در متد می اید بگیر-->
<!--public function is(...$patterns)-->
<!--{-->
<!--$path = $this->decodedPath();-->
<!---->
<!--foreach ($patterns as $pattern) {-->
<!--if (Str::is($pattern, $path)) {-->
<!--return true;-->
<!--}-->
<!--}-->
<!---->
<!--return false;-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////// load loadCount append-->
<!--پست به همراه نویسندش به همراه کامنت های تایید شده وتعداد کامنتها و تعداد لایک های آن-->
<!--//showPostController-->
<!--public function show(Post $post)-->
<!--{-->
<!--$post->load(['user', 'categories', 'comments' => function($query) {-->
<!--return $query->where('comment_id', null)->where('is_approved', true);-->
<!--}])->loadCount('comments')->append('is_user_liked');-->
<!---->
<!--return view('post', compact('post'));-->
<!--}-->
<!--// Post-->
<!--public function likes()-->
<!--{-->
<!--return $this->belongsToMany(User::class, 'likes');-->
<!--}-->
<!--public function getIsUserLikedAttribute()-->
<!--{-->
<!--return $this->likes()->where('user_id', auth()->user()->id)->exists();-->
<!--}-->
<!---->
<!--//blade-->
<!--@auth-->
<!--<span class="single-page__like @if ($post->is_user_liked) single-page__like--is-active @endif"></span>-->
<!--@endauth-->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////// cors-->
<!--وقتی از ایجکس یا از فریمورک های جی اس درخواستی به سمت لاراول می آید مجوز دسترسی می خواهد-->
<!--public function handle($request, Closure $next) {-->
<!--$headers = [-->
<!--'Access-Control-Allow-Origin' =>' *',-->
<!--'Access-Control-Allow-Methods'=>' POST, GET, OPTIONS, PUT, DELETE',-->
<!--'Access-Control-Allow-Headers'=>' Content-Type, Accept,-->
<!--Authorization, X-Requested-With, Cache-Control' ];-->
<!--if($request->getMethod() == "OPTIONS") {-->
<!--return \Response::make('OK', 200, $headers);-->
<!--} $response = $next($request);-->
<!--foreach ($headers as $key => $value) {-->
<!--$response->header($key, $value); }-->
<!--return $response; }-->
<!--//middleware-->
<!--protected $middleware = [-->
<!---->
<!--\App\Http\Middleware\EnableCors::class,-->
<!--];-->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////// status order-->
<!--self::PAID=>'paid',-->
<!--self::PENDING=>'pending',-->
<!--self::DECLINED=>'Declined'-->
<!--/////////////////////////////////////////////////////////////////////////////////////// Response-->
<!--Informational responses (100–199)-->
<!--Successful responses (200–299)-->
<!--Redirection messages (300–399)-->
<!--Client error responses (400–499)-->
<!--Server error responses (500–599)-->
<!---->
<!---->
<!--//100-->
<!--continue-->
<!--//204-->
<!--برای destroy متد-->
<!--no content-->
<!--//301-->
<!---->
<!--ادرس دچار تغییر مسیر شده-->
<!--مثلا بزنیم-->
<!--google.com-->
<!--http://google.com-->
<!--//400-->
<!--bad request-->
<!--کاربر مثلا نامی را وارد کرده که وجود ندارد-->
<!--$publisher = \App\Models\UserPublisher::where('uid', $request->uid)->first();-->
<!--if(is_null($publisher))-->
<!--return response()->json(['status' => 'error', 'message' => 'کاربر مورد نظر یافت نشد'], 400);-->
<!---->
<!--//401-->
<!--unauthorized-->
<!--احراز هویت نکرده-->
<!--//403-->
<!--forbidden-->
<!--مجوز دسترسی ندارد-->
<!--if ($request->uid != $campaign->User->uid)-->
<!--return response()->json(['status' => 'error', 'permission denied', 403]);-->
<!--//405-->
<!--متد غیر مجاز-->
<!--فرض کنیم ادرسی که داریم با متد پست باشد ولی کاربر از متد گت استفاده کند-->
<!--post rout-->
<!--//422-->
<!--ریکوئست غلط وارد شده-->
<!--public function handle(Request $request, Product $product)-->
<!--{-->
<!--if ($request->user()->city !== $product->city) {-->
<!--abort(422, 'product can not be shipped to you');-->
<!--}-->
<!--$this->next($request, $product);-->
<!--}-->
<!--//404-->
<!--not found-->
<!--//429-->
<!--rate limit-->
<!--if ($token->retry < 0)-->
<!--{-->
<!--$token->delete();-->
<!--return response()->json(['status' => 'error', "message" => 'شما بیش از سه بار کد اشتباه فرستادید، لطفا مجددا درخواست ارسال کد نمایید.'], 429);-->
<!--}-->
<!---->
<!--//500-->
<!--server-->
<!--//503-->
<!--سرویس خارج از دسترس-->
<!--انواع تست ها و تفاوت انها-->
<!--تفاوت اتورایزشن با اتنتیکیشن -->
<!--میدلور و ساختار آن می توانیم برای رسپانس هاا تغییرات اعمال کنیم-->
<!--///////////////////////////////////////////////////// attach belongs to  many-->
<!--//answer belongsto quastion-->
<!--//AnswerRepository-->
<!--public function store(Request $request)-->
<!-- {-->
<!--     Question::find($request->question_id)->answers()->create([-->
<!--         'content' => $request->input('content'),-->
<!--         'user_id' => auth()->id()-->
<!--     ]);-->
<!-- }-->
<!--//comment belongsto post-->
<!--{-->
<!--Post::find($request->post_id)->comments()->create([-->
<!--content=>$request->input(content)-->
<!--])-->
<!--}-->
<!--///-->
<!--$comment = new Comment; -->
<!--$comment->body = $request->get('comment_body');-->
<!---->
<!--$post = Post::find($request->get('post_id')); -->
<!--$post->comments()->save($comment);-->
<!---->
<!--///-->
<!--داخل پست کتگوری انتخاب کردی باید اتچ کنی ایدی انتخابی رو به مدل کتگوری-->
<!---->
<!---->
<!---->
<!---->
<!--الوکوینت همچنین روش‌هایی را برای راحت‌تر کردن کار با روابط چند به چند ارائه می‌کند. به عنوان مثال، بیایید تصور کنیم یک کاربر می تواند نقش های زیادی داشته باشد و یک نقش می تواند کاربران زیادی داشته باشد. می توانید از روش پیوست برای پیوست کردن یک نقش به کاربر با درج یک رکورد در جدول میانی رابطه استفاده کنید:-->
<!---->
<!--کاربر در فرزند پدر صدا زد اول پدر فایند میشه بعد اتچ میشه-->
<!--// ProductController-->
<!--class ProductController extends Controller {-->
<!--public function create(Request $request) {-->
<!--$product = new Product;-->
<!--$product->name = 'God of War';-->
<!--$product->save();-->
<!--$category = Category::find([3, 4]);-->
<!--$product->categories()->attach($category); return 'Success'; } }-->
<!---->
<!---->
<!--// ProductController.php-->
<!--public function removeCategory(Product $product) {-->
<!--$category = Category::find(3);-->
<!--$product->categories()->detach($category);-->
<!--///-->
<!--qastion hasmany answer-->
<!--///AnswerController-->
<!--public function store(Request $request): JsonResponse-->
<!--{-->
<!--$user = Auth::user();-->
<!--$request->validate([-->
<!--'content' => 'required',-->
<!--'question_id' => 'required',-->
<!--]);-->
<!---->
<!---->
<!--$this->answer->store($request);-->
<!--if (Question::find($request->input('question_id'))->user_id !== $user) {-->
<!--auth()->user()->increment('score', 10);-->
<!--}-->
<!--return \response()->json([-->
<!--'message' => 'answer submitted successfully'-->
<!--], Response::HTTP_CREATED);-->
<!--}-->
<!--//AnswerRepository-->
<!--public function store(Request $request)-->
<!--{-->
<!--Question::find($request->question_id)->answers()->create([-->
<!--'content' => $request->input('content'),-->
<!--'user_id' => auth()->id()-->
<!--]);-->
<!--}-->
<!--//-->
<!--use App\Models\Comment;-->
<!--use App\Models\Post;-->
<!--$comment = new Comment([-->
<!--'message' => 'A new comment.'-->
<!--]);-->
<!--$post = Post::find(1);-->
<!--$post->comments()->save($comment);-->
<!--///-->
<!--use App\Models\Post;-->
<!--$post = Post::find(1);-->
<!--$comment = $post->comments()->create([-->
<!--'message' => 'A new comment.',-->
<!--]);-->
<!--///-->
<!--$user = User::find(1);-->
<!--$user->roles()->attach($roleId);-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////// refresh()-->
<!--متدهای save و saveMany نمونه‌های مدل داده‌شده را حفظ می‌کنند، اما مدل‌های تازه باقی‌مانده‌شده را به هیچ‌یک از روابط درون حافظه‌ای که قبلاً روی مدل والد بارگذاری شده‌اند اضافه نمی‌کنند. اگر قصد دارید پس از استفاده از روش‌های save یا saveMany به رابطه دسترسی پیدا کنید، ممکن است بخواهید از روش refresh برای بارگذاری مجدد مدل و روابط آن استفاده کنید-->
<!--$post->comments()->save($comment);-->
<!---->
<!--$post->refresh();-->
<!---->
<!--// All comments, including the newly saved comment...-->
<!--$post->comments;-->
<!--//////////////////////////////////////////////////////////////////////////////////// touch belongsto-->
<!--برای مثال، هنگامی که یک مدل نظر به‌روزرسانی می‌شود، ممکن است بخواهید به‌طور خودکار مهر زمانی updated_at پست مالک را «لمس» کنید تا روی تاریخ و زمان فعلی تنظیم شود. برای انجام این کار، می‌توانید ویژگی touches را به مدل فرزندتان اضافه کنید که حاوی نام روابطی است که باید با به‌روزرسانی مدل فرزند، مهرهای زمانی updated_at به‌روزرسانی شود:-->
<!--class Comment extends Model-->
<!--{-->
<!--protected $touches = ['post'];-->
<!--public function post()-->
<!--{-->
<!--return $this->belongsTo(Post::class);-->
<!--}-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////////////////////// session-->
<!--session_start()-->
<!--session_unset()-->
<!--session_destroy()-->
<!--///-->
<!--public function logout(Request $request){-->
<!--session(['LOG'=>'OUT']);-->
<!--$admin=$this->guard()->user();-->
<!--if(!empty($admin)){-->
<!--$this->guard()->logout();-->
<!--}-->
<!--}-->
<!--////////////////////////////////////////////////////////////////// design pattern-->
<!--دیزاین پترن-->
<!--استراتژی-->
<!--مثلاً اگر ارزش سبد خرید کاربر کمتر از 500/000 ریال بود، پردازش تراکنش با استفاده از سرویس پرداخت پِی‌پَل انجام خواهد شد اما اگر ارزش سبد خرید 500/000 ریال یا بیشتر بود، تراکنش با استفاده از یک کارت اعتباری انجام خواهد شد.-->
<!---->
<!--ادپتور-->
<!--دیزاین پترن اِدَپتر یک الگوی طراحی است که این امکان را در اختیار دولوپرها قرار می‌دهد تا بتوانند از طریق اینترفیس کلاسی دیگر به اینترفیس کلاس مد نظر خود دسترسی داشته و بدین ترتیب اتربیوت‌ها و متدهای آن را در کلاس مذکور مورد استفاده قرار دهند-->
<!--در شرایطی که قصد داریم اپلیکیشنی توسعه دهیم که برای انجام تَسک‌های مد نظر نیازمند برقراری ارتباط با وب‌سرویس است، اپلیکیشن خود نیز اِعمال کنیم.-->
<!--برای استفاده کافیست کلاس اداپتر برای کلاس مدنظر بسازید و از اینترفیس متعلق به اداپتور استفاده کنید حالا براحتی می توانید نام متد را در مواقع خاص در کلاس اصلی و کلاس اداپتور تغییر دهید-->
<!---->
<!--دکوراتور-->
<!--دکوراتور یک الگوی طراحی است که این امکان را برای دولوپرها فراهم می‌آورد تا بتوانند یکسری فیچر مد نظر خود را به آبجکت منحصربه‌فردی از یک کلاس اضافه کنند به طوری که این رفتار روی سایر آبجکت‌های ساخته‌شده از کلاس مذکور اِعمال نشود-->
<!--در آن قصد داریم تا کلاسی را پیاده‌سازی کنیم که وظیفۀ تولید محتوایِ ایمیل را دارا است به طوری که این کلاس قابلیت ارسال ایمیل با دو متن متفاوت را علاوه بر متن پیش‌فرض خود داشته باشد و همچنین رفتار آبجکت ساخته‌شده از روی کلاس مذکور روی آبجکت دیگری از همان كلاس تأثیری نداشته باشد که برای این منظور از الگوی طراحی دکوراتور استفاده می‌کنیم.-->
<!---->
<!---->
<!--فساد-->
<!--با استفاده از دیزاین پترن فِساد یک کلاسی می‌سازیم که امکان ارجاع به تمامی کلاس‌های اپلیکیشن را داشته و در نهایت می‌توانیم متدهای مد نظر خود را از طریق تنها یک متد فراخوانی کنیم که این امر منجر به کاهش پیچیدگی ساختار سیستم می‌شود-->
<!---->
<!---->
<!--تمپلیت-->
<!--ه منظور کاهش کدهای مشابه در هر یک از کلاس‌های اپلیکیشن و انتقال آن‌ها به کلاس تمپلیت مورد استفاده قرار می‌گیرد به طوری که کلاس‌های مذکور ویژگی‌های مشابه را از آن ارث‌بری می‌کنند که این امر منجر به سادگی سورس‌کد می‌شود-->
<!--ابستراکت می سازیم دو تا کلاس از آن اکستند میکینیم بعد از کلاس مربوطه آبجکت میگیریم و در متد ابستراک میزاریم-->
<!---->
<!---->
<!--سینگلتون-->
<!--دیزاین پترن سینگلتون به منظور محدودسازی امکان ساخت آبجکت‌ از روی برخی کلاس‌های پرهزینه مورد استفاده قرار می‌گیرد به طوری که پیاده‌سازی این الگوی طراحی در اپلیکیشن مد نظر از یکسو منجر به صرفه‌جویی در ریسورس‌هایی همچون مموری سیستم شده و از سوی دیگر سرعت اجرای آن را بهبود می‌بخشد-->
<!--متد استاتیک می نویسیم که در آن اگر آبجکت دیتابیس استفاده شده باشد از آن استفاده کند در غیر اینصورت ابجکت جدید استفاده کند-->
<!---->
<!--استیت-->
<!--از الگوی طراحی state در شرایط زیر استفاده می‌شود:-->
<!---->
<!--· پیاده سازی ابزارهای گرافیکی-->
<!---->
<!--· اشیائی که با توجه به موقعیت فعلی ، رفتار کنند و در زمان اجرا تغییر کنند.-->
<!--· اشیائی که در حال پیچیده شدن هستند و شرط های زیادی دارند.-->
<!--· هنگامی که تعداد کدهای تکراری در حالت های مشابه زیاد شوند و انتقال state ها مبتنی بر شرایط باشد.-->
<!---->
<!---->
<!--چین اف ریسپانسیبیلیتی-->
<!--میخواهیم یک سیستم ثبت سفارش ساده داشته باشیم که در آن کاربر محصولی را خرید میکند و برای آن در سیستم ما یک سفارش ثبت می شود.-->
<!--هنگامی که کاربر درخواست خرید یک محصول را می کند سوال های زیر پرسیده میشود:-->
<!--• آیا ارسال به شهر کاربر امکان پذیر است؟-->
<!--اگر نیست فرآیند را متوقف کن.-->
<!--• آیا محصول در انبار موجود است؟-->
<!--اگر هست یکی از آن کم کن و اگر نیست فرآیند خرید را متوقف کن.-->
<!--• آیا کاربر موجودی کافی دارد؟-->
<!--اگر دارد مبلغ محصول را از موجودی او کم کن در غیر این صورت فرآیند خرید را متوقف کن.-->
<!--اگر پاسخ همه این سوال ها مثبت بود باید یک رکورد در جدول سفارشات ثبت کنیم-->
<!--کامپوزیت-->
<!--الگوی طراحی کامپوزیت جایی استفاده می‌شود که بخواهیم با مجموعه ای از اشیا همانند یک شیئ برخورد کنیم-->
<!--فرض کنید در یک سایت دوره‌های آموزشی، نیاز به صفحه‌ای دارید تا از طریق آن دوره‌های جدید را اضافه کنید-->
<!--رابطه ی درختی را نمایش دهید-->
<!---->
<!--ویزیتور-->
<!--می ‌خواهیم به کلاس یا کامپوننتی از برنامه ی خود ویژگی ای را اضافه کنیم ولی به هر دلیلی نمی ‌توانیم این قابلیت را زیرمجموعه ی کلاس مربوطه قرار دهیم-->
<!--فرض کنید مدیر پروژه از شما می ‌خواهد کدی به برنامه اضافه کنید که هزینه ی دستمزد شرکت‌ها به همراه هزینه ی تفکیک شده ی هر دپارتمان زیر مجموعه ی این شرکت‌ها را به عنوان یک گزارش خروجی بدهد-->
<!--/////////////////////////////////////////////////////////////////////////////////////// image repository-->
<!--//CreateUpdateCompanyRequest-->
<!--public function rules()-->
<!--{-->
<!--$rules = [-->
<!--'image' => 'required|image|max:1024',-->
<!--];-->
<!---->
<!---->
<!--if($this->method() == 'PUT')-->
<!--$rules['image'] = 'nullable|image|max:1024';-->
<!--return $rules;-->
<!--}-->
<!--//Controller-->
<!--public function store(CreateUpdateCompanyRequest $request)-->
<!--{-->
<!--$company = $this->companyService->createCompany($request->validated(), $request->image);-->
<!---->
<!---->
<!--CompanyCreatedJob::dispatch($company->email)->onQueue(env('QUEUE_EMAIL'));-->
<!--return new CompanyResource($company);-->
<!--}-->
<!--//-->
<!--public function createNewCompany(array $data, UploadedFile $image)-->
<!--{-->
<!--$path = $this->uploadImage($image);-->
<!--$data['image'] = $path;-->
<!--return $this->repository->create($data);-->
<!--}-->
<!--public function updateCompany(string $uuid, array $data, UploadedFile $image = null)-->
<!--{-->
<!--$company = $this->getCompanyByUuid($uuid);-->
<!--if(isset($image)) {-->
<!--if(Storage::exists($company->image))-->
<!--Storage::delete($company->image);-->
<!--$path = $this->uploadImage($image);-->
<!--$data['image'] = $path;-->
<!--}-->
<!--$company->update($data);-->
<!--return $company;-->
<!--}-->
<!--//-->
<!--class CompanyResource extends JsonResource-->
<!--{-->
<!--public function toArray($request)-->
<!--{-->
<!--return [-->
<!--'name' => $this->name,-->
<!--'category' => new CategoryResource($this->category),-->
<!--'image' => url("storage/{$this->image}"),-->
<!--];-->
<!--}-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////////////////// repository Resource-->
<!--public function toArray($request)-->
<!--{-->
<!--return [-->
<!--'category' => new CategoryResource($this->category),-->
<!--'url' => $this->url,-->
<!--'image' => url("storage/{$this->image}"),-->
<!--];-->
<!--}-->
<!--public function index(Request $request)-->
<!--{-->
<!--$filter = $request->get('filter', '');-->
<!--$companies = $this->companyService->getCompanies($filter);-->
<!--return CompanyResource::collection($companies);-->
<!--}-->
<!---->
<!--public function store(CreateUpdateCompanyRequest $request)-->
<!--{-->
<!--$company = $this->companyService->createNewCompany($request->validated(), $request->image);-->
<!--CompanyCreatedJob::dispatch($company->email)->onQueue(env('QUEUE_EMAIL'));-->
<!--return new CompanyResource($company);-->
<!--}-->
<!--public function destroy($uuid)-->
<!--{-->
<!--$this->companyService->deleteCompany($uuid);-->
<!---->
<!--return response()->json([], 204);-->
<!--}-->
<!--// Repository-->
<!--protected $repository;-->
<!---->
<!--public function __construct(Company $model)-->
<!--{-->
<!--$this->repository = $model;-->
<!--}-->
<!--public function getCompanies(string $filter = '')-->
<!--{-->
<!--return $this->repository->getCompanies($filter);-->
<!--}-->
<!--private function uploadImage(UploadedFile $image)-->
<!--{-->
<!--return $image->store('companies');-->
<!--}-->
<!--public function createNewCompany(array $data, UploadedFile $image)-->
<!--{-->
<!--$path = $this->uploadImage($image);-->
<!--$data['image'] = $path;-->
<!--return $this->repository->create($data);-->
<!--}-->
<!--public function getCompanyByUuid(string $uuid = null)-->
<!--{-->
<!--return $this->repository->where('uuid', $uuid)->firstOrFail();-->
<!--}-->
<!--public function updateCompany(string $uuid, array $data, UploadedFile $image = null)-->
<!--{-->
<!--$company = $this->getCompanyByUuid($uuid);-->
<!---->
<!--if (isset($image)) {-->
<!--if (Storage::exists($company->image))-->
<!--Storage::delete($company->image);-->
<!--$path = $this->uploadImage($image);-->
<!--$data['image'] = $path;-->
<!--}-->
<!--$company->update($data);-->
<!--return $company;-->
<!--}-->
<!--public function deleteCompany(string $uuid)-->
<!--{-->
<!--$company = $this->getCompanyByUuid($uuid);-->
<!--if (Storage::exists($company->image))-->
<!--Storage::delete($company->image);-->
<!--return $company->delete();-->
<!--}-->
<!--//CompanyCreatedJob-->
<!--public function __construct(string $email)-->
<!--{-->
<!--$this->email = $email;-->
<!--}-->
<!--protected $email;-->
<!--public function handle()-->
<!--{-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////////////////// X-Client-Device-ID'-->
<!--گرفتن دیوایس کاربر که با گوشی هست یا کامپیوتر وارد وبسایت شده-->
<!--function deviceId()-->
<!--{-->
<!--return request()->headers->get('X-Client-Device-ID');-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////////////////// seen-->
<!--گرفتن ساعت اخرین لاگین-->
<!--php artisan make:migration add_login_fields_to_users_table-->
<!--Then we fill it with these fields:-->
<!--class AddLoginFieldsToUsersTable extends Migration-->
<!--{-->
<!-- public function up()-->
<!-- {-->
<!--     Schema::table('users', function (Blueprint $table) {-->
<!--         $table->datetime('last_login_at')->nullable();-->
<!--         $table->string('last_login_ip')->nullable();-->
<!--     });-->
<!-- }-->
<!--//User-->
<!--class User extends Authenticatable-->
<!--{-->
<!-- protected $fillable = [-->
<!--     'email',-->
<!--     'password',-->
<!--     'name',-->
<!--     'last_login_at',-->
<!--     'last_login_ip',-->
<!-- ];-->
<!--//-->
<!--app/Http/Controllers/Auth/LoginController.php:-->
<!--function authenticated(Request $request, $user)-->
<!--{-->
<!-- $user->update([-->
<!--     'last_login_at' => Carbon::now()->toDateTimeString(),-->
<!--     'last_login_ip' => $request->getClientIp()-->
<!-- ]);-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////////////////// hide download-->
<!--مخفی کردن دانلود عکس-->
<!--https://github.com/webpatser/laravel-uuid-->
<!--Schema::create('books', function (Blueprint $table) {-->
<!--     $table->increments('id');-->
<!--     $table->uuid('uuid')->nullable();-->
<!--     $table->string('title');-->
<!--     $table->string('cover')->nullable();-->
<!--     $table->timestamps();-->
<!-- });-->
<!--//-->
<!--Route::resource('books', 'BookController');-->
<!--Route::get('books/{uuid}/download', 'BookController@download')->name('books.download');-->
<!--//-->
<!--use Webpatser\Uuid\Uuid;-->
<!---->
<!--public function store(Request $request)-->
<!--{-->
<!-- $book = $request->all();-->
<!-- $book['uuid'] = (string)Uuid::generate();-->
<!-- if ($request->hasFile('cover')) {-->
<!--     $book['cover'] = $request->cover->getClientOriginalName();-->
<!--     $request->cover->storeAs('books', $book['cover']);-->
<!-- }-->
<!-- Book::create($book);-->
<!-- return redirect()->route('books.index');-->
<!--}-->
<!--public function download($uuid)-->
<!--{-->
<!-- $book = Book::where('uuid', $uuid)->firstOrFail();-->
<!-- $pathToFile = storage_path('app/books/' . $book->cover);-->
<!-- return response()->download($pathToFile);-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////// upload multiple image-->
<!--public function store(Request $request)-->
<!--{-->
<!--if(!$request->hasFile('fileName')) {-->
<!--return response()->json(['upload_file_not_found'], 400);-->
<!--}-->
<!--$allowedfileExtension=['pdf','jpg','png'];-->
<!--$files = $request->file('fileName');-->
<!--$errors = [];-->
<!--foreach ($files as $file) {-->
<!--$extension = $file->getClientOriginalExtension();-->
<!--$check = in_array($extension,$allowedfileExtension);-->
<!--if($check) {-->
<!--foreach($request->fileName as $mediaFiles) {-->
<!--$path = $mediaFiles->store('public/images');-->
<!--$name = $mediaFiles->getClientOriginalName();-->
<!--//store image file into directory and db-->
<!--$save = new Image();-->
<!--$save->title = $name;-->
<!--$save->path = $path;-->
<!--$save->save();-->
<!--}-->
<!--} else {-->
<!--return response()->json(['invalid_file_format'], 422);-->
<!--}-->
<!---->
<!--return response()->json(['file_uploaded'], 200);-->
<!---->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////// sort search-->
<!--public function backend(Request $request)-->
<!--{-->
<!--$page = $request->input('page', 1);-->
<!---->
<!--/** @var Collection $products */-->
<!--$products = \Cache::remember('products_backend', 30 * 60, fn() => Product::all());-->
<!---->
<!--if ($s = $request->input('s')) {-->
<!--$products = $products-->
<!--->filter(-->
<!--fn(Product $product) => Str::contains($product->title, $s) || Str::contains($product->description, $s)-->
<!--);-->
<!--}-->
<!---->
<!--$total = $products->count();-->
<!---->
<!--if ($sort = $request->input('sort')) {-->
<!--if ($sort === 'asc') {-->
<!--$products = $products->sortBy([-->
<!--fn($a, $b) => $a['price'] <=> $b['price']-->
<!--]);-->
<!--} else if ($sort === 'desc') {-->
<!--$products = $products->sortBy([-->
<!--fn($a, $b) => $b['price'] <=> $a['price']-->
<!--]);-->
<!--}-->
<!--}-->
<!---->
<!--return [-->
<!--'data' => $products->forPage($page, 9)->values(),-->
<!--'meta' => [-->
<!--'total' => $total,-->
<!--'page' => $page,-->
<!--'last_page' => ceil($total / 9)-->
<!--]-->
<!--];-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////////////////////// swagger-->
<!--سواگر-->
<!--/**-->
<!--* @OA\Post(-->
<!--* path="/v1/category",-->
<!--* tags={"category"},-->
<!--* @OA\Parameter(name="X-Client-Name",-->
<!--* in="header",-->
<!--* required=false,-->
<!--* @OA\Schema(type="string")-->
<!--* ),-->
<!--* @OA\Parameter(name="X-Client-Device-ID",-->
<!--* in="header",-->
<!--* required=false,-->
<!--* @OA\Schema(type="string")-->
<!--* ),-->
<!--* @OA\Response(response="200",-->
<!--* response=200,-->
<!--* description="get categories",-->
<!--* @OA\JsonContent(-->
<!--* ref="#/components/schemas/category"-->
<!--* ),-->
<!--* )-->
<!--* )-->
<!--*/-->
<!--////////////////////////////////////////////////////////////////////////////////////// dirname-->
<!--به دایرکتوری دو پوشه قبل برگرد-->
<!--env/Utilities/env.php-->
<!--public static function path()-->
<!--{-->
<!--return dirname(__FILE__, 3) . '/.env';-->
<!--}-->
<!--////////////////////////////////////////////////////////////////////////////////////// PHP_EOL-->
<!--example example-->
<!--define('PHP_EOL', "\n");-->
<!--////////////////////////////////////////////////////////////////////////////////////// algoritm الگوریتم-->
<!--/// صفرها اخر ارایه قرار بگیرن-->
<!--public function endZero()-->
<!--{-->
<!--$arr = [1, 0, 2, 3, 5, 0, 2];-->
<!--$filterArray = array_filter($arr, function ($value) {-->
<!--return $value != 0; //1 2 3 5 2-->
<!--});-->
<!--$zero = array_filter($arr, function ($value) {-->
<!--return $value === 0; // 0 0-->
<!--});-->
<!--print_r ($filterArray + $zero );-->
<!--}-->
<!---->
<!--/// جمع ارایه-->
<!--public function total($n = 10)-->
<!--{-->
<!--$total = 0;-->
<!--for ($i = 0; $i <= $n; $i++) {-->
<!--$total += $i;-->
<!--}-->
<!--return $total;-->
<!---->
<!--// return $n*($n+1)/2;-->
<!--}-->
<!---->
<!---->
<!--اگر مجموع دو تا ایتم برابر ۳ بود-->
<!--public function index()-->
<!--{-->
<!--$data = [0, 3, 1, 2, 1];-->
<!--$check = [];-->
<!--// if sum 2 element =3-->
<!--foreach ($data as $key => $value) {-->
<!--foreach ($data as $key1 => $value1) {-->
<!--if ($value + $value1 == 3 || $value == 3 || $value1 == 3 || $value - $value1 == 3) {//-->
<!--$check[] = $value . '+' . $value1 . '=3';//-->
<!--}-->
<!--}-->
<!--}-->
<!--print_r($check);-->
<!--}-->
<!---->
<!--function deleteCookie($key = [])-->
<!--{-->
<!--if ($key == []) {-->
<!--$length = (count($_COOKIE));-->
<!--if ($length != 0) {-->
<!--foreach (($_COOKIE) as $key => $item) {-->
<!--if (isset($_COOKIE[$key])) {-->
<!--unset($_COOKIE[$key]);-->
<!--setcookie($key, null, -1, '/');-->
<!--}-->
<!--}-->
<!--}-->
<!--}-->
<!--function getCookie($key = null)-->
<!--{-->
<!--if ($key == []) {-->
<!--return $_COOKIE;-->
<!--}-->
<!--if (array_key_exists($key, $_COOKIE)) {-->
<!--return $_COOKIE[$key];-->
<!--}-->
<!--return null;-->
<!--}-->
<!--///-->
<!--function array_set(&$array, $key, $value)-->
<!--{-->
<!--if (is_null($key)) { // اگر کلید نداشته باشد تمام آرایه را باز گرداند-->
<!--return $array = $value;-->
<!--}-->
<!---->
<!--$keys = explode('.', $key);-->
<!---->
<!--foreach ($keys as $i => $key) {-->
<!--if (count($keys) === 1) {-->
<!--break;-->
<!--}-->
<!---->
<!--unset($keys[$i]);-->
<!---->
<!--// If the key doesn't exist at this depth, we will just create an empty array-->
<!--// to hold the next value, allowing us to create the arrays to hold final-->
<!--// values at the correct depth. Then we'll keep digging into the array.-->
<!--if (!isset($array[$key]) || !is_array($array[$key])) {-->
<!--$array[$key] = [];-->
<!--}-->
<!---->
<!--$array = &$array[$key];-->
<!--}-->
<!---->
<!--$array[array_shift($keys)] = $value;-->
<!---->
<!--return $array;-->
<!--}-->
<!--/// دیتا درون فایل را فراخوانی کن-->
<!--public static array $data = [];-->
<!--public static bool $loaded = false;-->
<!--public static function load()-->
<!--{-->
<!--if (self::$loaded) return;-->
<!--self::$loaded = true;-->
<!--if (!file_exists(self::path())) return;-->
<!--$content = file_get_contents(self::path());-->
<!---->
<!--foreach (explode(PHP_EOL, $content) as $line) {-->
<!--$line = trim($line);-->
<!--if (strlen($line) == 0) continue;-->
<!--if ($line[0] == '#') continue;-->
<!--$ex = explode('=', $line);-->
<!--self::$data[$ex[0]] = trim($ex[1], '\'"');-->
<!--}-->
<!--}-->
<!--/// جمع بستن جدول براساس اخرین کلمه آن-->
<!--function pluralize($singular, $plural = null)-->
<!--{-->
<!--if ($plural !== null) return $plural;-->
<!---->
<!--$last_letter = strtolower($singular[strlen($singular) - 1]);-->
<!--switch ($last_letter) {-->
<!--case 'y':-->
<!--return substr($singular, 0, -1) . 'ies';-->
<!--case 's':-->
<!--return $singular . 'es';-->
<!--default:-->
<!--return $singular . 's';-->
<!--}-->
<!--}-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////////// sms array to user-->
<!--ارسال ارایه خاص به شماره موبایل کاربر-->
<!--protected static $listOfVerification = [-->
<!--'deBaresi' => "%token عزیز، سفارش شما باشماره سفارش %token2 ثبت شد و پس از بررسی برای جمع آوری فرستاده خواهد شد.-->
<!--https://technosun.ir",-->
<!---->
<!--'takmiltahvilpost' => "%token عزیز، سفارش شما با شماره سفارش %token2 تحویل مامور ارسال داده شد.-->
<!--https://technosun.ir",-->
<!---->
<!--"dhanjam" => "%token عزیز، سفارش شما با شماره سفارش %token2 بررسی و برای جمع آوری فرستاده شده است.-->
<!--https://technosun.ir",-->
<!---->
<!--];-->
<!--public static function sendCustomVerification($mobile, $template, $token1 = '', $token2 = '', $token3 = ''): array-->
<!--{-->
<!--$listOfVerification = self::$listOfVerification;-->
<!--if (!isset($listOfVerification[$template])) {-->
<!--$err = "template $template not found";-->
<!--Log::debug($err);-->
<!--return [-->
<!--'status' => false,-->
<!--'message' => $err,-->
<!--];-->
<!--}-->
<!--$message = str_replace([-->
<!--'%token2',-->
<!--'%token3',-->
<!--'%token',-->
<!--], [-->
<!--$token2,-->
<!--$token3,-->
<!--$token1,-->
<!--], $listOfVerification[$template]);-->
<!--return self::send($mobile, $message);-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--///اگر شماره موبایل از نوع ارایه بود بده در غیر اینصورت ارایه شماره موبایل بده-->
<!--$receptor = is_array($mobile) ? $mobile : [$mobile];-->
<!---->
<!---->
<!--/// گرفتن ابجکت-->
<!--get_object_vars()-->
<!--///-->
<!--Str::snake _-->
<!--Str::camel aA-->
<!--ob_start ذخیره در بافر-->
<!--ob_flush پاک کردن بافر-->
<!--ob_get_length گرفتن طول بافر-->
<!--ob_get_contents گرفتن محتوا بافر-->
<!---->
<!--///-->
<!--////////////////////////////////////////////////////////////////////////////////////// algoritm-->
<!--public function index()-->
<!--{-->
<!--$data = [0, 3, 1, 2, 1];-->
<!--$check = [];-->
<!--// if sum 2 element =3-->
<!--foreach ($data as $key => $value) { //0-->
<!--foreach ($data as $key1 => $value1) { //3-->
<!--if ($value + $value1 == 3 || $value == 3 || $value1 == 3 || $value - $value1 == 3) {//-->
<!--$check[] = $value . '+' . $value1 . '=3';//-->
<!--}-->
<!--}-->
<!--}-->
<!--print_r($check);-->
<!--}-->
<!--///////////////////////////////base 64 storage-->
<!--     $image = $request->image;  // your base64 encoded-->
<!--     $image = str_replace('data:image/png;base64,', '', $image);-->
<!--     $image = str_replace(' ', '+', $image);-->
<!--     $imageName = str_random(10).'.'.'png';-->
<!--     \File::put(storage_path(). '/' . $imageName, base64_decode($image));-->
<!--///-->
<!--public static function base64ToFile($base64, $path, $width = 400, $height = 400)-->
<!--{-->
<!--$image = str_replace('data:image/png;base64,', '', $base64);-->
<!--$image = str_replace(' ', '+', $image);-->
<!--$imageName = md5(rand(11111, 99999)) . '_' . time() . '.jpg';-->
<!--$path = $path . $imageName;-->
<!--$input = File::put($path, base64_decode($image));-->
<!--$image = Image::make($path)->resize($width, $height);-->
<!--$result = $image->save($path);-->
<!---->
<!--return $imageName;-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////// encode base 64-->
<!--$image = base64_encode(file_get_contents($request->file('image')));-->
<!--$image = base64_encode(file_get_contents($request->file('image')->path()));-->
<!---->
<!---->
<!--public function postTest() {-->
<!--$data = Input::all();-->
<!--$png_url = "product-".time().".png";-->
<!--$path = public_path().'img/designs/' . $png_url;-->
<!---->
<!---->
<!--Image::make(file_get_contents($data->base64_image))->save($path);-->
<!--$response = array(-->
<!--'status' => 'success',-->
<!--);-->
<!--return Response::json( $response );-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////// base 64-->
<!--public function sendFile(Request $request)-->
<!-- {-->
<!--     if($request->has('file') && strpos($request->file, ';base64')){-->
<!--         $base64 = $request->file;-->
<!--         //obtem a extensão-->
<!--         $extension = explode('/', $base64);-->
<!--         $extension = explode(';', $extension[1]);-->
<!--         $extension = '.'.$extension[0];-->
<!--         //gera o nome-->
<!--         $name = time().$extension;-->
<!--         //obtem o arquivo-->
<!--         $separatorFile = explode(',', $base64);-->
<!--         $file = $separatorFile[1];-->
<!--         $path = 'public/base64-files/';-->
<!--         //envia o arquivo-->
<!--         Storage::put($path.$name, base64_decode($file));-->
<!---->
<!--         return response()-->
<!--         ->json(['content' => ['file' => $name], 'Message' => 'Arquivo enviado com sucesso'], 201);-->
<!---->
<!--     }else{-->
<!--         return response()-->
<!--         ->json(['message' => 'Envie o atributo file no formato base64'], 422);-->
<!--     }-->
<!-- }-->
<!--////////////////////////////////////////////////////////-->
<!--توی کنترلر-->
<!--$image_name = ImageService::uploadImageFile(-->
<!--         $request->file('file'),-->
<!--         Post::getPublicDirectory()-->
<!--     );-->
<!--مدل-->
<!-- public static function getImageDirectory()-->
<!-- {-->
<!--     return '/images/posts/';-->
<!-- }-->
<!-- public static function getPublicDirectory()-->
<!-- {-->
<!--     return public_path() . static::getImageDirectory();-->
<!-- }-->
<!--///////////////////////////////////////////////////////////////////////////////////// base64-->
<!--public function store(Request $request){-->
<!--if ($request->photo) {-->
<!--$name = time() . '.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];-->
<!--Image::make($request->photo)->save(public_path('img/public/') . $name);//مکان-->
<!--$request->merge(['photo' => $name]);-->
<!--}-->
<!--Employee::create($request->all());-->
<!--}-->
<!--}-->
<!--///////////////////////////////////////////////////// base 64-->
<!--public function store(Request $request) { -->
<!--if ($request->image) { -->
<!--$folderPath = "uploads/";-->
<!--$base64Image = explode(";base64,", $request->image);-->
<!--$explodeImage = explode("image/", $base64Image[0]); -->
<!--$imageType = $explodeImage[1];-->
<!--$image_base64 = base64_decode($base64Image[1]); -->
<!--$file = $folderPath . uniqid() . '. '.$imageType; file_put_contents($file, $image_base64); } }-->
<!--//////////////////////////////////////////////// upload image-->
<!--///Controller-->
<!--public function store(Request $request){-->
<!--$product = new Product(); -->
<!--$product ->name = $request->input('name');-->
<!--$product ->price = $request->input('price');-->
<!--$product ->image=$request->input('image'); -->
<!--if($request->hasFile('image')) { -->
<!--$file = Input::file('image'); -->
<!--$name = time(). '-' .$file->getClientOriginalName(); -->
<!--$product->image = $name; -->
<!--$file->move(public_path().'/images/', $name); -->
<!--} -->
<!--//employee->skilles()->attach($request->skilles)-->
<!--$product->cats()->sync($request->cats); //ایدی را در جدول دسته بندی ذخیره کن forId-->
<!---->
<!--return redirect()->back()->with('success', 'Service Successfully Added');-->
<!--///-->
<!--public function store()-->
<!--{-->
<!-- $input = Input::all();-->
<!-- if (Input::hasFile('photo')){-->
<!--    $file = Input::file('photo');-->
<!--    $name = $file->getClientOriginalName();-->
<!--    $image = Image::make(Input::file('photo')->getRealPath())->resize(200, 200);-->
<!--    $image->save(public_path() . '/uploads/residents/' . $input['photo']->getClientOriginalName());-->
<!--    $input['photo'] = $name;-->
<!--}-->
<!--$this->resident->create($input);-->
<!--} -->
<!---->
<!---->
<!--////////////////////////////////////////////////////////// hasmany-->
<!--public function tasks()-->
<!--{-->
<!-- return $this->hasMany(Task::class);-->
<!--}-->
<!---->
<!--public function addTask($description)-->
<!--{-->
<!-- $this->tasks()->create($description);-->
<!--}-->
<!--/// controller-->
<!--use Illuminate\Database\Eloquent\Builder;-->
<!--public function index(){-->
<!--$user->tasks()->where(function (Builder $query) {-->
<!--return $query->where('active', 1)->orWhere('votes', '>=', 100);-->
<!--})->get();-->
<!--// select * from tasks where user_id = ? and (active = 1 or votes >= 100)-->
<!--}-->
<!--///-->
<!--$posts = App\Post::has('comments')->get();-->
<!---->
<!--$posts = App\Post::has('comments', '>=', 3)->get();-->
<!---->
<!--$posts = App\Post::has('comments.votes')->get();-->
<!--$posts = App\Post::whereHas('comments', function (Builder $query) {-->
<!--$query->where('content', 'like', 'foo%');-->
<!--})->get();-->
<!---->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////////////////////////////-->
<!--return new CategoryResources($category);-->
<!--public function store(CreatePostRequest $request)-->
<!--{-->
<!--$categoryIds = Category::whereIn('name', $request->categories)->get()->pluck('id')->toArray();-->
<!--if(count($categoryIds) < 1) {-->
<!--throw ValidationException::withMessages([-->
<!--'categories' => ['دسته بندی یافت نشد.']-->
<!--]);}-->
<!--$file = $request->file('banner');-->
<!--$file_name = $file->getClientOriginalName();-->
<!--$file->storeAs('images/banners', $file_name, 'public_files');-->
<!--$data = $request->validated();-->
<!--$data['banner'] = $file_name;-->
<!--$data['user_id'] = auth()->user()->id;-->
<!---->
<!--$post = Post::create(-->
<!--$data-->
<!--);-->
<!---->
<!--$post->categories()->sync($categoryIds);-->
<!---->
<!--session()->flash('status', 'مقاله به درستی ایجاد شد.');-->
<!---->
<!--return redirect()->route('posts.index');-->
<!--}-->
<!---->
<!--$data = $request->validated();-->
<!--$data['banner'] = $file_name;-->
<!--$data['user_id'] = auth()->user()->id;-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////// json-->
<!--namespace App;-->
<!---->
<!--use Illuminate\Database\Eloquent\Model;-->
<!---->
<!--class Product extends Model-->
<!--{-->
<!-- protected $guarded = [];-->
<!---->
<!-- protected $casts = [-->
<!--     'properties' => 'array'-->
<!-- ];-->
<!---->
<!-- public function setPropertiesAttribute($value)-->
<!-- {-->
<!--     $properties = [];-->
<!---->
<!--     foreach ($value as $array_item) {-->
<!--         if (!is_null($array_item['key'])) {-->
<!--             $properties[] = $array_item;-->
<!--         }-->
<!--     }-->
<!---->
<!--     $this->attributes['properties'] = json_encode($properties);-->
<!-- }-->
<!---->
<!--}-->
<!--//Model-->
<!--public function up()-->
<!--{-->
<!--Schema::create('products', function (Blueprint $table) {-->
<!--$table->increments('id');-->
<!--$table->string('name');-->
<!--$table->decimal('price', 15, 2);-->
<!--$table->json('properties');-->
<!--$table->timestamps();-->
<!--});-->
<!--}-->
<!--//-->
<!---->
<!--//-->
<!--<table id="example1" class="table table-bordered table-striped">-->
<!--<thead>-->
<!--<tr>-->
<!--<th>Product Name</th>-->
<!--<th>Product Price</th>-->
<!--<th>Attributes</th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--@forelse($products as $product)-->
<!--<tr>-->
<!--<td>-->
<!--{{ $product->name ?? '' }}-->
<!--</td>-->
<!--<td>-->
<!--{{ $product->price ?? '' }}-->
<!--</td>-->
<!--<td>-->
<!--@foreach ($product->properties as $property)-->
<!--<b>{{ $property['key'] }}</b>: {{ $property['value'] }}<br />-->
<!--@endforeach-->
<!--</td>-->
<!--</tr>-->
<!--@empty-->
<!--<p>No categories found</p>-->
<!--@endforelse-->
<!--</tbody>-->
<!--</table>-->
<!--//Create-->
<!---->
<!--<form action="{{ route("product.create") }}" method="POST">-->
<!--@csrf-->
<!--<div class="form-group">-->
<!--<label for="name">Name</label>-->
<!--<input type="text" name="name" class="form-control form-control-sm">-->
<!--</div>-->
<!--<div class="form-group">-->
<!--<label for="price">Price*</label>-->
<!--<input type="number" name="price" class="form-control form-control-sm" step="0.01">-->
<!--</div>-->
<!--<div class="form-group">-->
<!--<label for="properties">Properties</label>-->
<!--<div class="row">-->
<!--<div class="col-md-2">-->
<!--Key:-->
<!--</div>-->
<!--<div class="col-md-4">-->
<!--Value:-->
<!--</div>-->
<!--</div>-->
<!--@for ($i=0; $i <= 4; $i++)-->
<!--<div class="row">-->
<!--<div class="col-md-2" style="margin-bottom: 2px;">-->
<!--<input type="text" name="properties[{{ $i }}][key]" class="form-control form-control-sm" value="{{ old('properties['.$i.'][key]') }}">-->
<!--</div>-->
<!--<div class="col-md-4">-->
<!--<input type="text" name="properties[{{ $i }}][value]" class="form-control form-control-sm" value="{{ old('properties['.$i.'][value]') }}">-->
<!--</div>-->
<!--</div>-->
<!--@endfor-->
<!--</div>-->
<!--<div>-->
<!--<input class=" btn btn-danger btn-sm" type="submit">-->
<!--</div>-->
<!--</form>-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////// where json-->
<!--اگر در جدول کاربران فلان ایدی موجود بود-->
<!--$x=$query->whereJsonContains('users', [['user_id' => 1]]);-->
<!--$users = DB::table('users') ->whereJsonContains('options->languages', 'en') ->get();-->
<!--$users = DB::table('users')->whereJsonContains('options->languages', ['en', 'de'])->get();-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////-->
<!--مراحل کامپایل -->
<!--ForwardsCalls-->
<!--laravel-oos-->
<!--php fpm-->
<!--داره فایل کامپایلیشنی که زند اند جین واست درست کرده میده به بایکوت میخوات اجرا کنه حالا به وسیله جیتس می خوایم کاری کنیم دوباره کامپایل نشه-->
<!--//////////////////////////////////////////////////////////////////////////-->
<!---->
<!--////////////////////////////////////////////////////////////////////////// pdo-->
<!--کانکشن به دیتابیس-->
<!--public function json(Blueprint $table, string $column): ColumnDefinition-->
<!--{-->
<!--$conn = DB::connection();-->
<!--if ($conn instanceof MySqlConnection || $conn instanceof PostgresConnection) {-->
<!--$pdo = $conn->getPdo();-->
<!--try {-->
<!--$sql = 'SELECT JSON_EXTRACT(\'[10, 20, [30, 40]]\', \'$[1]\');';-->
<!--$prepare = $pdo->prepare($sql);-->
<!--$prepare->fetch();-->
<!--} catch (\Throwable $throwable) {-->
<!--return $table->text($column);-->
<!--}-->
<!--}-->
<!---->
<!--return $table->json($column);-->
<!--}-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////// abstract-->
<!--اگر کلاس از ابستراکت اکستند بشه می توان بدون گذاشتن متد ابستراکت در کلاس زیرمجموعه بهش اشاره کرد-->
<!--یعنی اشاره به کلاس اکستند اشاره به ابستراکت هست-->
<!--// OrderAcceptance-->
<!--abstract class OrderAcceptance-->
<!--{-->
<!--public function succeedWith(OrderAcceptance $successor)-->
<!--{-->
<!--$this->successor = $successor;-->
<!--}-->
<!--// OrderCanShip-->
<!--class OrderCanShip extends OrderAcceptance-->
<!---->
<!--// Controller-->
<!--$orderCanShip = new OrderCanShip();-->
<!--$orderCanShip->succeedWith($productIsAvailable);-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////////////////// request user-->
<!--درخواست کاربر میگیرد-->
<!--public function handle(Request $request, Product $product)-->
<!--{-->
<!--if ($request->user()->city !== $product->city) {-->
<!--abort(422, 'product con not be shipped to you');-->
<!--}-->
<!--$this->next($request, $product);-->
<!--}-->
<!--/// کاربر از چه نسخه ای استفاده می کند-->
<!--public function userAgent()-->
<!--{-->
<!--return $this->headers->get('User-Agent');-->
<!--}-->
<!--/// ایپی کاربر چیست-->
<!--public function ip()-->
<!--{-->
<!--return $this->getClientIp();-->
<!--}-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////// update other field-->
<!--اپدیت کردن فیلد دیگری با گرفتن فیلد فعلی-->
<!--$setting_publisher_prices = [-->
<!--'story_publisher' => ['fee_story' =>$request->story_publisherـfee],-->
<!--'post_publisher' => ['fee_post' => $request->post_publisherـfee],-->
<!--'direct_publisher' => ['fee_direct' => $request->direct_publisherـfee],-->
<!--];-->
<!---->
<!--$setting= Setting::query()->where('title', 'publisher_prices')->update(['value' => $setting_prices]);-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////// is_null-->
<!--فیلد خالی بود-->
<!--$article=Article::findOrFail($id);-->
<!--if(is_null($article)){abort(404)}-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////// preg_replace-->
<!--preg_replace($pattern,$replace,$string)-->
<!--$res=preg_replace(‘/abc/’,’efg’,$string);// هرجا که پترن دیدی جاش اونی بزار که من میگم-->
<!--///-->
<!--$string=’learn java good’;-->
<!--$pattern=’java/i’;-->
<!--$replace=’php’;-->
<!--$res=preg_replace($pattern,$replace,$string)// learn php good-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////// tariff-->
<!--تعرفه-->
<!--Route::get('', function () {-->
<!--$tariff = Tariff::query()->where('status', 1)->first()->value('price');-->
<!--$reducePrice = (1000 * $tariff) / 100;-->
<!---->
<!--return $reducePrice;-->
<!--});-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////// discount-->
<!--//اگر ۱۵ سیب داشته باشیم ۳۰ درصد تخفیف چقدر می شود-->
<!--count=(30*15)/100=4.5-->
<!--//اگر یک ملیون و هشتصد داشته باشیم ۲۰ درصد چقد می شود-->
<!--count=18000000*20/100=3600000-->
<!--///Invoice-->
<!--private float|int $discountAmount;-->
<!---->
<!--public function getDiscountAmount(): float|int-->
<!--{-->
<!--return $this->discountAmount;-->
<!--}-->
<!--public function setDiscountAmount(float|int $discountAmount): void-->
<!--{-->
<!--$this->discountAmount = $discountAmount;-->
<!--}-->
<!---->
<!--public function discount(): Discount-->
<!--{-->
<!--return new Discount($this);-->
<!--}-->
<!--private function bootstrap(): void-->
<!--{-->
<!--$this->campaign->load('ad');-->
<!--$this->subtotal = $this->campaign->executive->price();-->
<!--$this->total = $this->subtotal;-->
<!---->
<!--// Discount must always apply before taxes.-->
<!--$this->discount()->apply(); // مبلغ را از متد کلاس دیسکوند میگیرد-->
<!--$this->tax()->apply();-->
<!--}-->
<!--// AbstractComputable-->
<!--protected Invoice $invoice;-->
<!--protected int $percent;-->
<!---->
<!--public function __construct(Invoice $invoice)-->
<!--{-->
<!--$this->invoice = $invoice;-->
<!--$this->percent = $this->percent();-->
<!--}-->
<!---->
<!--abstract protected function percent(): int;-->
<!---->
<!--protected function toDecimal(int $computable): float|int-->
<!--{-->
<!--return $computable * self::DECIMAL_CONVERTER;//1000 * 0.01=10-->
<!--}-->
<!---->
<!--//Discount-->
<!--public function amount(): int|float-->
<!--{-->
<!--return $this->invoice->getSubtotal() * $this->toDecimal($this->percent);// 20*10=200-->
<!--}-->
<!---->
<!--public function apply(): Invoice-->
<!--{-->
<!--if ($this->percent <= 0) {// اگر مقدار ورودی برابر یا کمتر صفر بود 0 جایگزین کن-->
<!--$this->invoice->setDiscountAmount(0);-->
<!--return $this->invoice;-->
<!--}-->
<!---->
<!--$amount = $this->amount();-->
<!---->
<!--$this->invoice->setDiscountAmount($amount);// مبلغ را در پراپرتی کلاس دیسکوند ذخیره کن-->
<!---->
<!---->
<!--$this->invoice->setTotal(-->
<!--$this->invoice->getTotal() - $amount //مبلغ کل را از مبلغ بدست آمده کسر کن-->
<!--);-->
<!---->
<!--return $this->invoice;-->
<!--}-->
<!--/////////////////////////////////////////////////////////////////////////////////// vue js $refs-->
<!--ref نمایش المنت در کنسول-->
<!--<input type=”text” ref=”name”>-->
<!--<button @click=”handleEvent”>click</button>-->
<!--methods:{-->
<!--handleEvent(){-->
<!--console.log(this.$refs.name)-->
<!--}-->
<!--}-->
<!--////////////// style scoped-->
<!--فرض کنید استایل پرنت و استایل کامپوننت فرزند فرق کند و ما میخواهیم استایل فرزند اولویت قرار بگیرد-->
<!---->
<!--////////////// props-->
<!--در ویو پرنت متغیر را تعریف میکنیم د ر ویو فرزند ابتدا در اسکریپت دریافت و در تمپلیت آن استفاده می کنیم-->
<!--همچنین می توانیم انواع تم در نظر بگیریم اگر در پراپس پرنت تم خاصی ست شده بود استفاده گردد-->
<!--//App.vue-->
<!--<template>-->
<!--<Modal :header=”header” :theme=”sale”>-->
<!--</template>-->
<!--export default{-->
<!--data(){-->
<!--return {-->
<!--header:’sign up’-->
<!--}-->
<!--}-->
<!--}-->
<!--//Modal.vue-->
<!--<template>-->
<!--<div class=”modal” :class=” {sale: theme=== ‘sale’ }”> // اگر در پرنت تم ست شده بود کلاس اجرا کن-->
<!--<h1>{{header}}</h1>-->
<!--</template>-->
<!--<script>-->
<!--export default{-->
<!--props:[‘header’]-->
<!--}-->
<!--</script>-->
<!--//////////////-->
<!---->
<!--////////////// methods $emit modifier-->
<!--اگر در ویو فرزند کلیک شد بیاد ایونت به لسینر پرنت برسونه و در پرنت تابع اجرا بشود مثلا در فرزند کلیک در پرنت اجرا-->
<!--//app.vue-->
<!--<template>-->
<!--<div v-if=”showModal”>-->
<!--<Modal @close=”changeModal” /> // از کامپوننت فرزند آمده-->
<!--</div>-->
<!--<button @click . alt=”changeModal”>show modal</button> // مدیفایر-->
<!--</template>-->
<!--export default{-->
<!--data(){-->
<!--return{-->
<!--showModal:false-->
<!--}-->
<!--}-->
<!--methods:{-->
<!--changeModal(){-->
<!--this.showModal= ! this.showModal-->
<!--}-->
<!--}-->
<!---->
<!---->
<!---->
<!--//Modal.vue-->
<!--<template>-->
<!--<div class=”back” @click . self=”closeModal”> مدیفایر-->
<!--</template>-->
<!--export default{-->
<!--methods:{-->
<!--closeModal(){-->
<!--this.$emit(‘close’) // برو به پرنت به منتظر کلیک پرنت باش-->
<!--}-->
<!--}-->
<!--}-->
<!--////////////// slot-->
<!--برای ارسال تمپلیت از پرنت به فرزند-->
<!--//App.vue-->
<!--<template>-->
<!--<div class=”modal”>-->
<!--<Modal>-->
<!--<h1>open</h1>-->
<!--<template>-->
<!--<a href=”#”>sing up</a>-->
<!--</template>-->
<!--</Modal>-->
<!--</div>-->
<!--</template>-->
<!---->
<!--//Model.vue-->
<!--<template>-->
<!--<div class=”modal”>-->
<!--<slot></slot> //اسلات-->
<!--</Modal>-->
<!--</div>-->
<!--</template>-->
<!---->
<!---->
<!--//////////////-->
<!--////////////////////////////-->
<!---->
<!--//////////////////////////////////////////////////////////////////////////////////////////////// vue js-->
<!--$emit-->
<!--props-->
<!--methods{},-->
<!--data(){-->
<!--return projects:[]-->
<!--},-->
<!--mounted(){fetch()}-->
<!--!-->
<!--/// Home-->
<!--<template>-->
<!--v-if=”projects.lenght”-->
<!--<div v-for=”project in projects” :key=”project.id”>-->
<!--<SingleProject :project=”project” />-->
<!--</div>-->
<!--<>-->
<!--<script>-->
<!--export default{-->
<!--name:’Home’,-->
<!--components:{SingleProject}-->
<!--data(){-->
<!--return {-->
<!--projects:[],-->
<!--uri:’http://localhost:3000/projects/’+this.project.id-->
<!--}-->
<!--},-->
<!--methods:{-->
<!--deleteProject(){-->
<!--fetch(this.uri,{method:’DELETE’})-->
<!--.then(()=>this.$emit(‘delete’,this.projects))-->
<!--.catch(err=>console.log(err.message))-->
<!--}-->
<!--}-->
<!--mounted(){-->
<!--fetch(‘http://localhost:3000/projects’)-->
<!--.then(res=>res.json())-->
<!--.catch(err=>console.log(err.message))-->
<!--}-->
<!--methods(){}-->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// print-->
<!--print(arr)-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--<script>-->
<!--const person = {firstName:"John", lastName:"Doe", age:46};-->
<!--document.getElementById("demo").innerHTML = person.firstName;-->
<!--</script>-->
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////// reverce proxy-->
<!--Reverse Proxy Server سروری است که پشت فایروال قرار میگیرد و درخواست ها را از شبکه اینترنت دریافت کرده و آنها را به سرور های موجود در شبکه داخلی ارسال میکند. بدیهی است که سرور های موجود در شبکه داخلی بصورت مستقیم از شبکه اینترنت قابل دسترسی نمیباشند. Reverse Proxy باعث می شود که کاربران درخواست کننده سرویس از سمت اینترنت از طرف Reverse Proxy سرور احرازهویت شوند. استفاده از Reverse Proxy سه مزیت خوب را برای شبکه ما به ارمغان می آورد که در زیر ضمن ذکر کردن آنها به توضیح شان میپردازیم :-->
<!--Load balancing : با استفاده از قابلیت Load balancing درخواست هایی که به سمت وب سرور های موجود در شبکه داخلی هدایت می شوند توسط Reverse Proxy Server دریافت می شوند و درخواست ها به سمت سروی که Load کاری کمتری دارد ارسال میشود. با این کار کارایی شبکه ما نیز بالا می رود.-->
<!--Web acceleration : سرور های در نقش Reverse Proxy به خوبی انجام Caching اطلاعات می توانند داده های ورودی و خروجی را نیز فشرده سازی کنند که این کار سرعت جریان ترافیک ورودی و خروجی شبکه را بین کلاینت و سرور افزایش میدهد. همچنین اینکه می توانند عمل رمزنگاری اطلاعات را بوسیله پروتکل SSL انجام دهند و در نتیجه بار کاری حاصل از انجام عمل رمزنگاری از روی وب سرور ها برداشته می شود.-->
<!--Security and anonymity : بحث امنیت و ناشناس ماندن یکی از اساسی ترین دلایل راه اندازی یک Proxy Server در شبکه است حالا اگر Reverse Proxy را بخواهیم به همین منظور در شبکه راه اندازی کنیم این نوید را به ما می دهد که یک مهاجم نتواند با دسترسی مستقیم به شبکه داخلی ما از ساختار و توپولوژی شبکه ما آگاه شود زیرا مهاجم با تعدادی سرور رو به رو است که توسط یک سرور که همان Reverse Proxy Server است درخواست هایش به آن سرور ها در شبکه داخلی هدایت می شود. که این خود عاملی برای ناشناس ماندن سرور ها و ساختار شبکه ما می شود.-->
<!--سرور افزایش می دهد-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////////// javascript-->
<!--const persons = [-->
<!--{firstname : "Malcom", birth: "Reynolds"},-->
<!--{firstname : "Kaylee", birth: "Frye"},-->
<!--{firstname : "Jayne", birth: "Cobb"}-->
<!--];-->
<!---->
<!--document.getElementById("test").innerHTML = persons.map(getFullName);-->
<!---->
<!--function getFullName(item) {-->
<!--return [item.birth].join(" ");-->
<!--}-->
<!---->
<!---->
<!--////////////////-->
<!--<script>-->
<!--const cars = ["Saab", "Volvo", "BMW"];-->
<!--document.getElementById("demo").innerHTML = cars[0];-->
<!--</script>-->
<!--//////////////////-->
<!--const table = document.querySelector('table')-->
<!--const arr = [...table.rows].map(r => [...r.querySelectorAll('td, th')].map(td => td.textContent))-->
<!--console.log(arr)-->
<!--document.getElementById("demo").innerHTML = JSON.stringify(arr);-->
<!---->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// view-->
<!--گرفتن بلید-->
<!--$t=file_get_contents(resource_path('views/index.blade.php'));-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--اگر بخواهیم نوع و ویژگی های ستون های موجود را تغییر دهیم-->
<!--$this->string(‘name’,50)->change();-->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// get table to array-->
<!--از سایت محتوای جدول را بگیر-->
<!--$htmlContent = file_get_contents("http://teskusman.esy.es/index.html");-->
<!--$DOM = new DOMDocument();-->
<!--$DOM->loadHTML($htmlContent);-->
<!--$Header = $DOM->getElementsByTagName('th');-->
<!--$Detail = $DOM->getElementsByTagName('td');-->
<!---->
<!---->
<!--//#Get header name of the table-->
<!--foreach($Header as $NodeHeader)-->
<!--{-->
<!--$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);-->
<!--}-->
<!--//print_r($aDataTableHeaderHTML); die();-->
<!---->
<!---->
<!--//#Get row data/detail table without header name as key-->
<!--$i = 0;-->
<!--$j = 0;-->
<!--foreach($Detail as $sNodeDetail)-->
<!--{-->
<!--$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);-->
<!--$i = $i + 1;-->
<!--$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;-->
<!--}-->
<!--//print_r($aDataTableDetailHTML); die();-->
<!--//#Get row data/detail table with header name as key and outer array index as row number-->
<!--for($i = 0; $i < count($aDataTableDetailHTML); $i++)-->
<!--{-->
<!--for($j = 0; $j < count($aDataTableHeaderHTML); $j++)-->
<!--{-->
<!--$aTempData[$i][$aDataTableHeaderHTML[$j]] = $aDataTableDetailHTML[$i][$j];-->
<!--}-->
<!--}-->
<!--$aDataTableDetailHTML = $aTempData; unset($aTempData);-->
<!--print_r($aDataTableDetailHTML); die();-->
<!---->
<!---->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// rabbit mq vs kfka-->
<!--تفاوت کافکا با ربیت-->
<!--این امکان به برنامه نویس‌ها اجازه میده تا برای کامندهای بعدی برنامه ریزی داشته باشن.-->
<!--بعنوان مثال اگر تعداد درخواست‌های یک پرودوسر از یک حدی رد شد می‌تونیم درخواست‌های بعدی رو به تعویق بندازیم.-->
<!--کافکا از یه همچین امکاناتی پشتیبانی نمیکنه و هر پیامی رو بلافاصله بعد رسیدنش وارد پارتیشن ها میکنه که همون لحظه هم توسط کانزیومرها آماده پردازش میشن-->
<!--کافکا طوری طراحی شده که بتونه پیام‌هارو نگه داره -->
<!--ربیت ام کیو ابزارهایی مانند دلیوری ریتریز و دید لیتر اکسچنج یا  دی ال ایکس برای مدیریت خطای پردازش پیام‌ها در اختیارمون گذاشته.-->
<!--//////////////////////////////////////////////////////////// Zookeeper kafka-->
<!--زوکیپر -->
<!--برای مدیریت و تنظیم کردن کافکا بروکر به کار میره. یه رابط بین بروکرهای و کانزیومر هاست .-->
<!--به کمک سرویس زوکیپر از حضور بروکر جدید یا فیل شدن بروکر باخبر می شوید-->
<!--سرویس زوکیپ اساساً برای این به کار میره که به درباره ی حضور یه بروکر جدید در سیستم کافکا یا -->
<!--شروع میکنند به تنظیم کردن تسک هاشون با یه بروکر دیگه. -->
<!--بروکرها سیستم‌های ساده‌ای هستند که وظیفه ی اونها نگهداری داده‌های-->
<!--هر پابلیش شده هست -->
<!---->
<!--هر بروکر ممکنه صفر یا تعداد بیشتری پارتیشن به ازای هر تاپیک داشته باشه-->
<!--توی این مدل پیام ها تو یه تاپیک هستند. برخلاف مدل نقطه به نقطه مصرف کننده ها یا همون کانزیومرها میتونن تو یدونه یا تعداد بیشتری تاپیک سابسکرایب کنند و همه مسیج ها  در اون تاپیک مصرف شوند -->
<!--در این سیستم به پرودوسر میگیم پابلیشر کانزیومر میگیم سابسکرایب-->
<!--دو مدل انتقال پیام وجود دارد نقطه به نقطه که پیام ها در یک صف قرار دارند و پاب ساب که پیامها در یک تاپیک قرار دارند-->
<!--کافکا که بیشتر از یک بروکر داشته باشه کلاستر کافکا می گویند که برای بالانس بار استفاده میشه-->
<!--پرودوسر -->
<!--پیامها را به یک یا چند تاپیک کافکا انتشار میده و دیتا را به بروکر منتقل میکنه و بروکر اون پیام را به اخرین بخش فایل اضافه میکنه-->
<!--کانزیومر-->
<!--دیتا را از بروکر میخواند سپس یک یا چند تاپیک را سابسکرایب میکنه و پیام های منتشر شده را از بروکر میگیره-->
<!--لیدر-->
<!--هر پارتیشن یه سرور دارد که وظیفه خواندن و نوشتن را دارد که به آم لیپ-->
<!--در گویند-->
<!--تاپیک -->
<!--به جریانی از داده‌ها که به دسته بندی خاصی متعلق هستند گفته میشه. برای مثال تاپیک میتونه معادل یه جدول تو دیتابیس باشه یا هر دسته بندی دیگه ای. داده‌ها توی تاپیک ها نگهداری میشه و تاپیک ها هم خودشون به پارتیشن ها تقسیم میشن. کافکا برای هر تاپیک حداقل یه پارتیشن نگه میداره.-->
<!--///////////////////////////////////////////////////////////////////////////////////////////////////  rabbit vs kafka  فاوت ربیت با کافکا -->
<!--ربیت ام کیو قابل ترجیحه زمانی که ما نیاز داریم به:-->
<!--قوانین پیشرفته و منعطف مسیریابی-->
<!--کنترل زمان سنجی پیام‌ها ( مشخص کردن طول عمر برای پیام یا تاخیر زمان پردازش پیام)-->
<!--مدیریت پیشرفته خطاها ، مخصوصا زمانی که احتمال میدیم پردازش پیام‌ها توسط کانزیومرها فیل بشن-->
<!--پیاده سازی راحت سمت کانزیومر-->
<!---->
<!---->
<!--کافکا قابل ترجیحه زمانی که ما نیاز داریم به:-->
<!--ترتیب پیام (بصورت سختگیرانه)-->
<!--نگهداری پیام‌های قدیمی بصورت دوره‌ای و امکان بازیابیشون.-->
<!--امکان scale کردن بهتر در زمان‌هایی که روش‌های سنتی جواب نمیدن.-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////////////////////////////////// cache-->
<!---->
<!---->
<!--یه سرویس مننجمنت کش بنویس که هر وقت خواستیم کش ها را پاک کنیم کش صفحه ایکس پاک کنیم-->
<!--$app->get('/clear-cache', function () {-->
<!--$code = Artisan::call('cache:clear');-->
<!--return 'cache cleared';-->
<!--});-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////////////////////////// OPcache-->
<!--اپی کش عملکرد پی اچ پی را با ذخیره بایت کد اسکریپت از پیش کامپایل شده در حافظه مشترک بهبود می بخشد، در نتیجه نیاز به بارگذاری و تجزیه پی اسکریپت های پی اچ پی در هر درخواست را از بین می برد-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// مصاحبه-->
<!--setter geter-->
<!--//microservice-->
<!--/rabbit mq-->
<!--setting-->
<!--/kafka-->
<!--zopicker-->
<!--exchange-->
<!--///////////elastic-->
<!--logstach-->
<!--kibana-->
<!--query match-->
<!--//php 8-->
<!--null sperator-name parametr-jits-constract proprty-match-->
<!--//estelahat-->
<!--//solid-->
<!--single responsibility-open close-liskov substition- interface segrigation-dependency inversion-->
<!--//patern-->
<!--Factory-adapter-observer-strategy-composition—repository-chaine of responsibility-->
<!--//-->
<!--polimorphist-->
<!--////////////////////////////////////////////////////////////// adapter pattern-->
<?php
//
//interface AdapterInterface
//{
//public function find(int $id);
//
//public function findAll(array $criteria = []);
//}
//
//class MySqlAdapter implements AdapterInterface
//{
//public function find(int $id)
//{
//return 'data by id is fetched by MySQL.';
//}
//
//public function findAll(array $criteria = [])
//{
//return 'all data is fetched by MYSQL';
//}
//}
//
//class SQLiteAdapter implements AdapterInterface
//{
//public function find(int $id)
//{
//return 'data by id is fetched by SQLite.';
//}
//
//public function findAll(array $criteria = [])
//{
//return 'all data is fetched by SQLite.';
//}
//}
//
//class Storage
//{
//private $source;
//
//public function __construct(AdapterInterface $source)
//{
//$this->source = $source;
//}
//
//public function getOne(int $id)
//{
//return $this->source->find($id);
//}
//
//public function getAll(array $criteria = [])
//{
//return $this->source->findAll($criteria);
//}
//}
//
//$adapter = new SQLiteAdapter();
//$storage = new Storage($adapter);
//
//echo $storage->getOne(1);
//echo "\n";
//echo $storage->getAll();
//////////////////////////////////////////////////////////////// decorator pattern
//<?php
//
//interface OpenerInterface
//{
//public function open();
//}
//
//class Door implements OpenerInterface
//{
//public function open()
//{
//return 'the door is opened.';
//}
//}
//
//class SmartOpener implements OpenerInterface
//{
//private $opener;
//
//public function __construct(OpenerInterface $opener)
//{
//$this->opener = $opener;
//}
//
//public function open()
//{
//echo $this->opener->open();
//echo "\n";
//echo 'add some new features.';
//}
//}
//
//$door = new Door();
//$smartDoor = new SmartOpener($door);
//echo $smartDoor->open();
//////////////////////////////////////////////////////////////// array
//کار با ارایه ها
//if (count($item['translations']) > 0)
//if(isset())
//if(! Empty())
//if(in_array())
//if (is_array($values)
//
//
//if (array_key_exists($part, $this->cronParts))
//if (func_num_args() === 0) {
//return $factory;
//}
//if (filled($usernames))
//$c=flatten($array) //ارایه چند بعدی را صاف میکند
//return ! property_exists($this, 'avatar') || blank($this->avatar)
//
//$post=Post::firstWhere(‘name’,$name);
//public function isNotEmpty()
//{
//return ! $this->isEmpty();
//}
//public static function wrap($value)
//{
//if (is_null($value)) {
//return [];
//}
//
//return is_array($value) ? $value : [$value];
//}
//public function fullName(): string
//{
//return "{$this->first_name} {$this->last_name}";
//}
//public function getPrettyBalanceAttribute(): string
//{
//return number_format($this->balance);
//}
//if ($request->filled('tweak_balance')) {
//$user->setBalance($request->input('tweak_balance'));
//}
/////////////////////////////////////////////////////////////////////////////////flatmap
//ارایه داریم حالا میخوایم تمام ولیو های ان بزرگ شوند
//$collection = collect([
//['name' => 'Sally'],
//['school' => 'Arkansas'],
//['age' => 28]
//]);
//$flattened = $collection->flatMap(function ($values) {
//return array_map('strtoupper', $values);
//});
/////
//$collection = collect([
//'name' => 'taylor',
//'languages' => [
//    'php', 'javascript'
//]
//]);
//
//$flattened = $collection->flatten();
//
//$flattened->all();
//
//// ['taylor', 'php', 'javascript'];
//
/////
//$flattened->all();
//// ['name' => 'SALLY', 'school' => 'ARKANSAS', 'age' => '28'];
///////////////////////////////////////////////////////////////////////////////////// collapse آرایه ها رو یکی میکنه
//$collection = collect([
//[1, 2, 3],
//[4, 5, 6],
//[7, 8, 9],
//]);
//$collapsed = $collection->collapse();
//$collapsed->all();
////////////////////////////////////////////////////////////////////////////////  Access Modifier
//public
//protected
//Private
//ضروری واجب مصاحبه
//////////////////////////////////////////////////////////////////////////////// self static parent
//<?php
//class g {
//
// /* The new self */
// public static function get_self() {
// return new self();
// }
//
// /* The new static */
// public static function get_static() {
// return new static();
// }
//}
//
//class f extends g {}
//
//echo get_class(f::get_self()); // g
//echo get_class(f::get_static()); // f
//echo get_class(g::get_self()); // g
//?>
<!--///-->
<?php
//
//// Declaring parent class
//class demo {
//
// public static $bar = 10;
//
// public static function func() {
//
//     // Static in place of self
//     echo static::$bar."\n";
// }
//}
//
//// Declaring child class
//class Child extends demo {
// public static $bar = 20;
//}
//
//// Calling for demo's version of func()
//demo::func();
//
//// Calling for child's version of func()
//Child::func();
//
//?>
<!--سلف به کلاس پرنت اشاره میکنه ولی ستاتیک به کلاس خودش-->
<!--/// new self-->
<!--class Foo { public static function baz()-->
<!--{-->
<!--return new self(); -->
<!--}-->
<!--} $x = Foo::baz(); // $x is now a `Foo`-->
<!--/// new static-->
<!--class Foo {-->
<!--public static function baz() { -->
<!--return new static(); -->
<!--} } -->
<!--class Bar extends Foo { } -->
<!--$wow = Bar::baz(); // $wow is now a `Bar`-->
<!---->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////////////////////// call-->
<!--این متد متد فرضی را میسازد که بواسطه آن می تواند به کلاس های مختلف دسترسی داشت فقط به اینترفیس آن کلاس نسبت داده شود-->
<!--وقتی بخوای متدی را فراخوانی کنی که در اون کلاس نباشد-->
<!--اگر متد کال را داشته باشی اکسپشن نمی دهد و متد اجرا میشود-->
<!--// GatewayInterface.php-->
<!--interface GatewayInterface-->
<!--{-->
<!--public function pay(-->
<!--int $amount,-->
<!--string $description,-->
<!--string $callbackUrl = null-->
<!--): Pay;-->
<!---->
<!--public function startPay(string $authority);-->
<!---->
<!--public function verify(int $amount, string $authority): Pay;-->
<!--}-->
<!--// Payment.php-->
<!--/**-->
<!--* @method static GatewayInterface zarinpal()-->
<!--*-->
<!--* @read __call method.-->
<!--*/-->
<!--class Payment implements PaymentInterface-->
<!--{-->
<!---->
<!---->
<!--private array $banks = [-->
<!--'zarinpal' => Zarinpal::class,-->
<!--];-->
<!---->
<!--public function __call(string $method, array $params)-->
<!--{-->
<!--if (!array_key_exists($method, $this->banks)) {-->
<!--throw new BadMethodCallException();-->
<!--}-->
<!---->
<!--return resolve(-->
<!--$this->banks[$method]-->
<!--);-->
<!--}-->
<!--public static function __callStatic($method, $parameters)-->
<!--{-->
<!--return (new static())->$method(...$parameters);-->
<!--}-->
<!--}-->
<!--//FactorController.php-->
<!--public function store(Request $request)-->
<!--{-->
<!--/** @var Factor $factor */-->
<!--$factor = Factor::owned()->findOrFail($request->input('factor_id'));-->
<!---->
<!--$pay = Payment::zarinpal()->pay(-->
<!--$factor->price,-->
<!--'پرداخت فاکتور',-->
<!--route('panel.factor.verify.invoke', $factor->id)-->
<!--);-->
<!---->
<!--return Payment::zarinpal()->startPay($pay->authority);-->
<!--}-->
<!--//Zarinpal.php-->
<!--public function startPay(string $authority): RedirectResponse-->
<!--{-->
<!--return Redirect::to('https://www.zarinpal.com/pg/StartPay/' . $authority);-->
<!---->
<!--}-->
<!--///-->
<?php
//class MethodTest
//{
// public function __call($name, $arguments)
// {
//     // Note: value of $name is case sensitive.
//     echo "Calling object method '$name' "
//          . implode(', ', $arguments). "\n";
// }
//
// public static function __callStatic($name, $arguments)
// {
//     // Note: value of $name is case sensitive.
//     echo "Calling static method '$name' "
//          . implode(', ', $arguments). "\n";
// }
//}
////Controller.php
//$obj = new MethodTest;
//$obj->runTest('in object context');
//
//MethodTest::runTest('in static context');
//?>
<!--////////////////////////////////////////////////////////////////////////////// blank-->
<!--چک می کند فیلد موردنظر آیا خالی هست یا خیر-->
<!--public function notCrawledOnce(): bool-->
<!--{-->
<!--return blank(-->
<!--CrawlTask::query()->where('campaign_id', $this->id)->first()-->
<!--);}-->
<!--//////////////////////////////////////////////////////////////// update field isNotFilled-->
<!--پر نکرده-->
<!--اگر در اپدیت کاربر پسورد وارد نکرده بود بره از پسورد خود کاربر استفاده کند-->
<!--$user->update([-->
<!--'username' => $request->input('username'),-->
<!--'password' => $request->isNotFilled('password') ? $user->password : $request->input('password'),-->
<!---->
<!--]);-->
<!--/// مال لاراول-->
<!--اگر از نوع ارایه بود خودش را بده در غیر اینصورت هرچی وارد شده-->
<!--public function isNotFilled($key)-->
<!--{-->
<!--$keys = is_array($key) ? $key : func_get_args();-->
<!---->
<!--foreach ($keys as $value) {-->
<!--if (! $this->isEmptyString($value)) {-->
<!--return false;-->
<!--}-->
<!--}-->
<!---->
<!--return true;-->
<!--}-->
<!--protected function isEmptyString($key)-->
<!--{-->
<!--$value = $this->input($key);-->
<!---->
<!--return ! is_bool($value) && ! is_array($value) && trim((string) $value) === '';-->
<!--}-->
<!--public function anyFilled($keys)-->
<!--{-->
<!--$keys = is_array($keys) ? $keys : func_get_args();-->
<!---->
<!--foreach ($keys as $key) {-->
<!--if ($this->filled($key)) {-->
<!--return true;-->
<!--}-->
<!--}-->
<!---->
<!--return false;-->
<!--}-->
<!--public function missing($key)-->
<!--{-->
<!--$keys = is_array($key) ? $key : func_get_args();-->
<!---->
<!--return ! $this->has($keys);-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////////////////////// hasCookie-->
<!--چک میکند کوکی وجود دارد یا خیر مال لاراول-->
<!--public function hasCookie($key)-->
<!--{-->
<!--return ! is_null($this->cookie($key));-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////// property_exists file-->
<!--* اگر کاربر عکس نداشت جایگزین کن-->
<!--//User-->
<!--public function avatar(): string-->
<!--{-->
<!--return ! property_exists($this, 'avatar') || blank($this->avatar)-->
<!--? 'files/_root/anonymous-user.png'-->
<!--: $this->avatar;-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// remove dir-->
<!--پاک کردن پوشه-->
<!--public static function remove_dir($dir)-->
<!--{-->
<!--if (is_dir($dir)) {-->
<!--$objects = scandir($dir);-->
<!--foreach ($objects as $object) {-->
<!--if ($object != "." && $object != "..") {-->
<!--if (filetype($dir . "/" . $object) == "dir") Helpers::remove_dir($dir . "/" . $object);-->
<!--else unlink($dir . "/" . $object);-->
<!--}-->
<!--}-->
<!--reset($objects);-->
<!--rmdir($dir);-->
<!--}-->
<!--}-->
<!--////////////////////////////////////////////////////////////// cast-->
<!--protected $casts = [-->
<!--'tax' => 'float',-->
<!--'price' => 'float',-->
<!--'status' => 'integer',-->
<!--'discount' => 'float',-->
<!--'avg_rating' => 'float',-->
<!--'set_menu' => 'integer',-->
<!--'category_id' => 'integer',-->
<!--'restaurant_id' => 'integer',-->
<!--'reviews_count' => 'integer',-->
<!--'created_at' => 'datetime',-->
<!--'updated_at' => 'datetime',-->
<!--'veg' => 'integer'-->
<!--];-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// کتاب-->
<!--clean code rabbert martin-->
<!--////////////////////////////////////////////////////////////// eachById-->
<!--distinct onion-->
<!--public function crawled(): bool-->
<!--{-->
<!--$crawled = true;-->
<!---->
<!--CrawlTask::query()-->
<!--->where('campaign_id', $this->id)-->
<!--->eachById(function (CrawlTask $task) use (&$crawled) {-->
<!--if ($task->isInProcess()) {-->
<!--$crawled = false;-->
<!--}-->
<!--});-->
<!---->
<!--return $crawled;-->
<!--}-->
<!--///////////////////////////////////////////////////////////// observer-->
<!--creating-->
<!--زمانی فراخوانی می شود که یک رکورد مدل در حال ایجاد است، و هنوز در پایگاه داده ذخیره نشده است-->
<!--پس از ایجاد موفقیت آمیز رکورد مدل فراخوانی می شود.-->
<!--Created-->
<!--بعد از ثبت کاربر فراخوانی و انجام می شوند-->
<!--php artisan make:observer ProductObserver –model=Product-->
<!--// EventServiceProvider-->
<!--public function boot()-->
<!--{-->
<!--Product::observe(ProductObserver::class);-->
<!--}-->
<!---->
<!---->
<!--//-->
<!--public function creating(Product $product)-->
<!--{-->
<!--$product->slug = \Str::slug($product->name);-->
<!--}-->
<!--public function created(Product $product)-->
<!--{-->
<!--$product->unique_id = 'PR-'.$product->id;-->
<!--$product->save();-->
<!--}-->
<!--//-->
<!--public function index()-->
<!--{-->
<!--$product = Product::create([-->
<!--'name' => 'Platinum 1',-->
<!--'price' => 10-->
<!--]);-->
<!--dd($product);-->
<!--}-->
<!--//-->
<!--id name price slug unique_id-->
<!--62 mobile1 10 mobile-1 PR-62-->
<!--///-->
<!--public function created(Fee $fee): void-->
<!--{-->
<!--cache()->forget('_fee_all_'); //پاک شود از کش-->
<!--}-->
<!--///-->
<!--public function created(Fee $fee): void //ذخیره در کش-->
<!--{-->
<!--cache()->rememberForever(-->
<!--'_fee_all_',-->
<!--fn() => Fee::get()-->
<!--);}-->
<!--/// زمانبندی ذخیره در کش-->
<!--protected function percent(): int-->
<!--{-->
<!--return Cache::remember('_invoice_discount_percent_', now()->addMinute(), function () {-->
<!--return Compute::discounts()->sum('percent');//مجموع درصد تخفیف ذخیره می کند در کش-->
<!--});-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////-->
<!--//Repository-->
<!--public Model $model;-->
<!--public function __construct()-->
<!--{-->
<!--$this->setModel($this->model());-->
<!--}-->
<!--private function setModel(string $model): void-->
<!--{-->
<!--$this->model = app($model);-->
<!--}-->
<!--abstract public function model(): string;-->
<!---->
<!---->
<!--public function __call(string $method, array $parameters)-->
<!--{-->
<!--return $this->forwardCallTo($this->model, $method, $parameters);-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// query mysql-->
<!---->
<!---->
<!--select (point + 10) * 100 AS ‘discount’ from customers// تخفیف 10 درصد-->
<!--select DISTINCT state from customer//یونیک-->
<!--select * from customers where birth_date > ‘1990-10-10’ AND points > 3000-->
<!--select * from customers where birth_date > ‘1990-10-10’ OR points > 3000-->
<!--select * from customers where NOT ( birth_date > ‘1990-10-10’ OR points > 3000 )-->
<!--SELECT * FROM orders WHERE order_id = 6 AND price * quantity > 30 //greater then 30-->
<!--select * , quantity * price AS total FROM orders WHERE order_id = 2 ORDER BY total DESC-->
<!--select * from customers LIMIT 3-->
<!--select * from customers LIMIT 6,3-->
<!--select * from customers where state = ’va’ OR state = ’ga’-->
<!--select * from customers where state IN (‘va’,’fl’,’ga’)-->
<!--select * from customers where state NOT IN (‘va’,’fl’,’ga’)-->
<!--select * customer where birth_date BETWEEN ‘1990-01-01’ AND ‘1990-02-01’-->
<!--select * customer where name LIKE ‘mo%’-->
<!--select * customer where name LIKE ‘%mohsen%’-->
<!--select * customer where name REGEXP ‘^field|mac|rose’-->
<!--select * from customer where state != ’va’-->
<!--select * from products where category = ‘food’ order by price-->
<!--SELECT order_id , first_name FROM orders JOIN customers ON oerders.customer_id = customers.customer_id-->
<!--SELECT order_id , o.customer_id , first_name FROM orders o join customers C ON o.customer_id = c.customer_id-->
<!--SELECT order_id , oi.product_id FROM order_items oi JOIN products p ON oi.product_id = p.product_id-->
<!--SELECT * FROM employees e JOIN employees m ON e.reports_to = m.employee_id-->
<!--SELECT c.customer.id o.order_id FROM orders o LEFT JOIN customers c ON c.customer_id=o.customer_id ORDER BY c.customer_id-->
<!--SELECT order_id , ‘Archived’ AS status FROM orders WHERE order_date < ‘2019-10-10’-->
<!--SELECT first_name FROM archived_orders UNION SELECT name FROM orders //-->
<!--SELECT client_id FROM clients WHERE name=’mohsen’-->
<!--UPDATE invoices SET payment_total=invoicce_total * 0.5 WHERE client_id=3-->
<!--////////////////////////////////////////////////////////////// status-->
<!--Processed-->
<!--Shipped-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////-->
<!--این الگو زمانی کاربرد دارد که کاربر نیاز دارد تفاوت بین شیئ هایی که از ترکیب چند شیئ به وجود آمده‌اند را با یک شیئ در نظر نگیرد و بتواند با همه ی آن‌ها به صورت یکسان برخورد کند. در مواقعی که برنامه‌نویس در می‌یابد که از چندین شیئ به صورت یکسان استفاده می‌کند و کد مورد نیاز برای انجام کار نیز برای هرکدام تقریبا شبیه به هم است این الگوی طراحی انتخاب مناسبی است.-->
<!--////////////////////////////////////////////////////////////// Adapter-->
<!--Adapter این اجازه را می دهد کلاس هایی که اینترفیس های ناهمسازگار دارند با هم کار کنند-->
<!--// PaymentAdapter-->
<!--namespace Adapter;-->
<!--interface PaymentAdapter-->
<!--{-->
<!--public function pay($amount);-->
<!---->
<!--}-->
<!--//-->
<!--class PayPal extends Controller-->
<!--{-->
<!--public function sendPayment($amount)-->
<!--{-->
<!--echo "Paying via PayPal: " . $amount;-->
<!--}-->
<!--}-->
<!--//-->
<!--class PayPalAdapter implements PaymentAdapter-->
<!--{-->
<!--private $payPal;-->
<!---->
<!--public function __construct(PayPal $payPal)-->
<!--{-->
<!--$this->payPal = $payPal;-->
<!--}-->
<!---->
<!--public function pay($amount)-->
<!--{-->
<!--$this->payPal->sendPayment($amount);-->
<!--}-->
<!--}-->
<!--///////////////////////////////////////////////////////////////////////// debug-->
<!--نوع آرایه بدست بیاد-->
<!--$d=[];-->
<!--dd(get_debug_type($d));-->
<!--////////////////////////////////////////////////////////////// array column-->
<!--$items = [-->
<!--['label' => 'cake', 'name' => 'Cake', 'price' => 150],-->
<!--['label' => 'pizza', 'name' => 'Pizza', 'price' => 250],-->
<!--['label' => 'puff', 'name' => 'Veg Puff', 'price' => 20],-->
<!--['label' => 'samosa', 'name' => 'Samosa', 'price' => 14]-->
<!--];-->
<!---->
<!--$arrSum = array_sum(array_column($items, 'price', 'name'));-->
<!--print "Sum of Array : ".$arrSum."<br/>";-->
<!--////////////////////////////////////////////////////////////// array sum-->
<!--function sum_index($arr, $col_name){-->
<!--$sum = 0;-->
<!--foreach ($arr as $item) {-->
<!--$sum += $item[$col_name];-->
<!--}-->
<!--return $sum;-->
<!--}-->
<!--////////////////////////////////////////////////////////////// array sort-->
<!--$array = [50,12, 30, 10, 9, 14];-->
<!--$count = 0;-->
<!--foreach($array as $elem){-->
<!--$count++;-->
<!--}-->
<!--for ($i = 0; $i < $count; $i++) {-->
<!--for ($j = 0; $j < $count - 1; $j++) {-->
<!--if ($array[$j] > $array[$j + 1]) {-->
<!--$temp = $array[$j];-->
<!--$array[$j] = $array[$j + 1];-->
<!--$array[$j +1] = $temp;-->
<!--}-->
<!--}-->
<!--}-->
<!--print_r($array);-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// array reverse-->
<!--$array = array(1, 2, 3, 4);-->
<!--$size = sizeof($array);-->
<!--//$size = count($array);-->
<!--for($i=$size-1; $i>=0; $i--){-->
<!--echo $array[$i];-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////// pattern factory-->
<!---->
<!--protected function executive(): Attribute-->
<!--{-->
<!--return Attribute::get(-->
<!--fn() => filled($this->type) && filled($this->platform) ? CampaignFactory::make($this) : ''-->
<!--);-->
<!--}-->
<!--final class CampaignFactory-->
<!--{-->
<!---->
<!--final public static function make(Campaign $campaign): AbstractCampaign-->
<!--{-->
<!--$class = match ($campaign->platform) {-->
<!--'telegram' => match ($campaign->type) {-->
<!--'sms' => Sms::class,-->
<!--'member' => Member::class,-->
<!--'bulk' => Bulk::class,-->
<!--'targeted' => Bulk::class,-->
<!--},-->
<!--'instagram' => match ($campaign->type) {-->
<!--'sms' => Handlers\Instagram\Sms::class,-->
<!--'follower' => Follower::class,-->
<!--'comment' => Comment::class,-->
<!--'owner' => Owner::class,-->
<!--},-->
<!--default => throw new RuntimeException('Unexpected error.'),-->
<!--};-->
<!---->
<!--return app($class, [-->
<!--'campaign' => $campaign,-->
<!--]);-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////////-->
<!--//Campaign-->
<!--public function reject(): bool-->
<!--{-->
<!--return $this->update([-->
<!--'is_approved' => null,-->
<!--'status' => CampaignStatus::REJECTED->value,-->
<!--]);-->
<!--}-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////////-->
<!--/**-->
<!--* @inheritDoc-->
<!--*/-->
<!--public function apply(): Invoice-->
<!--{-->
<!--}-->
<!--////////////////////////////////////////////////////////////// relation bool-->
<!--اگر ریلیشن نداشت برو ریلیشن بزن-->
<!--public function hasAd(): bool-->
<!--{-->
<!--if (! $this->relationLoaded('ad')) {-->
<!--$this->load('ad');-->
<!--}-->
<!--return filled($this->ad);-->
<!--}-->
<!--public function execute()-->
<!--{-->
<!--// Log::info('execute 1');-->
<!---->
<!--ExecuteCampaign::dispatch($this)->delay($this->hasAd() ? $this->ad->dispatchDate() : now());-->
<!--// ExecuteCampaign::dispatch($this)->delay( now()->addSeconds(5) );-->
<!---->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// address-->
<!--ادرس-->
<!--/var/www/html/public-->
<!--///////////////////////////////////////////////////////////// point-->
<!--امتیاز-->
<!--$table->integer('points');-->
<!--$relatedProduct->increment('points', -1);-->
<!--$this->mRelatedProduct->whereIn('id', $relatedProductIds)->increment('points', 5);-->
<!--$related = RelatedProduct::factory()->create([-->
<!--'points' => 300,-->
<!--]);-->
<!--RelatedProduct::where('id', $related->id)->increment('points', -5);-->
<!--//////////////////////////////////////////////////////////// guard-->
<!--public function handle($request, Closure $next, $guard = null)-->
<!--{-->
<!--if (Auth::guard($guard)->check()) {-->
<!--if ($guard === 'admin') {-->
<!--return redirect('admin');-->
<!--}-->
<!--return redirect('shop');-->
<!--}-->
<!--return $next($request);-->
<!--}-->
<!--////////////////////////////////////////////////////////////// json create-->
<!--Processing::create([-->
<!--‘client_name’=>$request->name,-->
<!--‘client_address’=>json_encode([-->
<!--‘postal_code’=>$zipcode,-->
<!--‘country’=>$country-->
<!--])-->
<!--])-->
<!--//////////////////////////////////////////////////////////////toggle-->
<!--برعکس اون چیزی که هست ذخیره شود-->
<!--public function store(Post $post)-->
<!--{-->
<!--$post->likes()->toggle(-->
<!--auth()->user()->id-->
<!--);-->
<!---->
<!--return response(['ok'], 200);-->
<!--}-->
<!--///کاربر اگر دکمه زد بتونه ایدی خودش رو حذف کنه-->
<!--public function unSubscribe(Thread $thread)-->
<!--{-->
<!--Subscribe::query()->where([ ['thread_id', $thread->id], ['user_id', auth()->id()] ])->delete();-->
<!--return response()->json([-->
<!--'message' => 'user unsubscribed successfully'-->
<!--], Response::HTTP_OK);-->
<!--}-->
<!--////////////////////////////////////////////////////////////// where-->
<!--function fee(string $platform, string $type, string $title): Fee//اگر چیزهایی که میخوام داشت بگیر در غیر اینصورت نگیر-->
<!--{-->
<!--return Fee::where([ 'platform' => $platform, 'type' => $type, 'title' => $title, ])->firstOrFail();-->
<!--}-->
<!--////////////////////////////////////////////////////////////// get_class_methods-->
<!--گرفتن متدهای یک کلاس-->
<!--$object = new {class()};-->
<!--$array_methods = get_class_methods($object);-->
<!--print_r($array_methods);-->
<!--////////////////////////////////////////////////////////////// circuit breaker سیرکیوت بریکر-->
<!--وقتی همه چیز عادی است، circuit breaker در حالت بسته باقی مانده و تمام ارتباطات به سرویس ها منتقل می شوند. هنگامی که تعداد خرابی ها از یک تعداد از پیش تعیین شده بیشتر شود، circuit breaker به حالت Open می رود.-->
<!--در این وضعیت circuit breaker برای ارتباطات بدون اجرای واقعی ارتباط، خطا برمی گرداند.-->
<!--حالت نیمه باز (Half-Open): پس از مدت زمانی circuit breaker به حالت نیمه باز سوئیچ می شود تا وجود خطا را بررسی کند. اگر در این حالت تنها یک ارتباط خراب شود، یکبار دیگر circuit breaker قطع می شود. در صورت موفقیت ، circuit breaker مجدداً به حالت بسته و طبیعی بر می گردد.-->
<!--//////////////////////////////////////////////////////////// validated-->
<!--$data = $request->validated();-->
<!--//////////////////////////////////////////////////////////// session-->
<!--Distributed transactions Eventual consistency-->
<!--در مثال بالا (تصویر 3)، هنگامی که یک کاربر درخواست پرداخت را ارسال می کند، TransactionCoordinator ابتدا یک تراکنش جهانی را با تمام اطلاعات زمینه آغاز می کند. ابتدا دستور آماده سازی را به OrderMicroservice ارسال می کند تا یک سفارش ایجاد کند. سپس دستور آماده سازی را برای رزرو اقلام به InventoryMicroservice ارسال می کند. هنگامی که هر دو سرویس برای انجام تغییر مناسب هستند، اشیاء را از تغییرات بیشتر قفل می کنند و به TransactionCoordinator اطلاع می دهند. هنگامی که TransactionCoordinator تأیید کرد که همه میکروسرویس‌ها آماده اعمال تغییرات خود هستند، سپس از آنها می‌خواهد تا با درخواست تعهد برای تراکنش، تغییرات خود را ادامه دهند. در این مرحله، تمام اشیا باز می شوند.-->
<!---->
<!---->
<!--در یک سناریوی شکست (تصویر 4) - اگر در هر نقطه ای یک میکروسرویس منفرد آماده نشود، TransactionCoordinator تراکنش را لغو می کند و فرآیند بازگشت را آغاز می کند. در نمودار، OrderMicroservice به دلایلی موفق به ایجاد سفارش نشد، اما InventoryMicroservice پاسخ داده است که برای ایجاد سفارش آماده است. TransactionCoordinator درخواست لغو InventoryMicroservice را می‌دهد و سپس سرویس تغییرات ایجاد شده را برمی‌گرداند و اشیاء پایگاه داده را باز می‌کند.-->
<!---->
<!---->
<!--این رویکرد تضمین می کند که معامله اتمی است. این تراکنش با موفقیت تمام میکروسرویس ها به پایان می رسد یا همه میکروسرویس ها هیچ تغییری نکرده اند.-->
<!--ثانیا، اجازه جداسازی خواندن و نوشتن را می دهد، تغییرات روی اشیاء قابل مشاهده نیستند تا زمانی که هماهنگ کننده تراکنش تغییرات را انجام دهد.-->
<!--این رویکرد یک تماس همزمان است که در آن مشتری از موفقیت یا شکست مطلع می شود.-->
<!--معایب - مزایا-->
<!---->
<!---->
<!--همه چیز عالی نیست، انجام دو فاز در مقایسه با زمان کارکرد یک میکروسرویس بسیار کند است. آنها به شدت به هماهنگ کننده تراکنش وابسته هستند، که می تواند واقعاً سیستم را در هنگام بارگذاری زیاد کند کند.-->
<!--اشکال اصلی دیگر قفل شدن ردیف های پایگاه داده است. قفل می تواند به یک گلوگاه عملکرد تبدیل شود و ممکن است یک بن بست وجود داشته باشد که در آن دو تراکنش متقابلاً یکدیگر را قفل می کنند.-->
<!--Saga-->
<!--در مثال بالا (تصویر 5)، مشتری از سیستم درخواست می کند تا سفارش را پردازش کند. در این درخواست، طراح رقص یک رویداد Create Order را منتشر می کند که شروع تراکنش را نشان می دهد. OrderMicroservice به این رویداد گوش می دهد و یک سفارش ایجاد می کند، اگر موفقیت آمیز بود، یک رویداد Order Created را منتشر می کند. طراح رقص به این رویداد گوش می دهد و با انتشار رویداد Reserve Items اقدام به رزرو آیتم ها می کند. InventoryMicroservice به این رویداد گوش می دهد و موارد را رزرو می کند، در صورت موفقیت آمیز بودن، رویداد Items Reserved را منتشر می کند. که در این مثال به معنای پایان معامله است.-->
<!---->
<!---->
<!--تمام ارتباطات مبتنی بر رویداد بین میکروسرویس ها از طریق Event Bus انجام می شود و توسط سیستم دیگری برای رسیدگی به مسئله پیچیدگی طراحی می شود.-->
<!---->
<!---->
<!--اگر به هر دلیلی InventoryMicroservice موفق به رزرو آیتم ها نشود (تصویر 6)، رویداد Failed to Reserve Items را منتشر می کند. طراح رقص به این رویداد گوش می دهد و یک تراکنش جبرانی را با انتشار یک رویداد Delete Order آغاز می کند. OrderMicroservice به این رویداد گوش می دهد و سفارش ایجاد شده را حذف می کند.-->
<!--یکی از مزیت های بزرگ این رویکرد این است که هر میکروسرویس فقط بر تراکنش اتمی خود تمرکز می کند. اگر سرویس دیگری طول بکشد، Microservice مسدود نمی شود. این همچنین به این معنی است که نیازی به قفل پایگاه داده وجود ندارد. استفاده از این رویکرد به دلیل راه حل مبتنی بر رویداد ناهمزمان، سیستم را تحت بارهای سنگین بسیار مقیاس پذیر می کند.-->
<!---->
<!---->
<!--نقطه ضعف اصلی این است که رویکرد انزوا خواندن ندارد. به این معنی که در مثال بالا، مشتری می‌تواند ببیند که سفارش ایجاد شده است، اما در ثانیه بعد، به دلیل یک تراکنش جبران‌کننده، سفارش حذف می‌شود. همچنین، هنگامی که تعداد میکروسرویس ها افزایش می یابد، اشکال زدایی و نگهداری آن دشوارتر می شود.-->
<!---->
<!---->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// Approach-->
<!--Approach رویکرد-->
<!--//////////////////////////////////////////////////////////// session-->
<!--public function index()-->
<!--{-->
<!--$limiter = app(RateLimiter::class);-->
<!--$actionKey = 'service_name';-->
<!--$threshold = 5;-->
<!--try {-->
<!--if ($limiter->tooManyAttempts($actionKey, $threshold)) {-->
<!--return $this->failOrFallback();-->
<!--}-->
<!--$response = Http::timeout(3)->get('https://myapp.app/api/admins');-->
<!--$content = json_decode($response->body());-->
<!--dd($content);-->
<!--} catch (Exception $exception) {-->
<!--$limiter->hit($actionKey, Carbon::now()->addMinutes(15));-->
<!--return $this->failOrFallback();-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// session-->
<!--//////////////////////////////////////////////////////////// session-->
<!--//////////////////////////////////////////////////////////// ip_address-->
<!---->
<!---->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// PostComment-->
<!--//Post-->
<!--Protected function title():Attribute-->
<!--{-->
<!--Return new Attribute(-->
<!--set:fn($value)=>[-->
<!--‘title’=>$value,-->
<!--‘slug’=>Str::slug($value)-->
<!--]-->
<!--)-->
<!--}-->
<!--Public function user(){-->
<!--Return $this->belongsTo(User::class);-->
<!--}-->
<!--Public function comments(){-->
<!--Return $this->belongsTo(Comment::class)->whereNull(‘parent_id’);-->
<!--}-->
<!--//Comment-->
<!--unsignedBigInteger(‘user_id’);-->
<!--unsignedBigInteger(‘post_id’);-->
<!--unsignedBigInteger(‘parent_id’)->nullable;-->
<!--text(‘comment’);-->
<!--Protected $fillable=[‘user_id’,’post_id’,’parent_id’,’comment’];-->
<!--Public function user(){-->
<!--Return $this->belongsTo(User::class);-->
<!--}-->
<!--Public function post(){-->
<!--Return $this->belongsTo(Post::class);-->
<!--}-->
<!--Public function replies(){-->
<!--Return $this->belongsTo(Comment::class,’parent_id ’);-->
<!--}-->
<!--//Post-->
<!--Title image slug user_id body-->
<!--//PostController-->
<!--Public function index(){-->
<!--$posts=Post::all();-->
<!--Return view(‘posts.index’,compact(‘posts’));-->
<!--}-->
<!--Public function show($slug){-->
<!--$post=Post::whereSlug($slug)->with([-->
<!--//’user’-->
<!--‘User:id,name’,-->
<!--‘Comments.user:id,name’,-->
<!--‘Comments.replies.user:id,name’,-->
<!--‘Comment.replies.replies.user:id,name’,-->
<!--‘comments.replies.replies.replies.user:id,name’-->
<!--])->first();-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// getData-->
<!--اگر بخواهیم جزییات فیلد خاص مدل بگیریم-->
<!--public function getData(string $key, mixed $default = null): mixed-->
<!--{-->
<!--return data_get($this->details, $key, $default);-->
<!--}-->
<!--public function getAmount()-->
<!--{-->
<!--return $this->getData('amount');-->
<!--}-->
<!--public function targetsId(): array-->
<!--{-->
<!--return $this->getData('targets_id');-->
<!--}-->
<!--//////////////////////////////////////////////////////////// command schedule-->
<!--* * * * * cd /var/www/html && php artisan schedule:run >> /dev/null 2>&1-->
<!--//////////////////////////////////////////////////////////// php fpm fast cgi -->
<!--وقتی که وب سرور یک درخواست ورودی برای یک اسکریپت پی اچ پی دارد، وب سرور با استفاده از یک پروکسی، یک اتصال فست سی جی ای برای انتقال درخواست به سرویس پی اچ پی اف پی ام می زند.پی اچ پی اف پی ام به درخواست های بر روی پورت های شبکه یا سوکت های یونیکس گوش می دهد تا این درخواست ها را دریافت کند.-->
<!--به محض دریافت یک اتصال پروکسی شده از سمت وب سرور، یکی از ورکر های آزاد درخواست را قبول می کند و شروع به اجرای کد پی اچ پی می کند و بعد از آن پاسخ را به سمت وب سرور بر می گرداند. وقتی کار ورکر به پایان رسید، سرویس این ورکر را آزاد می کند تا بتواند منتظر درخواست های بعدی باشد.-->
<!--در پی اچ پی اف پی ام می توانیم چند پول تعریف کنیم و برای هر کدام کانفیگ های مجزایی در نظر بگیریم و درخواست های مختلف به مسیر های مختلف را به پول های مختلفی متصل کنیم-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// order-->
<!--Schema::create('orders', function (Blueprint $table) {-->
<!--$table->bigIncrements('id');-->
<!--$table->integer('customer_id');-->
<!--$table->integer('shipping_id');-->
<!--$table->float('total_price',10,2);-->
<!--$table->string('payment_type');-->
<!--$table->string('order_status')->default('Pendding');-->
<!--$table->string('payment_status')->default('Pendding');-->
<!--$table->timestamps();-->
<!--});-->
<!--Schema::create('order_details', function (Blueprint $table) {-->
<!--$table->bigIncrements('id');-->
<!--$table->integer('order_id');-->
<!--$table->integer('product_id');-->
<!--$table->string('product_name');-->
<!--$table->string('product_image');-->
<!--$table->float('product_price',10,2);-->
<!--$table->integer('product_quantity');-->
<!--$table->timestamps();-->
<!--});-->
<!--//-->
<!--public function order_detail_by_order_id($order_id)-->
<!--{-->
<!--$order = Order::find($order_id);-->
<!--$customer = Customer::find($order->customer_id);-->
<!--$shipping = shipping::find($order->shipping_id);-->
<!--$order_details = OrderDetail::where('order_id',$order->id)->get();-->
<!--return view('dashboard.order.order_details',['order'=>$order,'customer'=> $customer,'shipping'=>$shipping,'order_details'=>$order_details]);-->
<!--}-->
<!---->
<!---->
<!---->
<!---->
<!--///-->
<!--برو به اوردر کاربر اطلاعات را ذخیره کن-->
<!--$order=new Order();-->
<!--$order->cart=serialize($cart);-->
<!--Auth::user()->orders()->save($order);-->
<!--//////////////////////////////////////////////////////////// setup-->
<!--setUp()-->
<!--tearDown()-->
<!--در تست پی اچ پی یونیت ما متد ست اپ داریم که قبل از هر تست فراخوانی می شود. و ما متد ترن داون را داریم که بعد از هر تست فراخوانی می شود.-->
<!--ما از متد ست اپ برای مقداردهی اولیه متغیرها، باز کردن اتصال فایل و غیره استفاده می کنیم که محیط را برای آزمایش آماده می کند.-->
<!--//////////////////////////////////////////////////////////// readonly-->
<!--فقط کاربر از نوع استرینگ بگیره-->
<!--Class x{-->
<!--Public function string $user;-->
<!--Public function __construct(string $user){-->
<!--$this->user=$user;-->
<!--}-->
<!--}-->
<!--//////////////////////////////////////////////////////////// tryForm-->
<!--Enum UserStatus:int-->
<!--{-->
<!--Case Active=1;-->
<!--}-->
<!--$status=4;-->
<!--$enumStatus=UserStatus::tryForm($status);//اگر وجود نداشت نال بده خطا نده-->
<!--$enumStatus=UserStatus::tryForm($status)؟؟UserStatus::Pending;//اگر وجود نداشت پندینگ بده-->
<!---->
<!---->
<!--var_dump($enumStatus);-->
<!--//////////////////////////////////////////////////////////// server-->
<!--بهینه سازی-->
<!--Apache bench mark-->
<!--Hybrid approach-->
<!--Singlethreaded event loop-->
<!--Multithreaded network app-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// log-->
<!--چقد کویری زده می شود-->
<!--//serviceprovider boot-->
<!--DB::listen(function($query) {-->
<!--Log::info(-->
<!--$query->sql,-->
<!--$query->bindings,-->
<!--$query->time-->
<!--);-->
<!--});-->
<!--////////////////////////////////////////////////////////////// array_filter-->
<!--$example = array(100, "hardik", null, "hey", NULL, "", 77);-->
<!--$result = array_filter($example, function($value) {-->
<!--return !is_null($value);-->
<!--});-->
<!--print_r($result);-->
<!--//////////////////////////////////////////////////////////////// array_map-->
<!--$array1 = [ -->
<!--    '0'=> ['name'=>'Hardik','Surname'=>'Savani'], -->
<!--    '1'=> ['name'=>'Harsukh','Surname'=>'Makawana'], -->
<!--   ]; -->
<!--$array2 = [ -->
<!--    '0'=> ['name1'=>'Harshad','Surname1'=>'Pathak'], -->
<!--    '1'=> ['name1'=>'Vimal','Surname1'=>'Kashiyani'], -->
<!--   ]; -->
<!--$result = array_map(function($array1,$array2){ -->
<!-- return array_merge(isset($array1) ? $array1 : array(), isset($array2) ? $array2 : array());-->
<!-- },$array1,$array2); -->
<!--print_r($result);-->
<!--/////////////////////////////////////////////////////////////// convert array to string-->
<?php
//$users = ["Hardik", "Vimal", "Harshad", "Paresh"];
//$string = implode( ' , ', $users);
//print_r($array);
//
///////////////////////////////////////////////////////////////// xml to json
//<?php
// $xmlString = file_get_contents('sample.xml');
//$xmlObject = simplexml_load_string($xmlString);
//
//$json = json_encode($xmlObject);
//$phpArray = json_decode($json, true);
//
//print_r($phpArray);
//?>
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// search-->
<!--// CompanyController-->
<!--public function index(Request $request)-->
<!--{-->
<!--$filter = $request->get('filter', '');-->
<!--$companies = $this->companyService->getCompanies($filter);-->
<!--return CompanyResource::collection($companies);-->
<!--}-->
<!---->
<!---->
<!--//CompanyService-->
<!--class CompanyService-->
<!--{-->
<!--protected $repository;-->
<!--public function __construct(Company $model)-->
<!--{-->
<!--$this->repository = $model;-->
<!--}-->
<!--public function getCompanies(string $filter = '')-->
<!--{-->
<!--return $this->repository->getCompanies($filter);-->
<!--}-->
<!--//Company-->
<!--public function getCompanies(string $filter = '')//اگر داخل اینپوت خالی نبود جستجو کن-->
<!--{-->
<!--$companies = $this->with('category')-->
<!--->where(function($query) use ($filter) {-->
<!--if($filter != ' ') {-->
<!--$query->where('name', 'LIKE', "%{$filter}%")-->
<!--->orWhere('email', 'LIKE', "%{$filter}%")-->
<!--->orWhere('whatsapp', 'LIKE', "%{$filter}%");-->
<!--}})->paginate();-->
<!--return $companies;-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// Formrequest-->
<!--public function rules()-->
<!--{-->
<!--$uuid = $this->company;-->
<!---->
<!---->
<!--$rules = [-->
<!--'category_id' => 'required|exists:categories,id',-->
<!--'name' => "required|unique:companies,name,{$uuid},uuid",-->
<!--'whatsapp' => "required|unique:companies,whatsapp,{$uuid},uuid",-->
<!--'email' => "required|email|unique:companies,email,{$uuid},uuid",-->
<!--'phone' => "nullable|unique:companies,phone,{$uuid},uuid",-->
<!--'instagram' => "nullable|unique:companies,instagram,{$uuid},uuid",-->
<!--'image' => 'required|image|max:1024',-->
<!--];-->
<!--if($this->method() == 'PUT')-->
<!--$rules['image'] = 'nullable|image|max:1024';-->
<!--return $rules;-->
<!--}-->
<!--///////-->
<!--public function store(Question $question, Request $request)-->
<!--{-->
<!--$question->answers()->create($request->validate([-->
<!--'body' => 'required'-->
<!--]) + ['user_id' => \Auth::id()]);-->
<!---->
<!---->
<!--return back()->with('success', "Your answer has been submitted successfully");-->
<!--}-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// data consistency saga-->
<!--data consistency سازگاری داده-->
<!--Orchestration-->
<!--یک ارکستر مسئول مدیریت وضعیت کلی تراکنش است.-->
<!--اگر هر یک از میکروسرویس ها با شکست مواجه شود، ارکستراتوار مسئول فراخوانی تراکنش های جبرانی لازم است.-->
<!--هر عملیاتی که بخشی از ساگا است را می توان با یک تراکنش جبرانی بازگرداند.-->
<!---->
<!--//////////////////////////////////////////////////////////// middleware-->
<!--Public function handle(){-->
<!--if(auth()->check() && $request->user()->whereBlock(false)){-->
<!--Return $next($request);-->
<!--}-->
<!--Return response()->json([‘message’=>’you are block’],Response::HTTP_FORBIDDEN);-->
<!--}-->
<!--//Kernal.php-->
<!--‘user-block’=>UserBlock::class,-->
<!--//ThreadController.php-->
<!--Public function __construct(){-->
<!--$this->middleware([‘user-block’])->except([‘index’,’show’]);//بغیر از اینا بقیه احراز-->
<!--}-->
<!--//////////////////////////////////////////////////////////// notification array-->
<!--Public function user(){}{-->
<!--$data=[-->
<!--Auth::user(),-->
<!--‘notification’=>Auth::user()->unreadNotification(),-->
<!--];-->
<!--Return response()->json($data,Response::HTTP_OK);//پیام های نخوانده-->
<!--}-->
<!--//////////////////////////////////////////////////////////// cluster rabbitmq-->
<!--یک کلاستر شامل تعدادی نود از کامپیوتر هایی است که با هم کار می کنند.-->
<!--یک اینستنس از ربیت ام کیو که بیش از یک نود داشته باشد، کلاستر نامیده می شود.-->
<!--//////////////////////////////////////////////////////////// cache php-->
<!--// top-cache.php-->
<?php
//$url = $_SERVER["SCRIPT_NAME"];
//$break = Explode('/', $url);
//$file = $break[count($break) - 1];
//$cachefile = 'cached-'.substr_replace($file ,"",-4).'.html';
//$cachetime = 18000;
//
//
//// Serve from the cache if it is younger than $cachetime
//if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
//echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
//readfile($cachefile);
//
//
////bottom-cache.php
//<?php
//// Cache the contents to a cache file
//$cached = fopen($cachefile, 'w');
//fwrite($cached, ob_get_contents());
//fclose($cached);
//ob_end_flush(); // Send the output to the browser
//?>
<!--//-->
<?php
//
//
//include('top-cache.php');
//
//
//// Your regular PHP code goes here
//
//
//include('bottom-cache.php');
//?>
<!---->
<!---->
<!--///-->
<!--output Buffer و Filesystem-->
<!--<div><br class="Apple-interchange-newline">--><?php
//ob_start(); // start the output buffer
//
//
///* the content */
//ob_get_contents(); gets the contents of the output buffer
//ob_end_flush(); // Send the output and turn off output buffering
//?><!--</div>-->
<!--در خط اول ob_start() ، output buffering را فعال می کند یعنی اینکه بعد از این همه چیز در بافر ذخیره و محتویات بافر از طریق ob_get_contents() در دسترس خواهد بود . ob_end_flush() در اخر برای غیرفعال سازی بافرینگ استفاده شده است.-->
<!--کل صفحه HTML در یک متغییر ارسال می شود-->
<!---->
<!---->
<!--1-->
<!--2-->
<!--3-->
<!--$fp = fopen('/path/to/file.txt', 'w'); //open file for writing-->
<!--fwrite($fp, 'I want to write this'); //-->
<!--fclose($fp); //Close file pointer-->
<!---->
<!--در خط اول fopen() یک فایل را در مود رایت که با w مشخص شده است باز می کند (در صورتی که وجود نداشته باشد ، می سازد) . در خط دوم fwrite() رشته تعریف شده را در فایل اضافه می کند و در اخر fclose() با موفقیت فایل باز شده در ابتدای کد را می بندد.-->
<!---->
<!---->
<!--//////////////////////////////////////////////////////////// exchange kafka-->
<!--وطیفه هدایت پیام به صف-->
<!--Direct exchange-->
<!--Direct exchange براساس کلید مسیریابی پیام پیام ها را به صف ها ارسال می کند-->
<!--Fanout exchange-->
<!--این نوع exchange کاری به کلید مسیریابی ندارد و پیام‌ها را برای همه صف ها ارسال می کند برای برود کستینگ خوبه-->
<!--Topic exchange-->
<!--پیام‌ها را به یک یا چند صف می‌فرستد. نحوه تصمیم گیری برای اینکه پیام را به کدام صف ارسال کند بستگی به کلید مسیریابی و همچنین الگویی است که صف را به Exchange متصل می کند.-->
<!--Headers exchange-->
<!--این Exchange شبیه به Direct Exchange است با این تفاوت که به جای توجه کردن به کلید مسیریابی از اطلاعات header پیام استفاده می کند.-->
<!--در حالت پیش فرض از direct-->
<!--//////////////////////////////////////////////////////////// Zookeeper kafka-->
<!--Zookeeper برای مدیریت و تنظیم کردن کافکا بروکر به کار میره. یه رابط بین بروکرهای و consumers هاست.-->
<!--به کمک سرویس زوکیپر از حضور بروکر جدید یا فیل شدن بروکر باخبر می شوید-->
<!--سرویس Zookeeper اساساً برای این به کار میره که به producer و consumer درباره ی حضور یه بروکر جدید در سیستم کافکا یا fail شدن یه بروکر تو سیستم کافکا خبر بده. وقتی Zookeeper در باره ی حضور یا fail شدن یه بروکر تو سیستم کافکا خبر میده producer و consumer تصمیم میگیرن و شروع میکنند به تنظیم کردن تسک هاشون با یه بروکر دیگه. همچنین انتخاب کافکا بروکری که leader میشه توسط Zookeeper انجام میشه.-->
<!--//////////////////////////////////////////////////////////// psr-->
<!--PSR مخفف PHP Standards Recommendation یا «توصیه های استاندارد PHP» است-->
<!--نام کلاس ها با حروف بزرگ شروع بشه-->
<!--در cast از حروف بزرگ استفاده کنید-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////distributed-->
<!--توزیع-->
<!--//////////////////////////////////////////////////////////// approach cache php-->
<!--///////////////////////////////////////////////////////////require include-->
<!--اگر از دستور include استفاده کنید در صورتی که فایلی که include کردید وجود نداشته باشه PHP یک Warning میده و به کارش ادامه میده یعنی بقیه لاین ها رو هم میخونه چه خطا وجود داشته باشه و چه نداشته باشه!-->
<!---اگر از دستور require استفاده کنید در صورتی که فایلی که require کردید وجود نداشته باشه PHP یک Fatal error میده و دیگه به کارش ادامه نمیده تا مشکل حل بشه.-->
<!--همونطور که از اسمهاشون هم معلومه ، include به معنی "شامل بودن" هست ولی require به معنی "نیاز داشتن".-->
<!---->
<!---->
<!--/////////////////////////////////////////////////////////// field display-->
<!--$table->boolean('flag')->default(1)->comment('show or not display');-->
<!--//////////////////////////////////////////////////////////// session card-->
<!--public function up()-->
<!--{-->
<!--Schema::create('sessions', function (Blueprint $table) {-->
<!--$table->string('id')->unique();-->
<!--$table->foreignId('user_id')->nullable();-->
<!--$table->string('ip_address', 45)->nullable();-->
<!--$table->text('user_agent')->nullable();-->
<!--$table->text('payload');-->
<!--$table->integer('last_activity');-->
<!--});-->
<!--}-->
<!--///-->
<!--//middleware-->
<!--public function handle($request, Closure $next)-->
<!--{-->
<!--if (!Session::get('shipping_id')) {-->
<!--return redirect('/checkout/shipping');-->
<!--}-->
<!--return $next($request);-->
<!--}-->
<!--///-->
<!--Session::put(['customer_name'=> $customer->first_name.' '.$customer->last_name]);-->
<!--///-->
<!--$session=Session::has(‘cart’)?Session::get(‘cart’):null;//اگر سشن داشت بده-->
<!--///-->
<!--class ProductController extends Controller-->
<!--{-->
<!--/**-->
<!--* Write code on Method-->
<!--*-->
<!--* @return response()-->
<!--*/-->
<!--public function index()-->
<!--{-->
<!--$products = Product::all();-->
<!--return view('products', compact('products'));-->
<!--}-->
<!--/**-->
<!--* Write code on Method-->
<!--*-->
<!--* @return response()-->
<!--*/-->
<!--public function cart()-->
<!--{-->
<!--return view('cart');-->
<!--}-->
<!--/**-->
<!--* Write code on Method-->
<!--*-->
<!--* @return response()-->
<!--*/-->
<!--public function addToCart($id)-->
<!--{-->
<!--$product = Product::findOrFail($id);-->
<!--$cart = session()->get('cart', []);-->
<!--if(isset($cart[$id])) {-->
<!--$cart[$id]['quantity']++;//اگر از قبل انتخاب کرده بود یکی یکی اضافه شود-->
<!--} else {-->
<!--$cart[$id] = [-->
<!--"name" => $product->name,-->
<!--"quantity" => 1,-->
<!--"price" => $product->price,-->
<!--"image" => $product->image-->
<!--];-->
<!--}-->
<!--session()->put('cart', $cart);-->
<!--return redirect()->back()->with('success', 'Product added to cart successfully!');-->
<!--}-->
<!--/**-->
<!--* Write code on Method-->
<!--*-->
<!--* @return response()-->
<!--*/-->
<!--public function update(Request $request)-->
<!--{-->
<!--if($request->id && $request->quantity){-->
<!--$cart = session()->get('cart');-->
<!--$cart[$request->id]["quantity"] = $request->quantity;-->
<!--session()->put('cart', $cart);-->
<!--session()->flash('success', 'Cart updated successfully');-->
<!--}-->
<!--}-->
<!--/**-->
<!--* Write code on Method-->
<!--*-->
<!--* @return response()-->
<!--*/-->
<!--public function remove(Request $request)-->
<!--{-->
<!--if($request->id) {-->
<!--$cart = session()->get('cart');-->
<!--if(isset($cart[$request->id])) {-->
<!--unset($cart[$request->id]);-->
<!--session()->put('cart', $cart);-->
<!--}-->
<!--session()->flash('success', 'Product removed successfully');-->
<!--}-->
<!--}-->
<!--}-->
<!--//resources/views/cart.blade.php-->
<!---->
<!---->
<!--<table id="cart" class="table table-hover table-condensed">-->
<!--<thead>-->
<!--<tr>-->
<!--<th style="width:50%">Product</th>-->
<!--<th style="width:10%">Price</th>-->
<!--<th style="width:8%">Quantity</th>-->
<!--<th style="width:22%" class="text-center">Subtotal</th>-->
<!--<th style="width:10%"></th>-->
<!--</tr>-->
<!--</thead>-->
<!--<tbody>-->
<!--@php $total = 0 @endphp-->
<!--@if(session('cart'))-->
<!--@foreach(session('cart') as $id => $details)-->
<!--@php $total += $details['price'] * $details['quantity'] @endphp-->
<!--<tr data-id="{{ $id }}">-->
<!--<td data-th="Product">-->
<!--<div class="row">-->
<!--<div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>-->
<!--<div class="col-sm-9">-->
<!--<h4 class="nomargin">{{ $details['name'] }}</h4>-->
<!--</div>-->
<!--</div>-->
<!--</td>-->
<!--<td data-th="Price">${{ $details['price'] }}</td>-->
<!--<td data-th="Quantity">-->
<!--<input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />-->
<!--</td>-->
<!--<td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>-->
<!--<td class="actions" data-th="">-->
<!--<button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>-->
<!--</td>-->
<!--</tr>-->
<!--@endforeach-->
<!--@endif-->
<!--</tbody>-->
<!--<tfoot>-->
<!--<tr>-->
<!--<td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>-->
<!--</tr>-->
<!--<tr>-->
<!--<td colspan="5" class="text-right">-->
<!--<a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>-->
<!--<button class="btn btn-success">Checkout</button>-->
<!--</td>-->
<!--</tr>-->
<!--</tfoot>-->
<!--</table>-->
<!--@endsection-->
<!--@section('scripts')-->
<!--<script type="text/javascript">-->
<!--$(".update-cart").change(function (e) {-->
<!--e.preventDefault();-->
<!--var ele = $(this);-->
<!--$.ajax({-->
<!--url: '{{ route('update.cart') }}',-->
<!--method: "patch",-->
<!--data: {-->
<!--_token: '{{ csrf_token() }}',-->
<!--id: ele.parents("tr").attr("data-id"),-->
<!--quantity: ele.parents("tr").find(".quantity").val()-->
<!--},-->
<!--success: function (response) {-->
<!--window.location.reload();-->
<!--}-->
<!--});-->
<!--});-->
<!--$(".remove-from-cart").click(function (e) {-->
<!--e.preventDefault();-->
<!--var ele = $(this);-->
<!--if(confirm("Are you sure want to remove?")) {-->
<!--$.ajax({-->
<!--url: '{{ route('remove.from.cart') }}',-->
<!--method: "DELETE",-->
<!--data: {-->
<!--_token: '{{ csrf_token() }}',-->
<!--id: ele.parents("tr").attr("data-id")-->
<!--},-->
<!--success: function (response) {-->
<!--window.location.reload();-->
<!--}-->
<!--});-->
<!--}-->
<!--});-->
<!--</script>-->
<!--/////////////////////////////////////////////////////////// bash-->
<!--Docker exec -it elasticsearch bash-->
<!--docker-compose exec -d app php artisan migrate-->
<!--Docker-compose exec main sh-->
<!--////////////////////////////////////////////////////////// session middleware-->
<!--Public function handle(Request $request){-->
<!--if(session(‘utype’)===’ADM’)-->
<!--Return $next($request);-->
<!--}else{-->
<!--session()->flush();-->
<!--Return redirect()->route(‘login’);-->
<!--}-->
<!--Return $next($request);-->
<!--////////////////////////////////////////////////////////// score-->
<!--//users-->
<!--$table->integer('score')->default(0);-->
<!--//-->
<!--Public function leaderboards()-->
<!--{-->
<!--Return User::query()->orderByDesc(‘score’)->paginate(20);-->
<!--}-->
<!--//QuestionController-->
<!--امتیاز به کاربری که پاسخ سوال را بده نه خود طراح سوال-->
<!--if(Question::find($request->input(‘question_id’))->user_id!==auth()->id()){-->
<!--auth()->user()->increment(‘score’,10);-->
<!--}-->
<!--////////////////////////////////////////////////////////// pluck-->
<!--$request->validate([‘thread_id’=>’required’]);-->
<!--$user=Post::query()->where(‘thread_id’,$request->thread_id)->pluck(‘user_id’)->all();-->
<!--Notification::send(User::find($user),new NewReply(Thread::find($request->thread_id)));-->
<!--////////////////////////////////////////////////////////// format date-->
<!--Public $thread;-->
<!--Public function __constrcut(Thread $thread){-->
<!--$this->thread=$thread-->
<!--}-->
<!--Public function via($notifiable){-->
<!--Return [‘database’];-->
<!--}-->
<!--Public function toDatabase($notifiable)-->
<!--Return [-->
<!--‘thread_title’=>$this->thread->title,-->
<!--‘url’=>route(‘thread.show’,[$this->thread]),-->
<!--‘time’=>now()=>format(‘Y-m-d H:i:s’),-->
<!--];-->
<!--////////////////////////////////////////////////////////// auth create subscribe-->
<!--کاربر احراز شده سابسکرایب کند-->
<!--//User.php-->
<!--Public function subscribe(){-->
<!--Return $this->hasMany(Subscribe::class);-->
<!--}-->
<!--//Subscribe-->
<!--Public function subscribe(){-->
<!--auth()->user()->subscribe()->create([-->
<!--‘thread_id’=>$thread->id-->
<!--]);-->
<!--Return back();-->
<!--}-->
<!--Public function unSubscribe(Thread $thread)-->
<!--{-->
<!--Subscribe::query()->where([-->
<!--[‘thread_id’,$thread->id],-->
<!--[‘user_id’,auth()->id()]-->
<!--])->delete();-->
<!--Return response()->json([‘message’=>’successfully’],Response::HTTP_OK);-->
<!--}-->
<!--///-->
<!--Subscribe::query()->firstOrCreate([-->
<!--‘user_id’=>auth()->id(),-->
<!--‘thread_id’=>$thread->id-->
<!--])-->
<!--////////////////////////////////////////////////////////// find $request-->
<!--میخواهم در کامنت پست پیدا شده چیزی ذخیره کنم-->
<!--Post::find($request->post_id)->comment()->create([-->
<!--‘content’=>$request->input(‘content’),-->
<!--‘user_id’=>auth()->id()-->
<!--]);-->
<!--////////////////////////////////////////////////////////// collection-->
<!--ارایه تبدیل به آبجکت می کند می توانیم از گیت استفاده کنیم-->
<!--$collection = collect(['name' => 'taylor', 'framework' => 'laravel']);-->
<!--$value = $collection->get('name');-->
<!--$value = $collection->count();-->
<!--$value = $collection->values();-->
<!--$value = $collection->chunk(1);-->
<!--$value = $collection->pluck(‘name’);-->
<!--///-->
<!--collect([1, 2, 3, 4, 5])->sum();-->
<!--///-->
<!--$collection = collect([-->
<!--['name' => 'JavaScript: The Good Parts', 'pages' => 176],-->
<!--['name' => 'JavaScript: The Definitive Guide', 'pages' => 1096],-->
<!--]);-->
<!--///-->
<!--$collection->sum('pages');-->
<!--///-->
<!--$collection = collect([0, 1, 2, 3, 4, 5]);-->
<!--$chunk = $collection->take(3);-->
<!--$chunk->all();-->
<!--/// tojson-->
<!--$collection = collect(['name' => 'Desk', 'price' => 200]);-->
<!--$collection->toJson();-->
<!--//-->
<!--$collection = collect([-->
<!--['name' => 'Jim', 'deleted_at' => '2019-01-01 00:00:00'],-->
<!--['name' => 'Sally', 'deleted_at' => '2019-01-02 00:00:00'],-->
<!--['name' => 'Sue', 'deleted_at' => null],-->
<!--]);-->
<!--$filtered = $collection->where('deleted_at', '!=', null);-->
<!--$filtered->all();-->
<!--//-->
<!--$collection = collect([-->
<!--['name' => 'Desk'],-->
<!--['name' => null],-->
<!--['name' => 'Bookcase'],-->
<!--]);-->
<!--$filtered = $collection->whereNotNull('name');-->
<!--$filtered->all();-->
<!--///////////////////////////////////////////////////////////////////////// wrap-->
<!--تبدیل استرینگ به ارایه-->
<!--$collection = Collection::wrap('John Doe');-->
<!--$collection->all();-->
<!--////////////////////////////////////////////////////////// my ip-->
<!--172.25.0.5-->
<!--///////////////////////////////////////////////////////////////// docker jadid xdebug-->
<!--https://github.com/systemsdk/docker-nginx-php-laravel-->
<!--make build-->
<!--make start-->
<!--make composer-install-->
<!--make env-dev-->
<!--make migrate-->
<!--make seed-->
<!--make key-generate-->
<!--make ssh-->
<!--/////////////////////////////////////////////////////////////////////////////////////////////////// strict mode-->
<!--// Strict mode باگیابی-->
<!--declare(strict_types = 1);-->
<?php
//declare(strict_types = 1);
//function sum(int ...$ints) {
//return array_sum($ints);
//}
//print(sum(2, '3', 4.1));
//?>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////////// return type-->
<!--bool-->
<!--string-->
<!--interfaces-->
<!--array-->
<!--Callable-->
<!--Void-->
<!--Response-->
<!--Collection-->
<!--Post-->
<!--RedirectResponse-->
<!--Builder-->
<!--use Illuminate\Database\Eloquent\Builder;-->
<!--public function scopeDiscounts(Builder $query): Builder-->
<!--{-->
<!--return $query->where('type', 'discount');-->
<!--}-->
<!--public function teams(): BelongsToMany-->
<!--{-->
<!--return $this->belongstoMany(Team::class);-->
<!--}-->
<!--public function getNameAttribute(): PersonName-->
<!--{-->
<!--return new PersonName($this->first_name, $this->last_name);-->
<!--}-->
<!--public function getFirstNameAttribute($value): string-->
<!--{-->
<!--$this->attributes['FirstName'] = ucfirst($value);-->
<!--}-->
<!--function returnIntValue(int $value): int {-->
<!--return $value;-->
<!--}-->
<!--public function __invoke($id): RedirectResponse-->
<!--{-->
<!--Campaign::query()->findOrFail($id)->execute();-->
<!--post_curl('فعالسازی کمپین'.Auth::user()->fullName());-->
<!--return back();-->
<!--}-->
<!--////////////////////////////////////////////////////////// check object-->
<!--اگر متغیر از نوع آرایه بود یا آبجکت بود-->
<!--public function implode($value, $glue = null)-->
<!--{-->
<!--$first = $this->first();-->
<!--if (is_array($first) || (is_object($first)) {-->
<!--return implode($glue ?? '', $this->pluck($value)->all());-->
<!--}-->
<!--return implode($value ?? '', $this->items);-->
<!--}-->
<!--////////////////////////////////////////////////////////// php online-->
<!--https://www.tutorialspoint.com/execute_php_online.php-->
<!--/////////////////////////////////////////////////////////// route laravel-->
<!--//web.php-->
<!--Route::group(function(){-->
<!--include __DIR__ ‘channel.php’;-->
<!--})-->
<!--//////////////////////////////////////////////// has Request-->
<!--if($request->has(‘answer_id’)){-->
<!--$post->update([-->
<!--‘answer_id’=>$request->input(‘answer_id’)-->
<!--]);-->
<!--}else{-->
<!--$post->update([‘title’=>$request->input(‘title’)])-->
<!--]}-->
<!--//////////////////////////////////////////////// slug اسلاگ-->
<!--‘title’=>$request->input(‘title’) ,-->
<!--‘slug’=>Str::slug($request->input(‘title’)) ساخت اسلاگ-->
<!--///////////////////////////////////////////////// Exception-->
<!--اکسپشن-->
<!--Throw ValidationException::withMessage([-->
<!--‘email’=>’incorrect’-->
<!--]);-->
<!--///////////////////////////////// add group docker-->
<!--sudo usermod -aG docker $USER-->
<!--//////////////////////////////////////////////////// xdebug-->
<!--//docker.file-->
<!--RUN pecl install xdebug-->
<!--COPY docker/90-xdebug.ini “${PHP_INI_DIR}/conf.d”-->
<!--//docker-compose-->
<!--Extra_hosts:-->
<!---”host.docker.internal:host-gateway”-->
<!--//debug-->
<!--//break at first-->
<!--/////////////////////////////////////////////////// kraken docker-->
<!--docker run -p 8080:8080 -v $PWD:/etc/krakend/ devopsfaith/krakend run --config /etc/krakend/krakend.js-->
<!--///////////////////////////////////////////// admin-->
<!--$table->boolean('is_admin')->default(0);-->
<!--//-->
<!--@if($user->is_admin) @endif-->
<!--///-->
<!--If(Auth::check() && Auth::user()->isAdmin()) { dd("you are admin") ; }-->
<!--///-->
<!--$user = Auth::user()->role()->where('name', 'admin')->exists(); return view('user.index', compact('user'));-->
<!--///-->
<!--public function isAdmin() { return $this->role == 'admin' }-->
<!--@if(Auth::user()->isAdmin()) {{}}@endif-->
<!--///-->
<!--@if(Auth::check() && Auth::user()->role['name'] == "admin") // You are an Admin @endif-->
<!--///////////////////////////////////////////////////////////-->
<!--فاصله-->
<!--&nbsp;&nbsp;&nbsp;-->
<!--//////////////////////////////////////////// update status-->
<!--public function updateProduct(array $params)-->
<!--{-->
<!--$product = $this->findProductById($params['product_id']);-->
<!--$collection = collect($params)->except('_token');-->
<!--$featured = $collection->has('featured') ? 1 : 0;-->
<!--$status = $collection->has('status') ? 1 : 0;-->
<!--$merge = $collection->merge(compact('status', 'featured'));-->
<!--$product->update($merge->all());-->
<!---->
<!---->
<!--if ($collection->has('categories')) {-->
<!--$product->categories()->sync($params['categories']);-->
<!--}-->
<!--return $product;-->
<!--<input type="hidden" name="id" value="{{$order->id}}" />-->
<!--<select>-->
<!--<option value="pending" >pending</option>-->
<!--<option value="processing" >processing</option>-->
<!--<option value="decline" >decline</option>-->
<!--<option value="completed" >completed</option>-->
<!--</select>-->
<!--}-->
<!--////////////////////////////////////////////////////////////// privilege-->
<!--Mysql -u root -p-->
<!--Create user ‘ajay‘@’localhost’ identified by ‘ajay’-->
<!--Show grants for ‘ajay’@’localhost’-->
<!--Grant select on *.* to ‘ajay’@’localhost’-->
<!--Grant insert on employees.student to ‘ajay’@’localhost’-->
<!--Grant update(id) on employees.student to ‘ajay’@’localhost’-->
<!--System mysql -u ajay -p-->
<!--Select user()-->
<!--///-->
<!--Grant all on mysql_tuts.* to ‘mysql_user’@’localhost’-->
<!--Flush privileges-->
<!--Mysql -u mysql_user -ppassword-->
<!--////////////////////////////////////////////////////////////// upload-->
<!--if($request->photo){-->
<!--$name=time().’.’.explode(‘/’,explode(‘:’,substr($request->photo,0,strpos($request->photo,’:’)))[1])[1];-->
<!--Image::make($request->photo)->save(public_path(‘img/profile/’).$name);-->
<!--)-->
<!--}-->
<!--///update-->
<!--$currentPhoto=$upload->photo;-->
<!--if($request->photo !=$currentPhoto){-->
<!--$name=time().’.’.explode(‘/’,explode(‘:’,substr($request->photo,0,strpos($request->photo,”;”)))[1][1];-->
<!--$request->merge([‘photo’=>$name]);-->
<!--$userPhoto=public_path(‘img/public/’).$currentPhoto;-->
<!--if(file_exists($userPhoto)){-->
<!--@unlink($userPhoto)-->
<!--}-->
<!--}-->
<!--Image::update($request->all());-->
<!--Return [‘message’=>’success’];-->
<!--//-->
<!--if($request->photo){-->
<!--$name=time().’.’.explode(‘/’,explode(‘:’,substr($request->photo,0,strpos($request->photo,”;”)))[1][1];-->
<!--$request->merge([‘photo’=>$name]);-->
<!--}-->
<!--Image::create($request->all());-->
<!--Return [‘message’=>’success’];-->
<!--//-->
<!--$upload=Image::find($id);-->
<!--$upload->delete();-->
<!--$currentPhoto=$upload->photo;-->
<!--$userPhoto=public_path(‘img/public/’).$currentPhoto;-->
<!--if(file_exists($userPhoto)){-->
<!--@unlink($userPhoto)-->
<!--}-->
<!--Return [‘message’=>’delete’];-->
<!--/// apiResource-->
<!--Public function toArray($request)-->
<!--{-->
<!--$newValue=[‘image’=>Storage::url($this->image)];-->
<!--Return array_merge(parent::toArray($request),$newValue);-->
<!--}-->
<!--/////////////////////////////////////////////////// php 8 ?? ?-> ?:-->
<!--Just-in-time compilation-->
<!--کد ها را ابتدا کامپایل میکنه-->
<!--//نول سپریتور null operator-->
<!--$user=new User;-->
<!--$job=$user->job();-->
<!--if($job)-->
<!--Return $user->job()->develop();-->
<!--//-->
<!--Return $user->job()?->develop();-->
<!--//-->
<!--var_dump($order->invoice?->number);//اگر وجود داشت نامبر بده-->
<!--var_dump($order->invoice->number ?? null); نامبر بده یا نال بده-->
<!--///-->
<!--متچ اکسپرشن match expression-->
<!--$job=new bill;-->
<!--switch(get_class($obj))-->
<!--Case ‘bill’:-->
<!--$type=’yes’;break;-->
<!--Case ‘javab’;break;-->
<!--default=>’-->
<!--Return $type;-->
<!--//-->
<!--$type=match(get_class($obj)){-->
<!--‘Bill’=>’yes’,-->
<!--‘javab’=>’no’,-->
<!--default=>goz-->
<!--}-->
<!--کانستراکت پراپرتی پروموشن construct property promotion-->
<!--Class User-->
<!--{-->
<!--Protected $user;-->
<!--Public function __construct($user){-->
<!--$this->user=$user;-->
<!--}-->
<!--}-->
<!--$user=new User(‘ali’);-->
<!--$plan=new plan(‘mondly’);-->
<!--var_dump(new Register($user,$plan))-->
<!--//-->
<!--Public function __construct(protected $user){}-->
<!--Public function __construct(protected User $user){}-->
<!--///-->
<!--ابجکت کلاس object class-->
<!--$obj= new Bill();-->
<!--switch($obj::class)-->
<!--نیم پارامتر named parameter-->
<!--Public function __construct($text,$total,$date,$paid)-->
<!--$r=new Receipt(Text:’customer’,Total:2000,Date:new DateTime(),paid:true)-->
<!--///-->
<!--Str_start_with-->
<!--$id=’inv_kjasnk’;-->
<!--$result=strpos($id1,’inv_’)===0-->
<!--$result=str_starts_with($id1,’inv_’); // متغیر با فلان استرینگ شروع شود-->
<!--Str_end_with-->
<!--str_contains-->
<!--$parsclick=’jshbf_pars_lksd’;-->
<!--$result=str_contains($parsclick,’_pars_’);//true آیا فلان چیز در متغیر است-->
<!--///-->
<!--ویک مپ weakmap زمانیکه unset میکنیم ابجکت رو کامل پاک شه-->
<!--$obj=new StdClass();-->
<!--$store=new MeakMap();-->
<!--$store[$obj]=’foobar’;-->
<!--var_dump($store);-->
<!--unset($obj);-->
<!--var_dump($store);-->
<!--//////////////////////////////////////////////////// enum-->
<!--مدیریت کیس ها که هرکدام شامل ولیو هستند-->
<?php
//namespace App\Enum;
//enum UserRoleEnum:string
//{
//case ADMIN = 'admin';
//case VISITOR = 'visitor';
//case EDITOR = 'editor';
//}
//protected $casts = [
//'email_verified_at' => 'datetime',
//'role' => UserRoleEnum::class
//];
//Route::get('/', function () {
//\App\Models\User::create([
//'role' => \App\Enum\UserRoleEnum::EDITOR,
//'full_name' => 'Aziz Sancar',
//]);
//});
//Route::get('/get-editors', function () {
//$editors = \App\Models\User::where('role', \App\Enum\UserRoleEnum::EDITOR)->get();
//dd($editors);
//});
////////////////////////////////////////////////////// file get content proxy
//<?php
//// Edit the four values below
//$PROXY_HOST = "proxy.example.com"; // Proxy server address
//$PROXY_PORT = "1234"; // Proxy server port
//$PROXY_USER = "LOGIN"; // Username
//$PROXY_PASS = "PASSWORD"; // Password
//// Username and Password are required only if your proxy server needs basic authentication
//$auth = base64_encode("$PROXY_USER:$PROXY_PASS");
//stream_context_set_default(
//array(
//'http' => array(
//'proxy' => "tcp://$PROXY_HOST:$PROXY_PORT",
//'request_fulluri' => true,
//'header' => "Proxy-Authorization: Basic $auth"
//// Remove the 'header' option if proxy authentication is not required
//)
//)
//);
//$url = "http://www.pirob.com/";
//print_r( get_headers($url) );
//echo file_get_contents($url);
//?>
<!--////////////////////////////////////////////////////////////// change table-->
<!--سوییچ ریلیشن به جدول های مختلف-->
<!--$table->unsigned BigInteger('deposit_id')->comment('ایدی تراکنش دریافتی');-->
<!--$table->foreign('deposit_id')-->
<!--->references('id')-->
<!--->on($this->transactionTable())-->
<!--->onDelete('cascade');-->
<!---->
<!---->
<!--protected function transactionTable(): string-->
<!--{-->
<!--return (new Transaction())->getTable();-->
<!--}-->
<!---->
<!---->
<!--//Transaction extends Model-->
<!--public function getTable(): string-->
<!--{// اگر جدول وجود نداشت برو از آدرس کانفیگ بخون-->
<!--if (!$this->table) {-->
<!--$this->table = config('wallet.transfer.table', 'transfers');-->
<!--}// در غیر اینصورت برو جدول مربوط به این کلاس فراخوانی کن-->
<!--return parent::getTable();-->
<!--}-->
<!--////////////////////////////////////////////////////// tag service container-->
<!--interface Messenger {-->
<!--public function sendMessage(string $recipient, string $message): void;-->
<!--}-->
<!---->
<!---->
<!--class SlackMessenger implements Messenger {-->
<!--public function sendMessage(string $recipient, string $message): void-->
<!--{-->
<!--app(Slack::class)->send($recipient, $message);-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--class TwilioMessenger implements Messenger {-->
<!--public function sendMessage(string $recipient, string $message): void { app(Twilio::class)->sendSMS($recipient, $message);-->
<!--} }-->
<!---->
<!---->
<!---->
<!---->
<!--// AppServiceProvider::register()-->
<!---->
<!---->
<!--App::tag([SlackMessenger::class, TwilioMessenger::class], Messenger::class);-->
<!--//Messenger Controller-->
<!--$messengers = app()->tagged(Messenger::class);-->
<!--foreach ($messengers as $messenger) {-->
<!--$messenger->sendMessage($recipient, $message);-->
<!--}-->
<!--////////////////////////////////////////////////////////// validate max-->
<!--//اگر تعداد حروف body بیشتر از ۲۵۰۰ بود ، خطا را برمیگرداند-->
<!--if (strlen($request->body) > 2500) {-->
<!--return response()->json(['error' => 'The body 2500 characters'], 422);}-->
<!--//////////////////////////////////////////////////notification database mark-->
<!--ارسال پیام به صفحه کاربر-->
<!--// UserFollowNotification-->
<!--Public $user;-->
<!--Public function __constructor($user){-->
<!--$this->user=$user;-->
<!--}-->
<!--Public function via($notifiable)-->
<!--{-->
<!--return [‘database’];-->
<!--}-->
<!--Public function toArray($notifiable)-->
<!--{-->
<!--return [-->
<!--‘user_id’=>$this->user[‘id’],-->
<!--‘name’=>$this->user[‘name’],-->
<!--];-->
<!--}-->
<!--//Controller-->
<!--Public function marksread($id){-->
<!--if($id){-->
<!--auth()->user()->notification->where(‘id’,$id)->markAsRead();-->
<!--}-->
<!--return back();-->
<!--}-->
<!--Public function notify(){-->
<!--if(auth()->user()){-->
<!--$user=User::whereId(7)->first();-->
<!--auth()->user()->notify(new UserFollowNotification($user));-->
<!--///Notification::send($user,new UserFollowNotification($user))-->
<!--}-->
<!--dd(‘done’);-->
<!--}-->
<!--//blade-->
<!--@foreach(auth()->user()->unread notifications as $notification)//لیست نخوانده-->
<!--@foreach(auth()->user()->read notifications as $notification)//لیست خوانده شده-->
<!--@foreach(auth()->user()->notifications as $notification)//لیست نخوانده-->
<!--<b>{{$notification->data[‘name’]}}</b><a>href={{route(‘mark’,$notification->id)}}</a>-->
<!--////////////////////////////////////////////////////////////// event listener-->
<!--ایونت لیسینر-->
<!--Php artisan make:event PostCreated-->
<!--artisan make:listener NotifyUser --event=PostCreated-->
<!--Artisan queue:table-->
<!--Artisan queue:listen-->
<!--// Controller-->
<!--public function store(Request $request)-->
<!--{-->
<!--$post = Post::create([-->
<!--'title' => $request->title,-->
<!--'body' => $request->body,-->
<!--]);-->
<!--$data = [-->
<!--'title' => $post['title'],-->
<!--'author' => auth()->user()->name,-->
<!--];-->
<!--event(new PostCreated($data));-->
<!--return response()->json($post, 201);-->
<!--}-->
<!--// event-->
<!--class PostCreated-->
<!--{-->
<!--use Dispatchable, InteractsWithSockets, SerializesModels;-->
<!--public $post;-->
<!--public function __construct($post)-->
<!--{-->
<!--$this->post = $post;-->
<!--}-->
<!--public function broadcastOn()-->
<!--{-->
<!--return new PrivateChannel('channel-name');-->
<!--}-->
<!--}-->
<!--// listener-->
<!--class NotifyUser-->
<!--{-->
<!--public function handle(PostCreated $event)-->
<!--{-->
<!--$users = User::all();-->
<!--foreach ($users as $user) {-->
<!--Mail::to($user->email)->send(new UserMail($event->post));-->
<!--}-->
<!--}-->
<!--}-->
<!---->
<!---->
<!--//UserMailNotification-->
<!--Private $project;-->
<!--Public function __construct(Project $project)-->
<!--{-->
<!--$this->project=$project;-->
<!--}-->
<!--//-->
<!--Public function via($notifiable){-->
<!--return [‘mail’];-->
<!--}-->
<!--//-->
<!--Public function toMail($notifiable){-->
<!--return (new MailMessage)->subject(‘new project’)-->
<!--->line(‘project name:’.$this->project->name)-->
<!--->action(‘go to’,route(‘projects.show’,$this->project))-->
<!--}-->
<!--// Mail-->
<!--class UserMail extends Mailable implements ShouldQueue-->
<!--{-->
<!--use Queueable, SerializesModels;-->
<!--public $post;-->
<!--public function __construct($post)-->
<!--{-->
<!--$this->post = $post;-->
<!--}-->
<!--public function build()-->
<!--{-->
<!--return $this->view('user_mail', ['post' => $this->post]);-->
<!--}-->
<!--}-->
<!--// user_mail.blade-->
<!--<p><b>Post title:</b> {{ $post['title']}}</p>-->
<!--<p><b>Post author:</b> {{ $post['author'] }}</p>-->
<!---->
<!---->
<!--///-->
<!--function event(...$args)-->
<!--{-->
<!--return app('events')->dispatch(...$args);-->
<!--}-->
<!--///-->
<!--public function handle(PostCreated $event)-->
<!--{-->
<!--$users = $event->post->comment->users;//کاربر کامنت پست-->
<!--$users->each(function ($user) {-->
<!--$user->notify(new \App\Notifications\PostCreated($event->post));-->
<!--});-->
<!--}-->
<!--///-->
<!--public function handle(PostCreated $event)-->
<!--{-->
<!--$users = User::query()->where('id', '!=', $event->post->user_id)->get();-->
<!--foreach ($users as $user) {-->
<!--$user->notify(new PostCreated($event->post));-->
<!--}-->
<!--}-->
<!--///-->
<!--public function handle(PostCreated $event)-->
<!--{-->
<!--if ($event->post->status == 'approved') {-->
<!--$user = User::find($event->post->user_id);-->
<!--$user->notify(new \App\Notifications\PostCreated($event->post));}}-->
<!--///-->
<!--public function handle(PostCreated $event)-->
<!--{-->
<!--$users = User::where('role', 'admin')->get();-->
<!--foreach ($users as $user) {-->
<!--Mail::to($user->email)->send(new AdminMail($event->post));-->
<!--}-->
<!--}-->
<!--////////////////////////////////////////////////////////////// wantJson-->
<!--اگر ریسپانس جیسان خواست جیسان بده وگرنه هدایتش کن جای دیگر-->
<!--return $request->wantsJson()?new response(“”,201):redirect($this->redirectPath());-->
<!--////////////////////////////////////////////////////////////// load-->
<!--$users = User::with('comments')->get();-->
<!--$users = $users->load('comments');-->
<!--////////////////////////////////////////////////////////////// ajax-->
<!--<form >-->
<!--<div class="alert alert-danger print-error-msg" style="display:none">-->
<!--<ul></ul>-->
<!--</div>-->
<!--<div class="mb-3">-->
<!--<label for="titleID" class="form-label">Title:</label>-->
<!--<input type="text" id="titleID" name="name" class="form-control" placeholder="Name" required="">-->
<!--</div>-->
<!--<div class="mb-3">-->
<!--<label for="bodyID" class="form-label">Body:</label>-->
<!--<textarea name="body" class="form-control" id="bodyID"></textarea>-->
<!--</div>-->
<!--<div class="mb-3 text-center">-->
<!--<button class="btn btn-success btn-submit">Submit</button>-->
<!--</div>-->
<!--</form>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</body>-->
<!--<script type="text/javascript">-->
<!--$.ajaxSetup({-->
<!--headers: {-->
<!--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')-->
<!--}-->
<!--});-->
<!--$(".btn-submit").click(function(e){-->
<!--e.preventDefault();-->
<!--var title = $("#titleID").val();-->
<!--var body = $("#bodyID").val();-->
<!--//نوع و لینک و دیتا مشخص میکنیم-->
<!--$.ajax({-->
<!--type:'POST',-->
<!--url:"{{ route('posts.store') }}",-->
<!--data:{title:title, body:body},-->
<!--success:function(data){-->
<!--if($.isEmptyObject(data.error)){-->
<!--alert(data.success);-->
<!--location.reload();-->
<!--}else{-->
<!--printErrorMsg(data.error);-->
<!--}-->
<!--}-->
<!--});-->
<!--});-->
<!--function printErrorMsg (msg) {-->
<!--$(".print-error-msg").find("ul").html('');-->
<!--$(".print-error-msg").css('display','block');-->
<!--$.each( msg, function( key, value ) {-->
<!--$(".print-error-msg").find("ul").append('<li>'+value+'</li>');-->
<!--});-->
<!--}-->
<!--</script>-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// tail-->
<!--نمایش ۱۰ خط در لینوکس-->
<!--tail -n 10 notes.txt-->
<!--////////////////////////////////////////////////////////////// logstash-->
<!--برای injection داده بین دو منبع مختلف مستقل استفاده می‌شود-->
<!--بر اساس معماری جداسازی شده است؛ در این نوع معماری، دو سیستم به طور مستقل با یکدیگر تعامل دارند بدون اینکه مستقیماً به یکدیگر متصل شوند.-->
<!--https://randomuser.me/api-->
<!--Input{-->
<!--Http_poller{-->
<!--urls=>{-->
<!--urlname=>”https://randomuser.me/api”-->
<!--}-->
<!--request_timeout=>60-->
<!--schedule=>(every=>”20s”)-->
<!--codec=>”line”-->
<!--}-->
<!--}-->
<!--Output{-->
<!--Elasticsearch{-->
<!--hosts=>[“localhost:9200”]-->
<!--index=>”logstash_http_poller”-->
<!--}-->
<!--stdout{codec=>rubydebug}-->
<!--}-->
<!--////////////////////////////////////////////////////////////// wallet کیف پول-->
<!--//-->
<!--use Bavix\Wallet\Traits\HasWallet;-->
<!--use Bavix\Wallet\Interfaces\Wallet;-->
<!--class User extends Model implements Wallet-->
<!--{-->
<!--use HasWallet;-->
<!--}-->
<!--// wallet-->
<!--public function wallet()-->
<!--{-->
<!--$user = Auth::user();-->
<!--$wallet = $user->wallet;-->
<!--return $wallet;-->
<!--}-->
<!--// withdraw-->
<!--public function withdraw($amount)-->
<!--{-->
<!--$user = Auth::user();-->
<!--$wallet = $user->wallet;-->
<!--$wallet->balance = $wallet->balance - $amount;-->
<!--$wallet->save();-->
<!--}-->
<!---->
<!---->
<!--// deposit-->
<!---->
<!---->
<!--public function deposit($amount)-->
<!--{-->
<!--$user = Auth::user();-->
<!--$wallet = $user->wallet;-->
<!--$wallet->balance = $wallet->balance + $amount;-->
<!--$wallet->save();-->
<!--}-->
<!---->
<!---->
<!--////////////////////////////////////////////////////////////// convert miladi-->
<!--تبدیل تاریخ به میلادی-->
<!--"morilog/jalali": "3.*"-->
<!--//-->
<!--$from = \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', $from)->toCarbon();-->
<!--///-->
<!--'start_time' => \Morilog\Jalali\Jalalian::fromFormat('Y-m-d', $request->start_time)->toCarbon()-->
<!---->
<!---->
<!--///-->
<!--برای تبدیل تاریخ از شمسی به میلادی-->
<!--return Verta::getGregorian(1394,10,4); // [2015,12,25]-->
<!---->
<!---->
<!--///-->
<!--برای نمایش تاریخ به صورت میلادی، از دستور زیر استفاده کنید-->
<!--return $v->formatGregorian('Y-m-d H:i:s'); // 2017-05-23 23:21:02-->
<!--///-->
<!--$from = Carbon::createFromTimeString($timeInterval['from'])->getTimestamp();-->
<!---->
<!--////////////////////////////////////////////////////////////////// null-->
<!--اگر پیدا نکردی یا تعداد نداشت ارایه خالی برگردان-->
<!--if (-->
<!--! is_array($bookingProductSlot->slots)-->
<!--|| ! count($bookingProductSlot->slots)-->
<!--) {-->
<!--return [];-->
<!--}-->
<!--/// -->
<!--اگر وارد نکرده بود -->
<!--if (-->
<!--! isset($item->additional['booking']['date_from'])-->
<!--|| ! isset($item->additional['booking']['date_to'])-->
<!--)-->
<!---->
<!--////////////////////////////////////////////////////////////// batch-->
<!--میخواهیم تعداد جواب ها ارسال شده را حساب کنیم-->
<!--Php artisan queue:work-->
<!--//RegisterController-->
<!--$user=User::create([-->
<!--‘name’=>$request->name-->
<!--]);-->
<!--ایدی کاربری که در جدول کاربران وجود ندارد را در $recipient میگذارد سپس در مسیج میگذارد سپس در ارایه job می گذارد تا در bus::batch قرار بگیرد-->
<!--$jobs=[];-->
<!--$user = User::where(‘id’,’!=’,$user->id)->pluck(‘id’)->get();-->
<!--foreach($user as $recipient){-->
<!--$jobs[]=new SendWelcomeMessage($user->id,$recipient);-->
<!--}-->
<!--Bus::batch($jobs)->dispatch();//مسیج را به کاربرانی که رجیستر کردن برساند-->
<!--event(new Registred($user));-->
<!--Auth::login($user);-->
<!--درخواست ها را سمت صفحه dashboard می فرستد و به DashboardController-->
<!--return redirect(‘/dashboard?batch_id’.$batch->id);-->
<!--//SendWelcomMessage-->
<!--Public $sender_id;-->
<!--Public $recipient;-->
<!--Public function __constructor($sender_id,$recipient){-->
<!--$this->sender_id=$sender_id;-->
<!--$this->recipient_id=$recipient_id;-->
<!--}-->
<!--Public function handle(){-->
<!--usleep(50000);//هر ۵ ثانیه انجام بشه-->
<!--Message::create([-->
<!--‘sender_id’=>$this->sender_id,-->
<!--‘recipiet_id’=>$this->recipiet_id,-->
<!--‘title’=>’welcome!’,-->
<!--‘message_text’=>’welcome to our world’-->
<!--]);-->
<!--}-->
<!---->
<!---->
<!--//DashboardController-->
<!--Public function (Request $request){-->
<!--$batch=null;-->
<!--if($request->batch_id){-->
<!--$batch=Bus::findBatch($request->batch_id);-->
<!--}-->
<!--Return view (‘dashboard’,compact(‘batch’));-->
<!--}-->
<!--//dashboard.blade-->
<!--@if(!is_null($batch))-->
<!--<div class=”mt-4”>-->
<!--Sending welcome message:-->
<!--</br>-->
<!--{{$batch->processedJobs()}} completed out of {{$batch->totalJobs}}// 0 500(0%)-->
<!--({{$batch->progress()}}%)-->
<!--</div>-->
<!--<script>-->
<!--window.setInterval(‘refresh()’,2000); //رفرش هر ۲ ثانیه-->
<!--Function refresh(){-->
<!--window.location.reload();-->
<!--}-->
<!--</script>-->
<!--/////////////////////////////////////////////////// pattern microservice-->
<!--پترن مایکروسرویس-->
<!--// ‫‪Database-per-Service‬‬-->
<!--به ازای هر سرویس دیتابیس داشته باشیم-->
<!--‫شود‪.‬‬ ‫‪Scale‬‬ ‫مستقل‬ ‫صورت‬ ‫میتواند به‬ ‫دیتابیس‬ ‫هر‬-->
<!--‫میکند‪.‬‬ ‫تر‬ ‫آسان‬ ‫را‬ ‫مایکروسرویس‬ ‫هر‬ ‫‪Development‬‬ ‫قابلیت‬ ‫‪.‬‬ ‫‪2‬‬-->
<!--// ‫‪API‬‬ ‫‪Composition‬‬-->
<!--در این الگو، یک API Composer، سرویس‌های دیگر را صدا می‌زند و اطلاعات مورد نیاز را براساس ترتیب مورد نیاز دریافت‌می‌کند و پس از دریافت این اطلاعات، آن‌ها را با یکدیگر به صورت in-memory ترکیب و نتیجه را به مصرف کننده API ارایه‌می‌کند. Kong krakend-->
<!--با استفاده از این الگو میتوانیم یک API Composer پیاده سازی کنیم که دیتاهای مورد نیاز را از مایکروسرویس های مختلف دریافت کند و in-memory Join بر روی دیتاها انجام دهد.-->
<!--// saga-->
<!--یک ارکستراتوار به شرکت‌کنندگان(میکروسرویس‌ها) می‌گوید که چه transaction را باید انجام دهند. Rabbitmq - kafka - tempolar-->
<!--////////////////////////////////////////////////////////////// linux-->
<!--//linux-->
<!--cat باز کردن پوشه-ls-cd-man-cp-mv-mkdir-chmod ایجاد دسترسی-file نمایش type- grep جستجو-ssh برای وصل شدن به هاست--->
<!--rmdir حذف دایرکتوری خالی-rmdir -حذف دایرکتوری-rm حذف دایرکتوری و فایل-pwd مسیر جاری-ps پردازشهای در حال اجرا-->
<!--passwd تغییر پسورد-touch ساخت فایل-kill 80 پروسس درحال اجرا-wget http://wordpress.org/latest.tar.gz دانلود نرم افزار-->
<!--what is ls راهنما دستور-df اطلاعات هارد-top اطلاعات پروسس نشان میده-vim نمایش ویرایشگر-find / -name filename جستجو-->
<!--rpm -ivh package نصب پکیج-rpm -e package حذف پکیج-rpm –qa لیست پکیج --->
<!--mount /dev/usb /root/my usb برای مستقر کردن یک دایرکتوری و یا هارد دیسک به مسیر دیگری-->
<!--charge -E 2005-12-31 user بر روی یک یوزر محدودیت زمانی اعمال می‌شود-groupadd group name اضافه کردن گروه ویژه-->
<!--useradd -c “comment here” -g adm -d /home/user -s /bin/bash user توسط سوییچ c برای یوزر یک کامنت تعریف می‌کنیم که البته وجود اون ضروری نیستش، توسط سوییچ g یوزر رو به گروه مربوطه مرتبط می‌کنیم و با d خانه یوزر و محل قرارگیری فایل‌های هر یوزر رو مشخص می‌کنیم و توسط d نیز دسترسی کاربر به شل رو معلوم می‌کنیم-->
<!--chown root:root file تغییر مالک، هر فایل و یا دایرکتوری به یک مالک و یک گروه اختصاص دارد- chmod 777 -R ./*-->
<!--chown ubuntu -R باز کردن دسترسی-->
<!--////////////////////////////////////////////////////////////// mongo-->
<!--"jenssegers/mongodb": "^3.9",-->
<!--//mongo-->
<!--هر دیتابیس شامل یک سری کالکشن میشه و هر کالکشن شامل یک سری داکیومنت-->
<!--show collections--->
<!--db.users.insert--->
<!--db.users.find--->
<!--db.persons.insert Many-count-distinct- $gt بزرگتر-$it کوچکتر-$ne-->
<!--db.persone.aggregate{ میخوای گروه خاصی رو مجموع خریدشو حساب کنی و مرتب سازی کنی-->
<!--//-->
<!--db.contest.aggregate([ {"$group" : {_id:"$province", count:{$sum:1}}} ])-->
<!---->
<!---->
<!--//-->
<!---->
<!---->
<!--db.inventory.insertMany( [-->
<!--{ "_id" : 1, "name" : "almonds", "description": "product 1", "instock" : 120 },-->
<!--{ "_id" : 2, "name" : "bread", "description": "product 2", "instock" : 80 },-->
<!--{ "_id" : 3, "name" : "cashews", "description": "product 3", "instock" : 60 },-->
<!--{ "_id" : 4, "name" : "pecans", "description": "product 4", "instock" : 70 },-->
<!--{ "_id" : 5, "name": null, "description": "Incomplete" },-->
<!--{ "_id" : 6 }-->
<!--] )-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--db.orders.aggregate( [-->
<!--{-->
<!--$lookup:-->
<!--{-->
<!--from: "inventory",-->
<!--localField: "item",//-->
<!--foreignField: "name",//ریلیشن براساس نام-->
<!--as: "inventory_docs" //برای نمایش دیتا-->
<!--}-->
<!--}-->
<!--] )-->
<!---->
<!---->
<!---->
<!--{-->
<!--"_id" : 1,-->
<!--"item" : "almonds",-->
<!--"price" : 12,-->
<!--"quantity" : 2,-->
<!--"inventory_docs" : [-->
<!--{ "_id" : 1, "name" : "almonds", "description" : "product 1", "instock" : 120 }-->
<!--]-->
<!--}-->
<!---->
<!---->
<!--///////////////////////////////////////////////////////////// static property-->
<?php
//class pi {
//public static $value = 3.14159;
//}
//// Get static property
//echo pi::$value;
//?>
<!--/////////////////////////////////////////////////// transfer public static-->
<!--class WebService-->
<!--{-->
<!--public static $client_id = '123456';-->
<!--public static $token = 'abcdefg';-->
<!--public static $successful_code = 200;-->
<!---->
<!---->
<!--public static function transferTo(User $user, Transfer $transfer)-->
<!--{-->
<!--$http_request = Http::withHeaders([-->
<!--'Content-Type' => 'application/json',-->
<!--'Authorization' => 'Bearer ' . self::$token-->
<!--])->post(-->
<!--'https://apibeta.finnotech.ir/oak/v2/clients/'. self::$client_id .'/transferTo?trackId=' . $transfer->track_id,-->
<!--[-->
<!--'amount' => $transfer->amount ,// مبلغ تراکنش-->
<!--'description' => $transfer->description,-->
<!--'destination Firstname' => $transfer->destination_first_name,//نام دریافت کننده-->
<!--'destinationLastname' => $transfer->destinationLastname,-->
<!--'destination Number' => $transfer->destination_number,//شماره حساب دریافت کننده-->
<!--'payment Number' => $transfer->payment_number,//شماره پرداخت کننده-->
<!--'deposit' => $transfer->deposit,// سریال حساب بانکی دریافت کننده-->
<!--'sourceFirstName' => $user->first_name,//نام صاحب حساب-->
<!--'sourceLastName' => $user->last_name,-->
<!--'reasonDescription' => $transfer->reason_description_id-->
<!--]-->
<!--);-->
<!--$response = $http_request->object(); //-->
<!--if (isset($response->status)) {-->
<!--return $response;-->
<!--}-->
<!--return null;-->
<!--}-->
<!--}-->
<!---->
<!--////////////////////////////////////////////////////////////-->
<!--////////////////////////////////////////////////////////////// repository-->
<!--//resource-->
<!--class CompanyResource extends JsonResource{-->
<!--public function toArray($request)-->
<!--{-->
<!--return [-->
<!--'identifier' => $this->uuid,-->
<!--'name' => $this->name,-->
<!--'category' => new CategoryResource($this->category),-->
<!--'url' => $this->url,-->
<!--'email' => $this->email,-->
<!--'phone' => $this->phone,-->
<!--'whatsapp' => $this->whatsapp,-->
<!--'facebook' => $this->facebook,-->
<!--'instagram' => $this->instagram,-->
<!--'youtube' => $this->youtube,-->
<!--'image' => url("storage/{$this->image}"),-->
<!--];-->
<!--}-->
<!--//Storerequest-->
<!--'image' => 'required|image|max:1024',-->
<!--//-->
<!--public function store(CreateUpdateCompanyRequest $request)-->
<!--{-->
<!--$company = $this->companyService->createNewCompany($request->validated(), $request->image);-->
<!--CompanyCreatedJob::dispatch($company->email)->onQueue(env('QUEUE_EMAIL'));-->
<!--return new CompanyResource($company);-->
<!--}-->
<!--//-->
<!---->
<!--public function createNewCompany(array $data, UploadedFile $image)-->
<!--{-->
<!--$path = $this->uploadImage($image);-->
<!--$data['image'] = $path;-->
<!--return $this->repository->create($data);-->
<!--}-->
<!---->
<!---->
<!--////////-->
<!--//UserController-->
<!--$request->validate([-->
<!--‘name’=>$request->name]-->
<!--);-->
<!--resolve(UserRepository::class)->create($request);-->
<!--//UserRepository-->
<!--Class UserRepository{-->
<!--Public function create(Request $request): User-->
<!--{-->
<!--Return User::create([‘name’=>$request->name])-->
<!--}-->
<!--}-->
<!--///-->
<!--class CategoryController extends Controller-->
<!--{-->
<!--protected $repository;-->
<!--public function __construct(Category $model)-->
<!--{-->
<!--$this->repository = $model;-->
<!--}-->
<!--public function index()-->
<!--{-->
<!--$categories = $this->repository->get();-->
<!--return CategoryResources::collection($categories);-->
<!--}-->
<!---->
<!---->
<!--public function store(StoreUpdateCategory $request)-->
<!--{-->
<!--$category = $this->repository->create($request->validated());-->
<!--return new CategoryResources($category);-->
<!--}-->
<!--public function show($url)-->
<!--{-->
<!--$category = $this->repository->where('url', $url)->firstOrFail();-->
<!--return new CategoryResources($category);-->
<!--}-->
<!--public function update(StoreUpdateCategory $request, $url)-->
<!--{-->
<!--$category = $this->repository->where('url', $url)->firstOrFail();-->
<!--$category->update($request->validated());-->
<!--return response()->json(['message' => 'success']);-->
<!--}-->
<!--public function destroy($url)-->
<!--{-->
<!--$category = $this->repository->where('url', $url)->firstOrFail();-->
<!--$category->delete();-->
<!--return response()->json([], 205);-->
<!--}-->
<!--}-->
<!--////////////////////////////////////////////////////////////// parent repository-->
<!--//AbstractRepository-->
<?php
//
//
//namespace App\Repositories;
//
//
//abstract class Repository
//{
//protected $model;
//
//
//// ...
//public function __construct()
//{
//$this->model = app($this->model());
//}
//Abstract protected function g()
//}
//// CategoryRepository
//<?php
//namespace App\Repositories;
//class CategoriesRepository extends Repository
//{
//public function model()
//{
//return \App\Models\Category::class;
//}
//}
//// CategoryController
//
//
//////////////////////////////////////////////////////////////// policy gate
//if(auth()->user()->role === 'author') {
//return Post::all();
//}
/////
//ماربری بتونه پست پاک کند که یا رول آن admin باشد یا پست متعلق به خودش باشد
//public function delete(User $user, Post $post)
//{
//if ($user->role === 'admin') return true;
//
//
//return $user->id === $post->user_id;
//}
//
//
//پالیسی اگر سوپرادمین بود اگر ایدی کاربر با ایدی نویسنده یکی بود مجوز ورود دارد
////App\Providers\AuthServiceProvider
//public function boot()
//{
//$this->registerPolicies();
//Gate::define('update-post', function (User $user, Post $post) {
//return $user->id === $post->user_id;
//});
//}
//public function update(Request $request, Post $post)
//{
/////
//if(Gate::forUser(auth()->user()->allows(‘update-thread’)){
//resolve(PostRepository::class)->update($thread,$request)}
//
//
/////
//if (! Gate::allows('update-post', $post)) {
//abort(403);
//}
//// Update the post...
//}
//
//
//
//
//////////////////////////////////////////////////////////////// stock
//اضافه کردن به انبار
//public function finalize(Receipt $receipt)
//{
//$receipt->finalized_at = Carbon::now()->toDateTimeString();
//$receipt->save();
//foreach($receipt->products as $received product) {
//$received product->product->stock += $received product->stock; // اضافه کردن تعداد به انبار
//$received product->product->stock_defective += $received product->stock_defective;// اضافه کردن تعداد به انبار بدون خراب
//$received product->product->save();// ذخیره کردن تغییرات در انبار
//}
//return back()->withStatus('Recibo finalizado satisfactoriamente'); // به معنای که کالاهایی که در آن به انبار بارگذاری شده اند با موفقیت به انبار بارگذاری شده اند
//}
//
//
//////////////////////////////////////////////////////////////// delete user
//کاربر نتواند اولین کاربر را که ادمین هست پاک کند
//public function destroy(User $user)
//{
//if ($user->id == 1) {
//return abort(403);
//}
//$user->delete();
//
//
//return redirect()->route('users.index')->withStatus(__('User successfully deleted.'));
//}
//
//
//////////////////////////////////////////////////////////////// Rule
//چک کردن ولیدیشن
//namespace App\Rules;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Contracts\Validation\Rule;
//
//
//class CurrentPasswordCheckRule implements Rule
//{
///**
//* Determine if the validation rule passes.
//*
//* @param string $attribute
//* @param mixed $value
//* @return bool
//*/
//public function passes($attribute, $value)
//{
//return Hash::check($value, auth()->user()->password);
//}
//
//
///**
//* Get the validation error message.
//*
//* @return string
//*/
//public function message()
//{
//return __('The current password field does not match your password');
//}
//}
//
//
//////////////////////////////////////////////////////////////// facade
//فساد کلاسی است که دسترسی به یک شی را از کانتینر فراهم می کند
//کلاس پایه Facade از روش جادویی __callStatic برای به تعویق انداختن تماس‌ها از فساد به یک شی که از کانتینر حل شده است استفاده می‌کند.
//
//
//
//
//////////////////////////////////////////////////////////////// monolog لاگ
//use Illuminate\Support\Facades\Log;
//Log::build([
//'driver' => 'single',
//'path' => storage_path('logs/custom.log'),
//])->info('Something happened!');
//
//
//
//
//
////
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////