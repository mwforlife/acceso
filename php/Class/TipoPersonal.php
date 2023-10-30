 <?php
    class TipoPersonal
    {
        private $id;
        private $tipo;

        public function __construct($id, $tipo)
        {
            $this->id = $id;
            $this->tipo = $tipo;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getTipo()
        {
            return $this->tipo;
        }

        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        public function setId($id)
        {
            $this->id = $id;
        }
    }
