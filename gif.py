from moviepy.editor import *

def convertir_mp4_a_gif(ruta_mp4, ruta_gif):
    video = VideoFileClip(ruta_mp4)
    gif = video.subclip(0, video.duration)  # Convierte todo el video
    gif.write_gif(ruta_gif)

if __name__ == "__main__":
    ruta_mp4 = "video/Logo.mp4"  # Ruta al archivo MP4
    ruta_gif = "video/Logo.gif"  # Ruta donde se guardará el archivo GIF
    convertir_mp4_a_gif(ruta_mp4, ruta_gif)
