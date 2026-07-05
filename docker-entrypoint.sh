#!/bin/sh
set -e

SETUP_FLAG="/var/www/html/storage/.setup_completed"

if [ ! -f "$SETUP_FLAG" ]; then
    echo "⚙️ Menjalankan inisialisasi awal production..."

    # Membuat symlink storage (Aman dijalankan)
    echo "🔗 Linking storage..."
    php artisan storage:link || true

    # Optimasi Laravel untuk Production (Bisa dijalankan di sini karena config/route bergantung environment .env runtime)
    echo "🚀 Optimizing Laravel..."
    php artisan optimize || true
    php artisan view:cache || true

    touch "$SETUP_FLAG"
    echo "✅ Inisialisasi awal selesai."
else
    echo "✅ Setup sudah dilakukan sebelumnya, melewati inisialisasi..."
fi

# Migrasi Dihapus. Lakukan migrasi secara manual: `docker exec app php artisan migrate --force`

exec "$@"
