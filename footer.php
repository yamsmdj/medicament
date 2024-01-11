    <style>
        body {
            margin: 0;
        }

        main {
            flex: 1; 
        }

        footer {
            color: white;
            padding: 20px 0;
            width: 100%;
        }

        .cta-text {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cta-text span {
            margin-bottom: 10px;
        }

        .copyright {
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px 0;
        }
    </style>
</head>
<body>

    <div class="container my-5">
        <section>
            
        </section>
    </div>

    <footer class="text-center text-white">
        <div class="container p-4 pb-0">
            <section class="cta-text">
                <p>
                    <span class="me-3">La Magie se trouve ici </span>
                    <button type="button" href="/index.php" class="btn btn-outline-light btn-rounded">Découvrir</button>
                </p>
            </section>
        </div>

        <div class="text-center p-3 copyright">
            © <?php echo date("Y"); ?>
        </div>
    </footer>

    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
