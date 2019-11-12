<?php
//Juan Marroquin 19845
class InfoOds{
	//atributos
	private $pobreza= "";
	private $hambre= "";
	private $salud= "";
	private $educacion= "";
	private $igualdad;
	private $saneamiento;
	private $energias;
	private $crecimientos;
	private $infraestructura;
	private $desigualdades;
	private $asentamientos;
	private $produccion;
	private $clima;
	private $conservacion;
	private $proteger;
	private $promover;
	private $fortalecer;
	// constructor InfoOds
	function __construct(){
		$this->pobreza = "La pobreza va más allá de la falta de ingresos y recursos para garantizar unos medios de vida sostenibles. La pobreza es un problema de derechos humanos. Entre las distintas manifestaciones de la pobreza figuran el hambre, la malnutrición, la falta de una vivienda digna y el acceso limitado a otros servicios básicos como la educación o la salud. También se encuentran la discriminación y la exclusión social, que incluye la ausencia de la participación de los pobres en la adopción de decisiones, especialmente de aquellas que les afectan.";
		$this->hambre = "El sector alimentario y el sector agrícola ofrecen soluciones claves para el desarrollo y son vitales para la eliminación del hambre y la pobreza. Gestionadas de forma adecuada, la agricultura, la silvicultura y la acuicultura pueden suministrar comida nutritiva a todo el planeta, así como generar ingresos decentes, apoyar el desarrollo centrado en las personas del campo y proteger el medio ambiente.";
		$this->salud = "Para lograr los Objetivos de Desarrollo Sostenible es fundamental garantizar una vida saludable y promover el bienestar universal. Sin embargo, en muchas regiones se enfrentan a graves riesgos para la salud, como altas tasas de mortalidad materna y neonatal, la propagación de enfermedades infecciosas y no transmisibles y una mala salud reproductiva. En las últimas décadas, se han obtenido grandes avances en relación con el aumento de la esperanza de vida y la reducción de algunas de las causas de muerte más comunes relacionadas con la mortalidad infantil y materna, pero para lograr la meta de este Objetivo, que establece que en 2030 haya menos de 70 fallecimientos, se deberá mejorar la asistencia cualificada en los partos. Asimismo, para alcanzar el objetivo de reducir las muertes prematuras por enfermedades no transmisibles en un tercio para 2030 se requerirá aplicar tecnologías más eficaces de combustibles limpios para cocinar y educación sobre los riesgos del tabaco.";
		$this->educacion = "La educación es la base para mejorar nuestra vida y el desarrollo sostenible. Además de mejorar la calidad de vida de las personas, el acceso a la educación inclusiva y equitativa puede ayudar abastecer a la población local con las herramientas necesarias para desarrollar soluciones innovadoras a los problemas más grandes del mundo.";
		$this->igualdad = "La igualdad entre los géneros no es solo un derecho humano fundamental, sino la base necesaria para conseguir un mundo pacífico, próspero y sostenible. Lamentablemente, en la actualidad, 1 de cada 5 mujeres y niñas entre 15 y 49 años de edad afirmaron haber experimentado violencia física o sexual, o ambas, en manos de su pareja en los 12 meses anteriores a ser preguntadas sobre este asunto. Además, 49 países no tienen leyes que protejan a las mujeres de la violencia doméstica. Asimimso, aunque se ha avanzado a la hora de proteger a las mujeres y niñas de prácticas nocivas como el matrimonio infantil y la mutilación genital femenina (MGF), que ha disminuido en un 30% en la última década, aún queda mucho trabajo por hacer para acabar con esas prácticas.";
		$this->saneamiento = "El agua libre de impurezas y accesible para todos es parte esencial del mundo en que queremos vivir. Hay suficiente agua dulce en el planeta para lograr este sueño. Sin embargo, actualmente el reparto del agua no es el adecuado y para el año 2050 se espera que al menos un 25% de la población mundial viva en un país afectado por escasez crónica y reiterada de agua dulce. La sequía afecta a algunos de los países más pobres del mundo, recrudece el hambre y la desnutrición.";
		$this->energias = "La energía es fundamental para casi todos los grandes desafíos y oportunidades a los que hace frente el mundo actualmente. Ya sea para el empleo, la seguridad, el cambio climático, la producción de alimentos o para aumentar los ingresos. El acceso universal a la energía es esencial. Trabajar para alcanzar las metas de este objetivo es especialmente importante ya que afecta directamente en la consecución de otros objetivos de desarrollo sostenible. Es vital apoyar nuevas iniciativas económicas y laborales que aseguren el acceso universal a los servicios de energía modernos, mejoren el rendimiento energético y aumenten el uso de fuentes renovables para crear comunidades más sostenibles e inclusivas y para la resiliencia ante problemas ambientales como el cambio climático.";
		$this->crecimientos = "Aproximadamente la mitad de la población mundial todavía vive con el equivalente a unos 2 dólares estadounidenses diarios, con una tasa mundial de desempleo del 5.7%, y en muchos lugares el hecho de tener un empleo no garantiza la capacidad para escapar de la pobreza. Debemos reflexionar sobre este progreso lento y desigual, y revisar nuestras políticas económicas y sociales destinadas a erradicar la pobreza.";
		$this->infraestructura = "El sector manufacturero es un impulsor importante del desarrollo económico y del empleo. En la actualidad, sin embargo, el valor agregado de la industralización per cápita es solo de 100 dólares en los países menos desarrollados en comparación con más de 4500 dólares en Europa y América del Norte. Otro factor importante a considerar es la emisión de dióxido de carbono durante los procesos de fabricación. Las emisiones han disminuido en la última década en muchos países, pero esta disminución no ha sido uniforme en todo el mundo.";
		$this->desigualdades = "La comunidad internacional ha logrado grandes avances sacando a las personas de la pobreza. Las naciones más vulnerables —los países menos adelantados, los países en desarrollo sin litoral y los pequeños Estados insulares en desarrollo— continúan avanzando en el ámbito de la reducción de la pobreza. Sin embargo, siguen existiendo desigualdades y grandes disparidades en el acceso a los servicios sanitarios y educativos y a otros bienes productivos.";
		$this->asentamientos = "Los problemas que enfrentan las ciudades, como la recogida y la gestión seguras de los desechos sólidos, se pueden vencer de manera que les permita seguir prosperando y creciendo, y al mismo tiempo aprovechar mejor los recursos y reducir la contaminación y la pobreza. Un ejemplo de esto es el aumento en los servicios municipales de recogida de desechos. El futuro que queremos incluye ciudades de oportunidades, con acceso a servicios básicos, energía, vivienda, transporte y más facilidades para todos.";
		$this->produccion = "El consumo y la producción sostenible consisten en fomentar el uso eficiente de los recursos y la energía, la construcción de infraestructuras que no dañen el medio ambiente, la mejora del acceso a los servicios básicos y la creación de empleos ecológicos, justamente remunerados y con buenas condiciones laborales.  Todo ello se traduce en una mejor calidad de vida para todos y, además, ayuda a lograr planes generales de desarrollo, que rebajen costos económicos, ambientales y sociales, que aumenten la competitividad y que reduzcan la pobreza.";
		$this->clima = "El cambio climático afecta a todos los países en todos los continentes, produciendo un impacto negativo en su economía, la vida de las personas y las comunidades. En un futuro se prevé que las consecuencias serán peores. Los patrones climáticos están cambiando, los niveles del mar están aumentando, los eventos climáticos son cada vez más extremos y las emisiones del gas de efecto invernadero están ahora en los niveles más altos de la historia. Si no actuamos, la temperatura media de la superficie del mundo podría aumentar unos 3 grados centígrados este siglo. Las personas más pobres y vulnerables serán los más perjudicados.";
		$this->conservacion = "Los océanos del mundo —su temperatura, química, corrientes y vida— mueven sistemas que hacen que la Tierra sea habitable para la humanidad. Nuestras precipitaciones, el agua potable, el clima, el tiempo, las costas, gran parte de nuestros alimentos e incluso el oxígeno del aire que respiramos provienen, en última instancia del mar y son regulados por este. Históricamente, los océanos y los mares han sido cauces vitales del comercio y el transporte.";
		$this->proteger = "El 30.7% de la superficie terrestre está cubierta por bosques y estos, además de proporcionar seguridad alimentaria y refugio, son fundamentales para combatir el cambio climático, pues protegen la diversidad biológica y las viviendas de la población indígena. Al proteger los bosques, también podremos fortalecer la gestión de los recursos naturales y aumentar la productividad de la tierra.";
		$this->promover = "Las amenazas de homicidio intencional, la violencia contra los niños, la trata de personas y la violencia sexual, son temas importantes que debe ser abordados para crear sociedades pacíficas e inclusivas. Allanan el camino para la provisión de acceso a la justicia para todos y para la construcción de instituciones efectivas y responsables en todos los niveles.";
		$this->fortalecer = "Se han realizado progresos en relación a las alianzas para el financiamiento, especialmente con un aumento de la ayuda dirigida a los refugiados en los países donantes. Sin embargo, se requieren más alianzas para la prestación de servicios fijos masivos, que son aún en la actualidad de costo muy elevado. También hay una falta de censos de población y vivienda, necesarios para obtener datos desglosados que sirvan de base para la implementación de políticas y programas de desarrollo.";
		
	}
	public function getProduccion(){
		return $this->produccion;
	}

	public function getClima(){
		return $this->clima;
	}

	public function getConservacion(){
		return $this->conservacion;
	}

	public function getProteger(){
		return $this->proteger;
	}

	public function getPromover(){
		return $this->promever;
	}

	public function getFortalecer(){
		return $this->fortalecer;
	}
?>
