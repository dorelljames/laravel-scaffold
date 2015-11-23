<?php 

class [test] extends \TestCase
{
	public function testIndex()
	{
		$this->call('GET', '[model]');
        $this->assertResponseOk();
    }

    public function testShow()
    {
        $this->call('GET', '[model]/1');
        $this->assertResponseOk();
    }

    public function testCreate()
    {
        $this->call('GET', '[model]/create');
        $this->assertResponseOk();
    }

    public function testEdit()
    {
        $this->call('GET', '[model]/1/edit');
        $this->assertResponseOk();
    }
}
