# Panel Trico - Sistema de Login

Este proyecto es un sistema de autenticación llamado **Panel Trico**, desarrollado en PHP para funcionar en XAMPP o LAMP.

---

## 📂 Estructura del Proyecto

```
/panel-trico/
├── a/
│   ├── login.php
│   ├── dashboard.php
│   └── logout.php
├── db/
│   └── conexion.php
├── assets/
│   └── style.css
├── panel_trico.sql
└── README.md
```

---

## 🚀 Cómo usar este proyecto

### 1. Requisitos
- PHP ≥ 7.4
- Servidor Apache (XAMPP, LAMP, etc.)
- MySQL

### 2. Instalación

1. Copia `panel-trico/` a tu carpeta `htdocs` de XAMPP:
   - Linux: `/opt/lampp/htdocs/`
   - Windows: `C:\xampp\htdocs\`

2. Importa `panel_trico.sql` a tu base de datos local (phpMyAdmin o consola).

3. Asegúrate de que Apache y MySQL estén corriendo.

4. Abre en el navegador:
```
http://localhost/panel-trico/a/login.php
```

---

## 🔐 Usuario de prueba

```
Usuario: admin
Clave: 123456
```

---

## ✍️ Créditos

Desarrollado en entorno controlado para fines educativos.