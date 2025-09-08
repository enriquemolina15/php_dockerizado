# 🖥️ Ejercicios PHP Dockerizados

Bienvenido a los **ejercicios de PHP** preparados para ejecutarse en **Docker + Apache + PHP 8.4**.  

---

## 📂 Estructura del proyecto

- `docker-compose.yml` → Configuración de Docker.  
- `www/` → Carpeta con los ejercicios PHP.  
- `.gitignore` → Archivos ignorados por Git.  

---

## 🚀 Cómo ejecutar

1. Clona el repositorio:

```bash
git clone https://github.com/enriquemolina15/php_dockerizado.git
cd php_dockerizado
```

2. Levanta el contenedor:

```bash
docker compose up -d
```

3. Abre tu navegador:

```
http://localhost:8080
```

---

## 🏷️ Menú de ejercicios

| Emoji | Ejercicio | Descripción |
|-------|-----------|-------------|
| 🌞 | Pirámide de figuras | Dibuja pirámides y triángulos con figuras seleccionadas. |
| 🔢 | Factorial | Calcula factorial de un número (iterativo y recursivo). |
| 🃏 | Brisca | Selecciona 10 cartas al azar y suma puntos según la Brisca. |
| 📝 | Otros ejercicios | Otros scripts y prácticas de PHP. |

---

## ⚙️ Notas y consejos

- Los cambios en `www/` se reflejan automáticamente en el contenedor.  
- Para detener el contenedor:

```bash
docker compose down
```

- Para crear nuevos ejercicios, agrega una carpeta en `www/` con tus archivos PHP.
