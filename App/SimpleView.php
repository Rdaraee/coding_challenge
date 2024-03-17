<?php
namespace Verso\App;

class SimpleView {
    /**
     * Render array data in a readable format.
     *
     * @param array $data The array to be rendered.
     * @return string The rendered HTML.
     */
    public static function render(array $data = []): string
    {
        $html = "<html><head></head><body>";
        foreach ($data as $dataItem) {
            $html .= htmlspecialchars($dataItem) . "</br>";
        }

        $html .= "</body></html>";

        return $html;
    }
}