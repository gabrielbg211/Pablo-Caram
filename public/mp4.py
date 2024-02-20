from moviepy.editor import VideoFileClip

def convert_webm_to_mp4(input_file, output_file):
    # Cargar el archivo WebM
    clip = VideoFileClip(input_file)
    
    # Definir el nombre de salida y convertir a MP4
    clip.write_videofile(output_file, codec="libx264", audio_codec="aac")
    
    print(f"Video convertido a MP4: {output_file}")

# Ruta del archivo WebM de entrada
input_file = "video/Logo.webm"

# Ruta del archivo MP4 de salida
output_file = "video/Logo.mp4"

# Convertir el archivo WebM a MP4
convert_webm_to_mp4(input_file, output_file)
