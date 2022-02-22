<?php

namespace AmirHossein5\LaravelComponents\Tests;

class AssetTest extends TestCase
{
    public function test_components_assets_loads_correctly()
    {
        foreach ($this->hasStyleAsset as $comopnent) {
            $blade = $this->blade("@lComponentStyles('$comopnent')");
            $blade->assertSee("<link rel=stylesheet href=laravelComponents/css/$comopnent.css >", false);
            $this->get("laravelComponents/css/$comopnent.css")->assertStatus(200);
        }
        foreach ($this->hasScriptAsset as $comopnent) {
            $blade = $this->blade("@lComponentScripts('$comopnent')");
            $blade->assertSee("<script src=laravelComponents/js/$comopnent.js></script>");
            $this->get("laravelComponents/js/$comopnent.js")->assertStatus(200);
        }
    }

    public function test_if_passes_wrong_component_name_for_asset_returns_404()
    {
        $blade = $this->blade("@lComponentStyles('wrong')");
        $blade->assertSee('<link rel=stylesheet href=laravelComponents/css/wrong.css >', false);
        $this->get('laravelComponents/css/wrong.css')->assertStatus(404);
    }

    public function test_if_component_dont_have_requested_asset_returns_404()
    {
        foreach ($this->hasStyleAsset as $comopnent) {
            $blade = $this->blade("@lComponentScripts('$comopnent')");
            $blade->assertSee("<script src=laravelComponents/js/$comopnent.js></script>", false);
            $this->get("laravelComponents/js/$comopnent.js")->assertStatus(404);
        }
        foreach ($this->hasScriptAsset as $comopnent) {
            $blade = $this->blade("@lComponentStyles('$comopnent')");
            $blade->assertSee("link rel=stylesheet href=laravelComponents/css/$comopnent.css >", false);
            $this->get("laravelComponents/css/$comopnent.css")->assertStatus(404);
        }
    }
}
