<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Frontend\Eshop')->group(function(){
    Route::get('store', 'NNLEshopOrderController@store');
});

use App\Http\Controllers\Frontend\Eshop\NNLEshopCartController;

Route::get('test', function () {
            $request = request();

            $request->merge([
                'product_id' => '449834f5-7940-4f48-8bb4-426eed8e1b78',
                'quantity' => 10,
                'buying_unit' => 'pcs',
            ]);
    return app(NNLEshopCartController::class)->add($request);

});

//Route::get('test', function () {
//    $request = request();
//
//    $request->merge([
//        'productId' => '0d89487f-94a1-4fdd-843c-24f7cbf68f17',
//        'quantity' => 60,
//        'buying_unit' => 'pcs',
//    ]);
//    return app(NNLEshopCartController::class)->update($request, '6122b83c-27b2-4b52-acee-39dc04095a1c');

//Route::get('test', function () {
//    $request = request();
//
//    $request->merge([
//        'productId' => '0d89487f-94a1-4fdd-843c-24f7cbf68f17',
//        'quantity' => 10,
//        'buying_unit' => 'pcs',
//    ]);
//    return app(NNLEshopCartController::class)->delete('6122b83c-27b2-4b52-acee-39dc04095a1c');
//
//});

//remove unpublished branches
git remote prune origin && git branch -vv | grep ': gone]' | awk '{print $1}' | xargs -r git branch -D

//create with relationship

            $order->products()->create($product);

           $product['orders_to_warehouse_id'] = $order->id;
           $this->productsRepository->create($product);


           $this->productsRepository->create($product + ['orders_to_warehouse_id' => $order->id]);

    

//alias

parse_git_branch() {
     git branch 2> /dev/null | sed -e '/^[^*]/d' -e 's/* \(.*\)/ (\1)/'
}
export PS1="\u@\h \[\033[32m\]\w\[\033[33m\]\$(parse_git_branch)\[\033[00m\] $ "

#git alias
alias gl="git log --graph --pretty=format:'%Cred%h%Creset -%C(yellow)%d%Creset %s %Cgreen(%cr) %C(bold blue)<%an>%Creset' --abbrev-commit"
alias gs="git status"

#custom alias for laravel
alias pa='php artisan'
alias pa:hu='php artisan hc:update'
alias pa:sa='php artisan hc:super-admin'
alias pa:mm='php artisan make:migration'
alias pa:m='php artisan migrate'
alias pa:mr='php artisan migrate:rollback'
alias pa:mrd='composer dump-autoload;php artisan migrate:rollback'
alias pa:vp='php artisan vendor:publish'
alias pa:q='php artisan queue'
alias pa:qw='php artisan queue:work'
alias pa:ql='php artisan queue:listen'
alias pa:cc='php artisan cache:clear && php artisan config:clear && php artisan view:clear && php artisan route:clear && php artisan clear-compiled'

alias cc='clear'
alias cda='composer dump-autoload'
alias home='cd /var/www/html/'
alias home:vagrant='cd /vagrant/'

#weather
alias orai='curl http://wttr.in/Kaunas'

#apache
alias rra='sudo /etc/init.d/apache2 restart'
alias rrm='sudo /etc/init.d/mysql restart'

#server
alias test='vendor/bin/phpunit'
alias test:g='vendor/bin/phpunit --group'


// DB loginimo tikirinimas

     \DB::enableQueryLog();
        $availableSlots = $this->getRepository()->availableDays($cityId, $temperature_mode);

        dd($availableSlots, \DB::getQueryLog());

// removes branches

git branch -vv | grep ' gone]' | awk '{print $1}' | xargs git branch -D

git remote prune origin && git branch -vv | grep ': gone]' | awk '{print $1}' | xargs -r git branch -D

//to write cleaner code
PHP Code sniffer validation
PHP MESS DETECTOR validation

