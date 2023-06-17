module.exports = {
  apps: [
    {
      name: "laravel-app",
      script: "artisan",
      interpreter: "/usr/bin/php",
      args: "serve --port=8000", // Modify the arguments as per your requirement
      exec_mode: "fork",
      env: {
        NODE_ENV: "production",
      },
    },
  ],
};
