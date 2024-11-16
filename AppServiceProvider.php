$this->app->singleton(FileUploadService::class, function () {
            return new FileUploadService();
        });
