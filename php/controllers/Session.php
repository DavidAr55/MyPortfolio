<?php
    class Session {
        public function __construct() {
            if (session_status() === PHP_SESSION_ACTIVE)
                return;

            session_start();
        }

        public function setSession($key, $value) {
            $_SESSION[$key] = $value;
        }

        public function getSession($key) {
            if (isset($_SESSION[$key])) {
                return $_SESSION[$key];
            }
            return null;
        }

        public function issetSession($key) {
            if (isset($_SESSION[$key]))
                return true;
            else
                return false;
        }

        public function removeSession($key) {
            if (isset($_SESSION[$key])) {
                unset($_SESSION[$key]);
            }
        }

        public function closeSession() {
            session_unset();
            session_destroy();
        }

        public function isTheSessionActive() {
            return session_status() === PHP_SESSION_ACTIVE;
        }
    }