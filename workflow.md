# 🧭 Flujo de trabajo Git para desarrollador individual

Este documento describe un flujo simple y eficiente para gestionar tus cambios en Git si trabajas solo. Usa una rama `dev` para desarrollo y `master` para producción o código estable.

---

## 🚀 Estructura de ramas
dev ← rama local de desarrollo (activa)
master ← rama local estable (producción)
remotes/origin/master ← rama remota principal (en GitHub)


---

## ✅ Flujo recomendado

### 1. Trabaja en la rama `dev`

Todos tus cambios, nuevas funcionalidades y pruebas deben hacerse en `dev`.

```bash
git checkout dev
# Haces cambios...
git add .
git commit -m "Describe claramente lo que hiciste"

---
2. Cuando el cambio esté listo, intégralo a master

git checkout master
git pull origin master          # Asegúrate de tener la última versión remota
git merge dev                   # Une los cambios de dev
git push origin master          # Sube la rama estable a GitHub