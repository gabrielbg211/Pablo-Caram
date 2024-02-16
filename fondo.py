import numpy as np
import cv2

def create_solid_background(width, height, color):
    background = np.full((height, width, 3), color, dtype=np.uint8)
    return background

def add_solid_background(video_path, background_color, output_path, target_fps):
    cap = cv2.VideoCapture(video_path)
    if not cap.isOpened():
        print("Error al abrir el video")
        return
    
    # Obtener las dimensiones del video y la velocidad de fotogramas original
    width = int(cap.get(cv2.CAP_PROP_FRAME_WIDTH))
    height = int(cap.get(cv2.CAP_PROP_FRAME_HEIGHT))

    # Crear una imagen de fondo sólido
    background = create_solid_background(width, height, background_color)

    # Crear un objeto VideoWriter para guardar el video con fondo sólido
    fourcc = cv2.VideoWriter_fourcc(*'VP90')  # Cambiado a VP90 para WebM
    out = cv2.VideoWriter(output_path, fourcc, target_fps, (width, height))

    while True:
        ret, frame = cap.read()
        if not ret:
            break
        
        # Superponer el fotograma sobre el fondo sólido
        result = cv2.addWeighted(frame, 1, background, 0.5, 0)

        # Escribir el fotograma procesado al archivo de salida
        out.write(result)

        cv2.imshow('Frame', result)
        if cv2.waitKey(30) & 0xFF == ord('q'):
            break

    cap.release()
    out.release()
    cv2.destroyAllWindows()

# Ejemplo de uso:
video_path = "video/Logo.mov"
background_color = (0, 0, 0)  # Color negro (en formato BGR)
output_path = "video/logo.webm"  # Cambiado a WebM
target_fps = 30  # Velocidad de fotogramas deseada
add_solid_background(video_path, background_color, output_path, target_fps)
