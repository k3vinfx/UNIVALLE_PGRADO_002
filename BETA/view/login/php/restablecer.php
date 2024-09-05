<?php 
    include "./conexion.php";
    $email = $_POST['email'];
    $bytes = random_bytes(5);
    $token = bin2hex($bytes);

    include "mail_reset.php";
    if($enviado){
        $conexion->query("INSERT INTO passwords(email, token, codigo) 
            VALUES('$email', '$token', '$codigo')") or die($conexion->error);

        // Mensaje con estilo
        echo '
        <div class="message-container">
            <div class="message-box">
                <h2>¡Éxito!</h2>
                <p>Verifica tu email para restablecer tu cuenta.</p>
            </div>
        </div>

        <style>
            .message-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f0f0f0;
                animation: fadeIn 1s ease-in-out;
            }

            .message-box {
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
                font-family: Arial, sans-serif;
                max-width: 400px;
                margin: 20px;
            }

            .message-box h2 {
                color: #28a745;
                font-size: 24px;
                margin-bottom: 10px;
            }

            .message-box p {
                font-size: 18px;
                color: #333;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                }
                to {
                    opacity: 1;
                }
            }
        </style>
        ';
    }
?>
