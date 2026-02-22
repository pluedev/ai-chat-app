cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan serve

cd frontend
npm install
npm run dev

#you can get API key in https://platform.openai.com/
