<?php
    namespace Common\Env;

    /**
     * Class EnvConstants
     *
     * Constant biến môi trường
     */
    class EnvConstants{

        /** Tên Database sử dụng cho web
         * @return string
         */
        static function DATABASE_NAME(): string{
            return $_ENV['DATABASE_NAME'];
        }

        /** Username Database
         * @return string
         */
        static function DATABASE_USERNAME(): string{
            return $_ENV['DATABASE_USERNAME'];
        }

        /** Host Database ( mặc định localhost )
         * @return string
         */
        static function DATABASE_HOST(): string{
            return $_ENV['DATABASE_HOST'];
        }

        /**
         * Database password
         * @return string
         */
        static function DATABASE_PASSWORD(): string{
            return $_ENV['DATABASE_PASSWORD'];
        }
    }
