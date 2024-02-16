import cv2

def resize_video(input_video_path, output_video_path, new_width):
    cap = cv2.VideoCapture(input_video_path)
    if not cap.isOpened():
        print("Error al abrir el video")
        return

    # Obtener las dimensiones originales del video
    original_width = int(cap.get(cv2.CAP_PROP_FRAME_WIDTH))
    original_height = int(cap.get(cv2.CAP_PROP_FRAME_HEIGHT))

    # Calcular el nuevo alto manteniendo la relación de aspecto
    new_height = int(original_height * (new_width / original_width))

    # Crear un objeto VideoWriter para guardar el video redimensionado
    fourcc = cv2.VideoWriter_fourcc(*'mp4v')  # Puedes ajustar el códec según tus necesidades
    out = cv2.VideoWriter(output_video_path, fourcc, 30.0, (new_width, new_height))

    while True:
        ret, frame = cap.read()
        if not ret:
            break

        # Redimensionar el fotograma al nuevo tamaño
        resized_frame = cv2.resize(frame, (new_width, new_height))

        # Escribir el fotograma redimensionado al archivo de salida
        out.write(resized_frame)

        cv2.imshow('Frame', resized_frame)
        if cv2.waitKey(30) & 0xFF == ord('q'):
            break

    cap.release()
    out.release()
    cv2.destroyAllWindows()

# Ejemplo de uso:
input_video_path = "video/logo_sin_fondo.webm"
output_video_path = "video/salida.webm"
new_width = 1280  # Especifica la nueva anchura deseada
resize_video(input_video_path, output_video_path, new_width)
