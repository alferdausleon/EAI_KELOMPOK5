FROM php:8.2-apache

RUN apt-get update && apt-get install -y nodejs npm

# Set work directory
WORKDIR /app

# Copy file package.json dan package-lock.json
COPY package*.json ./
COPY . .

# Ekspose port yang digunakan oleh aplikasi
EXPOSE 8000

# Perintah untuk menjalankan aplikasi
RUN ["php", "artisan", "key:generate"]
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]