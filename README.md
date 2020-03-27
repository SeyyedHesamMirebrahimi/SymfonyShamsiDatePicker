# SymfonyShamsiDatePicker
Symfony Shamsi/Persian Date Picker Synced With DateTime ColumnIn Entity

## Installatioan


```Shel
composer require hesam/shamsi-date:dev-master
```


add these two lines to header of your template file :

```HTML
<link href="{{ asset('bundles/shamsidate/style-1.css') }}" rel="stylesheet"/>
<script src="{{ asset('bundles/shamsidate/script-1.js') }}"></script>
```
and the bundle form theme to your config in config/packages/twig.yaml : 
```YAML
 form_themes: ['ShamsiDateBundle:Form:fields.html.twig']
```
then execute php bin/console assets:install Enjoy It.

## Bug Report
   send e-mail to me@hmirebrahimi.ir
