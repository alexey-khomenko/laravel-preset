### регистрация в файле
- Modules\User\Providers\UserServiceProvider.php
  - use Illuminate\Support\Facades\Blade;
  - public function registerViews()
    - Blade::componentNamespace('Modules\\' . $this->moduleName . '\\Http\\Components', $this->moduleNameLower);

### Component Class
Modules/User/Http/Components/Partials/H1.php

### Component View
Modules/User/Resources/views/partials/h1.blade.php

### Component Tag
<x-user::partials.h1 :title="..."/>