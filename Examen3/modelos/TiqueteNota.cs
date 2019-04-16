using System;
using System.Runtime.Serialization;

namespace Examen3.modelos
{
    [DataContract]
    public class TiqueteNota
    {
        [DataMember]
        public int Id { get; set; }
        [DataMember]
        public DateTime Fecha { get; set; }
        [DataMember]
        public string Nota { get; set; }
        [DataMember]
        public int Tiquete_id { get; set; }
        [DataMember]
        public int Usuario_id { get; set; }
    }
}