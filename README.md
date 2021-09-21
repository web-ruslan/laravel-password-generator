# laravel-password-generator
Password Generator field instead Password field
1. Download files in your project
2. Add in function register() file app/Providers/AppServiceProvider.php line ```Voyager::addFormField(\App\FormFields\PasswordFormField::class);``` like below:

```php
// file app/Providers/AppServiceProvider.php
public function register()
{
    /// other code
    Voyager::addFormField(\App\FormFields\PasswordFormField::class);
    /// other code
}
```

3. Go to ```/admin/users/1/edit``` and you will see new Password Generator field instead Password field:

![scr](https://user-images.githubusercontent.com/22293750/130058807-553e19b5-46ab-42ed-a015-776643171606.png)

Password Generation executing when you click "Key" button

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
