using System;
using System.Runtime.Serialization;

namespace Examen3.modelos
{
    [DataContract]
    public class Tiquete
    {
        [DataMember]
        public int Id { get; set; }
        [DataMember]
        public string Marca { get; set; }
        [DataMember]
        public string Ram { get; set; }
        [DataMember]
        public string Hdd { get; set; }
        [DataMember]
        public string Procesador { get; set; }
        [DataMember]
        public string Descripcion { get; set; }
        [DataMember]
        public int Activo { get; set; }
        [DataMember]
        public DateTime Fecha { get; set; }
        [DataMember]
        public string Tipo { get; set; }
        [DataMember]
        public string Estado { get; set; }
        [DataMember]
        public int Cliente_id { get; set; }
        [DataMember]
        public int Taller_id { get; set; }
        [DataMember]
        public int Usuario_id { get; set; }
    }
}