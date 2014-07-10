namespace Test;

class Compare
{
	const PI = 3.14;

	public function isLessInt(int a, int b)
	{
		return a < b;
	}

	public function isLessDouble(double a, double b)
	{
		return a < b;
	}

	public function isLessThenPi(double a)
	{
		return a < self::PI;
	}

	public function isMoreThenPi(double a)
	{
		return self::PI < a;
	}

	/**
	 * @link https://github.com/phalcon/zephir/issues/411
	 */
	public function testVarWithStringEquals(string! str)
	{
		if str === "wrong testing" {
			let str = "NOK";
		} else {
			if str === "another testing" {
				let str = "NOK";
			} else {
				if str === "testing" {
					let str = "OK";
				} else {
					let str = "NOK";
				}
			}
		}

		return str;
	}
}