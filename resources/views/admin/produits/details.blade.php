<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>informations</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }

        .product-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            text-align: center;
        }

        .product-image img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: transform 0.5s;
        }

        .product-image img:hover {
            transform: rotate(360deg);
        }

        .product-details {
            padding: 20px;
        }

        .product-details h1 {
            font-size: 24px;
        }

        .product-details p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="product-container">
        <div class="product-image">
       
        </div>
        <div class="product-container">
    <div class="product-image">
        <!-- Image du produit ici -->
    </div>
    <div class="product-details">
        <h1 class="text-warning" style="font-weight: bold; font-size: 24px;">Informations clients </h1>
        <p style="font-size: 18px; color: #333;">Nom complets : {{ $user->name }}</p>
        <p style="font-size: 18px; color: #333;">Adresse-email : {{ $user->email }}</p>
        <p style="font-size: 18px; color: #333;">Adresse : {{ $user->adresse }}</p>
        <p style="font-size: 18px; color: #333;">Téléphone : {{ $user->telephone }}</p>
    </div>
    <a href="{{ url('adminproduit') }}" class="btn btn-primary mt-3" style="text-align: center;">Retourner vers la page Liste des utilisateurs</a>
</div>

    </div>

    <script>
        const productImage = document.querySelector(".product-image img");

        productImage.addEventListener("mouseover", () => {
            productImage.style.transform = "rotate(360deg)";
        });

        productImage.addEventListener("mouseout", () => {
            productImage.style.transform = "rotate(0deg)";
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
