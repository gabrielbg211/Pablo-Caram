import cv2

def remove_background(video_path, output_path):
    cap = cv2.VideoCapture(video_path)
    if not cap.isOpened():
        print("Error al abrir el video")
        return
    
    # Inicializar el método de substracción de fondo
    background_subtractor = cv2.createBackgroundSubtractorMOG2()

    # Crear un objeto VideoWriter para guardar el video sin fondo
    fourcc = cv2.VideoWriter_fourcc(*'VP90')  # Usamos VP9 como códec
    out = cv2.VideoWriter(output_path, fourcc, 30.0, (int(cap.get(3)), int(cap.get(4))))

    while True:
        ret, frame = cap.read()
        if not ret:
            break
        
        # Aplicar el método de substracción de fondo al fotograma actual
        mask = background_subtractor.apply(frame)

        # Invertir la máscara
        mask = cv2.bitwise_not(mask)

        # Aplicar la máscara al fotograma original
        result = cv2.bitwise_and(frame, frame, mask=mask)

        # Escribir el fotograma procesado al archivo de salida
        out.write(result)

        cv2.imshow('Frame', result)
        if cv2.waitKey(30) & 0xFF == ord('q'):
            break

    cap.release()
    out.release()
    cv2.destroyAllWindows()

video_path = "video/Logo.mov"
output_path = "video/logo_sin_fondo.webm"
remove_background(video_path, output_path)
